<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    public function catigory()
    {
        return $this->belongsTo(Catigory::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
