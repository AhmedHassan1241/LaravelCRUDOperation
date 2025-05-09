<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    // use HasFactory; //for generate dummy data
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
