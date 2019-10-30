<?php

namespace FizzBuzz;

final class FizzBuzz
{
    public function transform(int $input): string
    {
        if($input == 3) {
            return 'Fizz';
        }

        if($input == 5) {
            return 'Buzz';
        }

        return $input;
    }
}
