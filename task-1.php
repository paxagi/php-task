<?php
    function FibonacciNumbers($number) {
        static $cache = [0,1];
        $count = count($cache);
        if ($number > $count - 1) {
        for ($i = 2; $i <= $number; $i++) {
            $cache[$i] = $cache[$i-1] + $cache[$i-2];
        }
        }
        
        $result = $cache[$number];
        return $result;
        
    }
?>