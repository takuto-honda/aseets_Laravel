<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public function Shops()
    {
        //多対多
        return $this->belongsToMany(Shop::class);
    }
}
