<?php

$std = ['id'=>1, 'name' => "ali"];

// foreach($std as $k => $v){
//     echo $k . " : ". $v ."<br>";
// }
// for loop

$keys = array_keys($std);
// print_r($keys);
// echo $keys;
for($i= 0 ; $i<count($keys) ; $i++){
         echo $std[$keys[$i]]. " <br>";
}


?>