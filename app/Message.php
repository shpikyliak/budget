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
    public function type()
    {
        return $this->belongsTo(MessagesType::class);
    }
    public function from_department()
    {
        return $this->belongsTo(Department::class);
    }
    public function to_department()
    {
        return $this->belongsTo(Department::class);
    }

    public function message_type()
    {
        return $this->belongsTo(MessagesType::class);
    }
}
