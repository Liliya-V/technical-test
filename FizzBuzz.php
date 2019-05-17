<?php

class NumbersController
{
    /** Method takes two integers and two strings,
     * loops over given integers and returns all numbers in between them, assigning
     * different messages depending on if the numbers are divisible or not by 3 and 5.
     * Returns an error if a first number is bigger than second.
     * @param int $a expected - random number from 1 tp 100
     * @param int $b expected - random number from 1 tp 100
     * @param string $msg1
     * @param string $buzz
     * @return string
     */
    public function getNumbersAndMessages(int $a, int $b, string $msg1, string $msg2): string
    {
        if ($b < $a) {
            $error = 'Integer A is less than integer B, so there is nothing in between to output';
            return $error;
        }
            $output = '';
        for ($i = $a; $i <= $b; $i++) {
            if ($i % 15 === 0) {
                $output .= $i ." ".$msg1 ." ". $msg2 ."<br />";
            } else if ($i % 3 == 0) {
                $output .= $i ." " .$msg1 . "<br />";
            } else if ($i % 5 == 0) {
                $output .= $i ." ". $msg2 . "<br />";
            } else {
                $output .=  $i . "<br />";
            }
        }
        return $output;
    }
}
$numbersController = new numbersController();
$a = rand(1,100);
$b = rand(1,100);
$msg1 = 'fizz';
$msg2 = 'buzz';
$output = $numbersController->getNumbersAndMessages($a, $b, $msg1, $msg2);
echo $output;


