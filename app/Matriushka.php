<?php

namespace App;


class Matriushka
{
    public static function setUp($expression)
    {
        return 'Hola';
    }

    public static function tearDown($expression)
    {
        return 'Adeu';
    }
}