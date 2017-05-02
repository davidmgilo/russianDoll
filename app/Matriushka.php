<?php

namespace App;


class Matriushka
{
    public static function setUp($model)
    {
        return 'Hola';
    }

    public static function tearDown($model)
    {
        return 'Adeu';
    }
}