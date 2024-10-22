<?php declare(strict_types=1);

class TestClass
{
    public function __construct(
        public int    $id,
        public string $title,
        public string $description,
    )
    {
    }
}
