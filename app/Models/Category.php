<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    #pass only these keywords to the create function
    protected $fillable = ['name', 'logo'];
    use SoftDeletes;
    // protected $guarded=['csrf_token']; #do not pass this keyword to create func

    function products(){
        return $this->hasMany(Product::class);
    }


}
