<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-05-17
 * Time: 23:25
 */

require_once 'FizzBuzz1.php';

class Test
{

    public function testGetNumbersAndMessages()
    {
        $numbersController = new NumbersController();
        $result = $numbersController->getPhoneNumber(10, 15);
        $this->assertEquals($result, '101112131415');
    }
}
