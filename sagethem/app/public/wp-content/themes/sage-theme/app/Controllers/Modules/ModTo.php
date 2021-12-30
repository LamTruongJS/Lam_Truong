<?php

namespace App\Controllers\Modules;

class ModTo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
