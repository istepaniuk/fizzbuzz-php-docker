<?php

namespace FizzBuzz;

final class FizzBuzz
{
    public function transform(int $input): string
    {
        if($input == 3) {
            return 'Fizz';
        }

        return $input;
    }
}
