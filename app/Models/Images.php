<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable = ['id','url','imageable_type','imageable_id'];

    public function tag()
    {
       return $this->belongsTo(Tag::class,'id');
    }
}
