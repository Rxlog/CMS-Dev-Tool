<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubModuleEndPoint extends Model
{
    protected $table = "Settings.SubModuleEndPoint";
    protected $primaryKey = 'SubModuleEndPointId';

    public function subModuleAction()
    {
        return $this->belongsTo(SubModuleAction::class, 'SubModuleActionId', 'SubModuleActionId');
    }
}
