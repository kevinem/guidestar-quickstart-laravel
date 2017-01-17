<?php


namespace KevinEm\GuideStar\Laravel\Facades;


use Illuminate\Support\Facades\Facade;

class QuickStartDetail extends Facade
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
        return 'guidestar-quickstart-detail';
    }
}