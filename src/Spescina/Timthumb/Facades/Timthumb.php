<?php

namespace Spescina\Timthumb\Facades;

use Illuminate\Support\Facades\Facade;

class Timthumb extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'timthumb'; }

}