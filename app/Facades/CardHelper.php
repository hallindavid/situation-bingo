<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Helpers\CardHelper
 *
 * @method static mixed generateCards()
 */
class CardHelper extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return \App\Helpers\CardHelper::class;
    }
}