<?php
$str = "This";
echo  $str."<br>";
$lenn = strlen($str);
echo "the  length of this string is ". $lenn .". Thank you <br>";
echo "the number of word in this string is ". str_word_count($str) .". Thank you <br>";
echo "<br>";
echo "the reverse string is ". strrev($str) .". Thank you <br>";
echo "the search for is in this string is ". strpos($str,'is') .". Thank you <br>";
echo "the search for is in this string is ". str_replace('is','at',$str) .". Thank you <br>";




?>