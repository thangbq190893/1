<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','body','user_id'];
    public function owner(){
        return $this->belongsTo(User::class);
    }
}
