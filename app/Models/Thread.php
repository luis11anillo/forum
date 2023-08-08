<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Thread (hilo) = Pregunta 

class Thread extends Model
{
    use HasFactory;        

    // una Pregunta pertenece a un Usuario
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function replies() 
    {
        return $this->hasMany(Reply::class);
    }

}
