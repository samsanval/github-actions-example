<?php

namespace App\Tests\Book\Domain;

use App\Book\Domain\BookId;
use App\Tests\Shared\Domain\UuidMother;

final class BookIdMother
{
    public static function create(?string $value = null): BookId
    {
        return new BookId($value ?? UuidMother::create());
    }

}