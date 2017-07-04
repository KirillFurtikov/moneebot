<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Ethereum extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ethereum';
    }
}

