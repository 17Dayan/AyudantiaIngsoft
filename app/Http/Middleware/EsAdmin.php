<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EsAdmin as Middleware;

class EsAdmin extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
