<?php
    require 'task-1.php';
    require 'task-3.php';

    for ($i = 0; $i <= 64; $i++) {
        echo FibonacciNumbers($i) . "; ";
    }

    echo "<br>";

    rsort($new);
    for ($i=0; $i < count($new); $i++) { 
      echo "<br>S: " . $new[$i] . ";";
    }
?>

