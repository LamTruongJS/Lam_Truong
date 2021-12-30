<?php

namespace App\Controllers\Modules;

class ModErpFood
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
