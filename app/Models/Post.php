<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use HasFactory;
    // use HasFactory; //for generate dummy data

    protected $fillable = ['title', 'content'];

  
}
