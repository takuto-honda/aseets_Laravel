<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    //1対多の親なので単数形
    public function area()
    {
        //親を紐付ける
        return $this->belongsTo(Area::class);
    }

    public function routes()
    {
        //多対多
        return $this->belongsToMany(Route::class);
    }
}
