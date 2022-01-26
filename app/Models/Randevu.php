<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    use HasFactory;
    public function user()
    {   #kredi kartı bilgileri bankaya gönderildikten sonraki aşama

        return  $this->belongsTo(User::class);
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
