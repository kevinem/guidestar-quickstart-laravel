<?php


namespace KevinEm\GuideStar\Laravel\Facades;


use Illuminate\Support\Facades\Facade;

class QuickStartSearch extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'guidestar-quickstart-search';
    }
}