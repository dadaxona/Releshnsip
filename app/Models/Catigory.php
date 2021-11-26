<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigory extends Model
{
    use HasFactory;

    protected $fillable =['id','user_id'];
    
    public function post()
    {
       return $this->hasOne(Post::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
