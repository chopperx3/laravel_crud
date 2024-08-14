<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Define los atributos que se pueden asignar en masa
    protected $fillable = ['title', 'body'];
}
