<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }
}
