<?php

namespace App\Tests\Shared\Domain;

final class UuidMother
{
    public static function create(): string
    {
        return Mother::random()->unique()->uuid();
    }

}