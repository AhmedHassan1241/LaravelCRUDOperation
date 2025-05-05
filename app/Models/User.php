<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;  // استيراد Authenticatable
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    //
    use Notifiable;  // استخدام Notifiable لإرسال الإشعارات

    protected $fillable = ['name','email','password'];

    public function products(){
        return $this->hasMany(Products::class);
    }
}
