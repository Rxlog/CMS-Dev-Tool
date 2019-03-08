<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubModuleActions extends Model
{
    protected $table = "Settings.SubModuleActions";
    protected $primaryKey = 'SubModuleActionId';

    public function moduleAction()
    {
        return $this->belongsTo(ModuleAction::class, 'ModuleActionId', 'ModuleActionId');
    }

    public function subModuleAction()
    {
        return $this->hasOne(SubActions::class, 'SubActionId', 'SubActionId');
    }
}
