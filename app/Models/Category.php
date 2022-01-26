<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends = [
        'parent',
    ];

    #One to many (inverse)/belongs to
    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    #one to many
    #Her alt kategorinin birden fazla alt kategorisi var
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
