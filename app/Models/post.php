<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;



    // un post tiene un usuario
    public function user(){
        return $this->belongTo(User::class);
    }

    // un post tiene una categoria
    public function category(){
        return $this->belongTo(Category::class);
    }

}
