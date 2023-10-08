<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = 
    ['name', 'description','price','discountPercentage','rating','stock','brand','image','category_id','creator_id'];

    ## define relation between category model and product model
    function category(){
        return $this->belongsTo(Category::class);
    }
}
