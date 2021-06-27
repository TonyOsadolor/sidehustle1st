<?php

/*
    Write a range function that takes two arguments, start and end, and returns an array containing all the numbers from start up to (and including) end
*/
// array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
echo "the Numbers array are between 0 and 12 <br>";
foreach (range(0, 12) as $number) {
    echo " ". $number;
}

echo "<br><br>";

/*
    write a sum function that takes an array of numbers and returns the sum of these numbers
*/
$addnum = array(2, 4, 6, 8);
echo "The Sum of the Array Numbers are: " . array_sum($addnum);

?>