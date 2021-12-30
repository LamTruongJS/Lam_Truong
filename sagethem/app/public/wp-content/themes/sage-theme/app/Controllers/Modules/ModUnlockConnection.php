<?php

namespace App\Controllers\Modules;

class ModUnlockConnection
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
