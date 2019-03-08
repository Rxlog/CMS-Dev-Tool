<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubModuleAction extends Model
{
    protected $table = "Settings.SubModuleActions";
    protected $primaryKey = 'SubModuleActionId';

    public function moduleAction()
    {
        return $this->belongsTo(ModuleAction::class, 'ModuleActionId', 'ModuleActionId');
    }

    public function subModuleAction()
    {
        return $this->hasOne(SubAction::class, 'SubActionId', 'SubActionId');
    }
}
