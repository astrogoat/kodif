<?php

namespace Astrogoat\Kodif;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Kodif\Kodif
 */
class KodifFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'kodif';
    }
}
