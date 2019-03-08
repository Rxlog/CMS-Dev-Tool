<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubActions extends Model
{
    protected $table = "CMS.CMSSubActions";
    protected $primaryKey = 'SubActionId';

    public function mainAction()
    {
        return $this->belongsTo(Action::class, 'MainActionid', 'ActionId');
    }

    public function subModuleActions()
    {
        return $this->hasMany(SubModuleAction::class, 'SubActionId', 'SubActionId');
    }
}
