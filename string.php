<?php 
// Original String: Hello, Vowel Count: 2, Reversed String: olleH
// Original String: World, Vowel Count: 1, Reversed String: dlroW
// Original String: PHP, Vowel Count: 0, Reversed String: PHP
// Original String: Programming, Vowel Count: 3, Reversed String: gnimmargorP

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {

    $letters = str_split($string);
    $vowelCount = 0;
    foreach ($letters as $letter ) {
        // echo $letter . " </br>";
        if($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u' || $letter == 'A' || $letter == 'E' || $letter == 'I' || $letter == 'O' || $letter == 'U'){
            $vowelCount++;
        }

    }
    echo "Original String: ". $string .", Vowel Count: ". $vowelCount .", Reversed String: ". strrev($string);
    echo "</br>";
}