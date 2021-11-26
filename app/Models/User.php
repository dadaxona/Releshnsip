<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','password'];
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class,'id');
    }

    public function grup()
    {
        return $this->belongsToMany(Group::class);
    }
    
    public function location()
    {
        return $this->hasOneThrough(location::class, Profile::class);
    }
    
    public function comment()
    {
        return $this->belongsToMany(Comment::class);
    }

    public function video()
    {
        return $this->hasOneThrough(Video::class, Catigory::class);
    }
}
