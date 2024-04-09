<?php
$str = "hello this is ali.I am student.I live in Karachi.";
echo strlen($str) . "<br>";
echo ucwords($str)."<br>";
// print_r(explode(' ',$str));
print_r(explode('.',$str));
$stdName = "ali";
echo strrev($stdName)."<br>";
echo str_word_count($str)."<br>"; 
echo strcmp('Ali',$stdName)."<br>";
echo str_replace('ali','asim',$str) . "<br>";
$stdData = ["ali", "lives" ,"in","karachi"];
echo implode(' ' , $stdData);

?>