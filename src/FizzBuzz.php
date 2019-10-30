<?php

namespace FizzBuzz;

final class FizzBuzz
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public function transform(int $input): string
    {
        if($input % 3 == 0) {
            return self::FIZZ;
        }

        if($input == 5) {
            return self::BUZZ;
        }

        return $input;
    }
}
