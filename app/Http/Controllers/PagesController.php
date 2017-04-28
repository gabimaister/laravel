<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\iphone;

class PagesController extends Controller {

    public function home() {
        $people = array(0 => "Home user");
        return view('home', compact('people'));
    }

    function color($list, $s = 3, $c = array()) {
        for ($i = 0; $i < $s; $i++) {
            $t1 = array();
            $m = 0;
            $y = 0;
            while ($y < $s) {
                $r = array_rand($list, 1);
                if ($y > 0) {
                    if (in_array($list[$r], $t1)) {
                        $t1[] = $list[$r];
                        $m++;
                        $y++;
                    } else if ($m >= 1) {
                        $t1[] = $list[$r];
                        $y++;
                    } else {
                        continue;
                    }
                } else {
                    $t1[] = $list[$r];
                    $y++;
                }
            }
            array_push($c, $t1);
        }
        return $c;
    }


    public function about() {

        $list = array('red', 'green', 'blue', 'blue', 'green', 'silver', 'red', 'green', 'red', 'green', 'blue', 'orange', 'green', 'green', 'red', 'green');
        $colors = $this->color($list, 3);
//        $people = array(0 => "About user");
//        $iphone = iphone::all();
        return view('about', compact('colors'));
    }

}
