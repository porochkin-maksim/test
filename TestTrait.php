<?php declare(strict_types=1);

trait TestTrait
{

    public function getRandomInt(int $min, int $max): int
    {
        return rand($min, $max);
    }
}
