<?php

use PHPUnit\Framework\TestCase;

require_once 'FizzBuzz.php';

class Test extends TestCase
{
    public function testFizzBuzz_success_1()
    {
        $integerAnalizer = new integerAnalizer();
        $result = $integerAnalizer->fizzBuzz(1, 2);
        $expected = '1<br>2<br>';
        $this->assertEquals($result, $expected);
    }

    public function testFizzBuzz_success_2()
    {
        $integerAnalizer = new integerAnalizer();
        $result = $integerAnalizer->fizzBuzz(1, 15);
        $expected = '1<br>2<br>3 Fizz <br>4<br>5 Buzz <br>6 Fizz <br>7<br>8<br>9 Fizz <br>10 Buzz <br>11<br>12 Fizz <br>13<br>14<br>15 Fizz Buzz <br>';
        $this->assertEquals($result, $expected);
    }

    public function testFizzBuzz_success_3()
    {
        $integerAnalizer = new integerAnalizer();
        $result = $integerAnalizer->fizzBuzz(12, 18);
        $expected = '12 Fizz <br>13<br>14<br>15 Fizz Buzz <br>16<br>17<br>18 Fizz <br>';
        $this->assertEquals($result, $expected);
    }

    public function testFizzBuzz_incorrect_data()
    {
        $this->expectException(Exception::class);

        $integerAnalizer = new IntegerAnalizer();
        $integerAnalizer->fizzBuzz(2, 1);
    }

    public function testFizzBuzz_invalidDataType_string()
    {
        $this->expectException(TypeError::class);

        $integerAnalizer = new integerAnalizer();
        $integerAnalizer->fizzBuzz('string1', 'string2');
    }


}
