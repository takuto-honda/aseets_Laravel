<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller
{
    public function index()
    {
        // 1対多 親->子
        $shops = Area::find(1)->shops;
        //住所が東京に紐づくお店が表示される
        // dd($shops);

        //親->子
        $area = Shop::find(1)->area;
        //お店が高級パンやに紐づく住所が表示される
        // dd($area);
    }
}
