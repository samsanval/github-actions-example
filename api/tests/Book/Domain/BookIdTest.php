<?php

namespace App\Tests\Book\Domain;

use App\Tests\Shared\Domain\UuidMother;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class BookIdTest extends TestCase
{
    /** @test */
    public function itShouldThrowAnException()
    {
        $this->expectException(InvalidArgumentException::class);
        BookIdMother::create('Hola');
    }

    /** @test */
    public function itShouldCreateAValidId()
    {
        $uuid = UuidMother::create();
        $bookId = BookIdMother::create($uuid);
        $this->assertTrue($bookId->value() === $uuid);
    }

}
