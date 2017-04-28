
    function color($list, $s = 3, $c = array()) {
        for ($i = 0; $i < $s; $i++) {
            $t1 = array();  // initializare array
            $m = 0;
            $y = 0;
            while ($y < $s) { // parcurgere pentru $y < 3
                $r = array_rand($list, 1); // alege random o culoare din array
                if ($y > 0) {  // verifica daca este prima iteratie
                    if (in_array($list[$r], $t1)) {  // verifica daca noua culoare aleasa exista in array
                        $t1[] = $list[$r];  // adaugare in array
                        $m++;
                        $y++;
                    } else if ($m >= 1) { //  conditie pentru minim 2 valori identice
                        $t1[] = $list[$r];
                        $y++;
                    } else {
                        continue;
                    }
                } else {  // adaugare in array la prima iteratie
                    $t1[] = $list[$r];
                    $y++;
                }
            }
            array_push($c, $t1); // adaugare in array
        }
        return $c;  // returnare rezultat
    }

