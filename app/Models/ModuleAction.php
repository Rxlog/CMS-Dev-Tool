<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleAction extends Model
{
    protected $table= "Settings.ModuleActions";
    protected $primaryKey = 'ModuleActionId';

    public function module()
    {
        return $this->belongsTo(ModuleAction::class, 'ModuleId', 'ModuleActionId');
    }

    public function action()
    {
        return $this->hasOne(Actions::class, 'ActionId', 'ActionId');
    }

    public function moduleEndPoints()
    {
        return $this->hasMany(ModuleEndPoint::class, 'ModuleActionId', 'ModuleActionId');
    }

    public function subModuleActions()
    {
        return $this->hasMany(SubModuleActions::class, 'ModuleActionId', 'ModuleActionId');
    }
}
