<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {   #kredi kartı bilgileri bankaya gönderildikten sonraki aşama

        return  $this->hasMany(User::class);
    }

    public function treatment()
    {
        return  $this->hasMany(Treatment::class);
    }

}
