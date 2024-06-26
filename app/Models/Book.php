<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 
        'author',
        'year',
        'sub_category_id'
    ];
    public function subCategory(){
        return $this->belongsTo(SubCategory::class,'sub_category_id','id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
