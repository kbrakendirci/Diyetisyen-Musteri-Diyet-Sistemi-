<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervation extends Model
{
    use HasFactory;

    public function user()
    {   #kredi kartı bilgileri bankaya gönderildikten sonraki aşama

        return  $this->belongsTo(User::class);
    }

    public function treatment()
    {
        return  $this->belongsTo(Treatment::class);
    }
}
