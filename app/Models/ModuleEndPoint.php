<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleEndPoint extends Model
{
    protected $table = "Settings.ModuleEndPoint";
    protected $primaryKey = 'ModuleEndPointId';

    public function moduleAction()
    {
        return $this->belongsTo(ModuleAction::class, 'ModuleActionId', 'ModuleActionId');
    }
}
