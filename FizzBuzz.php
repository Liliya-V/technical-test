<?php

class IntegerAnalizer
{
    /**
     * Outputs integers between integer 1 and integer 2 (including them) and assigns
     * different messages depending on if the numbers are divisible by 3 or 5 or both.
     * @param int $integer1 - random number from 1 to 100
     * @param int $integer2 - random number from 1 to 100
     * @return string
     */
    public function fizzBuzz(int $integer1, int $integer2): string
    {
        $this->validateIntegers($integer1, $integer2);
        $output = '';
        for ($currentInt = $integer1; $currentInt <= $integer2; $currentInt++) {
            if ($currentInt % 15 === 0) {
                $output .= $currentInt . " Fizz Buzz <br>";
            } else if ($currentInt % 3 == 0) {
                $output .= $currentInt . " Fizz <br>";
            } else if ($currentInt % 5 == 0) {
                $output .= $currentInt . " Buzz <br>";
            } else {
                $output .=  $currentInt . "<br>";
            }
        }
        return $output;
    }

    /**
     * Checks if a second given integer is bigger than a first one.
     * @param int $integer1
     * @param int $integer2
     * @throws Exception
     */
    private function validateIntegers(int $integer1, int $integer2) {
        if ($integer2 < $integer1) {
            throw new Exception('Integer 2 can not be smaller than integer 1');
        }
    }
}
$integerAnalizer = new integerAnalizer();
$integer1 = rand(1,100);
$integer2 = rand(1,100);
try {
    $output = $integerAnalizer->fizzBuzz($integer1, $integer2);
    echo $output;
} catch (Exception $exeption) {
    echo $exeption->getMessage();
}



