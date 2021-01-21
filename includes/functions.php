<?php
    function genNumbers() {
        $numbers = [];
        $temp = 0;
        for ($i=0; $i<5; $i++) {
            $temp = rand(1, 45);
            if (in_array($temp, $numbers)) {
                $temp = rand(1, 45);
            }
            array_push($numbers,$temp);
        }
        sort($numbers);
        return $numbers;
    }
    function genTzoker() {
        $tzoker = rand(1,25);
        return $tzoker;
    }

    function checkifwin($gen_numbers, $gen_tzoker, $numbers, $tzoker) {
        $count = 0;
        foreach($numbers as $n) {
            if (in_array($n,$gen_numbers)) {
                $count++;
            }
        }
        if ($tzoker == $gen_tzoker) {
            $message = 'You find ' . $count . '+1 numbers';
        }else if ($count == 5 || $count == 4 || $count == 3) {
            $message = 'You find ' . $count;
        }else {
            $message = 'You loose :(';
        }
        return $message;
    }
?>