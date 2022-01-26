<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    #One to many (inverse)/belongs to
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function rezervation()
    {
        return $this->hasMany(Rezervation::class);
    }

}
