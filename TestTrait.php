<?php declare(strict_types=1);

trait TestTrait
{
    /**
     * @throws \Random\RandomException
     */
    public function getRandomString(int $length): string
    {
        return bin2hex(random_bytes($length));
    }

    public function getRandomInt(int $min, int $max): int
    {
        return rand($min, $max);
    }
}
