<?php


namespace Farrokh\Cms;


use Illuminate\Support\Facades\Facade;

class CmsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cms';
    }
}
