<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =['catigory_id', 'user_id', 'name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function catigory()
    {
        return $this->belongsTo(Catigory::class);
    }
}
