<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//使用するモデルを指定
use App\Models\Test;
//クエリビルダは使用する際以下を読み込む必要がある
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        //Eloquent
        //データを全て取得
        $test_models = Test::all();
        //データの数を取得
        $count = Test::count();
        //指定したレコードを取得
        $find_one = Test::findOrFail(2);
        //同じレコードを取得
        $where_srow = Test::where('text', '=', 'sasisuseso')->get();

        // //クエリビルダ
        // $queryBuilder = DB::table('tests')->where('text', '=', 'aiueo')
        // ->select('id', 'text')
        // ->get();

        // dd($queryBuilder);
        // echo '<pre>';var_dump($queryBuilder);echo '</pre>';exit;

        //view(ディレクトリ名.ファイル名)
        //compactはLaravelのヘルパ関数
        //compact('変数名')とすることで変数がviewに渡される
        return view('tests.test', compact('test_models'));
    }
}
