<?php

namespace App\Controllers\Modules;

class ModEncompass
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
