<?php


namespace App\Tests\Shared\Domain;

use Faker\Factory;
use Faker\Generator;

class Mother
{
    private static Generator $faker;

    public static function random(): Generator
    {
        return self::$faker = self::$faker ?? Factory::create();
    }

}