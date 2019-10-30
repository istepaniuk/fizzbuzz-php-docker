<?php

namespace FizzBuzz;

final class FizzBuzz
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public function transform(int $input): string
    {
        if($this->isMultipleOfThree($input)) {
            return self::FIZZ;
        }

        if($this->isMultipleOfFive($input)) {
            return self::BUZZ;
        }

        return $input;
    }

    private function isMultipleOfThree(int $value): bool
    {
        return $value % 3 == 0;
    }

    private function isMultipleOfFive(int $input): bool
    {
        return $input % 5 == 0;
    }
}
