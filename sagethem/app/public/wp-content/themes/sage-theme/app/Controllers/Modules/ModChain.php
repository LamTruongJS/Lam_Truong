<?php

namespace App\Controllers\Modules;

class ModChain
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
