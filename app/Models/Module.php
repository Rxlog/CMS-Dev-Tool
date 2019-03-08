<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table="Settings.Module";
    protected $primaryKey = 'ModuleId';

    public function moduleActions()
    {
        return $this->hasMany(ModuleAction::class, 'ModuleId', 'ModuleId');
    }

    public function subModules()
    {
        return $this->hasMany(Module::class, 'MainModule', 'ModuleId');
    }
}
