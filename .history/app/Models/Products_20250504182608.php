<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //    // use HasFactory; //for generate dummy data

    protected $fillable=['name','price','description','category_id','image'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user(){
        ret
    }
}
