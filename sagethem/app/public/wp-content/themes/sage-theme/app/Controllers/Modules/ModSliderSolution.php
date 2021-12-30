<?php

namespace App\Controllers\Modules;

class ModSliderSolution
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
