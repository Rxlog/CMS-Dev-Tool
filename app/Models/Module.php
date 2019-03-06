<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table="Settings.Module";

    public function moduleActions()
    {
        return $this->hasMany(ModuleAction::class, 'ModuleId', 'ModuleId');
    }
}
