<?php

namespace App\Tests\Book\Domain;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class BookIdTest extends TestCase
{
    /** @test */
    public function itShouldThrowAnException()
    {
        $this->expectException(InvalidArgumentException::class);
        $bookIdNotUuid = BookIdMother::create('Hola');
    }

}