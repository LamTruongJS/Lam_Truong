<?php

namespace App\Controllers\Modules;

class BaiTapBuoi02
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
