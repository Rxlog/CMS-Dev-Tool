<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleAction extends Model
{
    protected $table= "Settings.ModuleActions";

    public function module()
    {
        return $this->belongsTo(ModuleAction::class, 'ModuleId', 'ModuleActionId');
    }
}
