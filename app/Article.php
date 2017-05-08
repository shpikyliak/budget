<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
