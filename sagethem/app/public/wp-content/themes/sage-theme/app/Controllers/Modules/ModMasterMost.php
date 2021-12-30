<?php

namespace App\Controllers\Modules;

class ModMasterMost
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
