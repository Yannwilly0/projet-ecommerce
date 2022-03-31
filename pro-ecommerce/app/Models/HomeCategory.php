<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCategory extends Model
{
    protected $fillable = [
        // 'category_id',
        'top_left',
        'bottom_left',
        'center',
        'top_right',
        'bottom_right',
    ];

    // public function category(){
    // 	return $this->belongsTo(Category::class,'category_id','id');
    // }
}
