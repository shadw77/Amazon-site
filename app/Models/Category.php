<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    #pass only these keywords to the create function
    protected $fillable = ['name', 'logo'];
    // protected $guarded=['csrf_token']; #do not pass this keyword to create func
}
