<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    //1対多の子なので複数形
    public function shops()
    {
        //子供を紐付ける
        return $this->hasMany(Shop::class);
    }
}
