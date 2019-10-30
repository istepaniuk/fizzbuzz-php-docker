<?php

namespace FizzBuzz\Tests;

use PHPUnit\Framework\TestCase;
use FizzBuzz\FizzBuzz;

final class FizzBuzzTest extends TestCase
{
    public function test_it_transforms_1_to_1()
    {
        $fizzBuzz = new FizzBuzz();

        self::assertEquals("1", $fizzBuzz->transform(1));
    }

    public function test_it_transforms_3_to_fizz()
    {
        $fizzBuzz = new FizzBuzz();

        self::assertEquals("Fizz", $fizzBuzz->transform(3));
    }

    public function test_it_transforms_5_to_buzz()
    {
        $fizzBuzz = new FizzBuzz();

        self::assertEquals("Buzz", $fizzBuzz->transform(5));
    }

    public function test_it_transforms_multiples_of_3_to_fizz()
    {
        $fizzBuzz = new FizzBuzz();

        self::assertEquals("Fizz", $fizzBuzz->transform(99));
    }

    public function test_it_transforms_multiples_of_5_to_buzz()
    {
        $fizzBuzz = new FizzBuzz();

        self::assertEquals("Buzz", $fizzBuzz->transform(55));
    }
}
