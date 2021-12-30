<?php

namespace App\Controllers\Modules;

class ModBacked
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
