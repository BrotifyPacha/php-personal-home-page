<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TaskWarrior extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'App\Common\Components\TaskWarriorWrapper';
    }
}

