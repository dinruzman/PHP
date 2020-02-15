<?php

 $a = array("a"=> 12, "b"=> 11, "c" => 5);
 $b = array_keys($a);
 $c = array_values($a);

 for($i = 0; $i < 3; $i++){

    echo "key = " . $b[$i] ." ,". " value = ". $c[$i] . "\n";
 }

?>