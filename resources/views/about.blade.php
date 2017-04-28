
@extends('layout')

@section('header')

@stop


@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
        @endif
    </div>
    @endif

    <div class="content">


        @foreach($colors as $key=>$col)
        <div class="row" style="">
            <div class="col-md-4" style="background: {{$colors[$key][0]}};height:20px;padding:2px;border:2px solid white;"></div>
            <div class="col-md-4" style="background: {{$colors[$key][1]}};height:20px;padding:2px;border:2px solid white;"></div>
            <div class="col-md-4" style="background: {{$colors[$key][2]}};height:20px;padding:2px;border:2px solid white;"></div>
        </div>
        <br />
        @endforeach



        <div class="container">

            <div class="panel panel-default">
                <div class="panel-heading">Insert!</div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong>There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ url('insert') }}">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">  

                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" min="1" max="20">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="description" min="1" max="500" value="<?php print_r($colors); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div> 

        </div>

        @stop


        @section('footer')

        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>

        @stop