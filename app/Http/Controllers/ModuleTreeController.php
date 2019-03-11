<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleTreeController extends Controller
{
    /**
     * Render modules tree
     *
     * @link https://github.com/amsik/liquor-tree
     * @return json
     */
    public function __invoke()
    {
        $modules = Module::get()->map(function ($module) {
            return ['text' => $module->Description];
        });

        return $modules;
    }
}
