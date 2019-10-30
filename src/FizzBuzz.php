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

        if($input == 5) {
            return self::BUZZ;
        }

        return $input;
    }

    private function isMultipleOfThree(int $value): bool
    {
        return $value % 3 == 0;
    }
}
