<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RouteShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('route_shop')->insert([
            [ 'route_id' => 1,  'shop_id' => 1 ],
            [ 'route_id' => 1,  'shop_id' => 2 ],
            [ 'route_id' => 2,  'shop_id' => 1 ],
        ]);
    }
}
