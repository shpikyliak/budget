<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Message extends Model
{
    protected $guarded = [];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
