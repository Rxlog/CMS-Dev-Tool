<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actions extends Model
{
    protected $table = "CMS.CMSActions";
    protected $primaryKey = 'ActionId';

    public function subActions()
    {
        return $this->hasMany(SubActions::class, 'MainActionId', 'ActionId');
    }

    public function moduleActions()
    {
        return $this->hasMany(ModuleAction::class, 'ActionId', 'ActionId');
    }
}
