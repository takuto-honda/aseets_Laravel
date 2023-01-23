<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('tests/test', [TestController::class, 'index']);

//RestFulで書く場合
// Route::resource('contacts', ContactFormController::class)->middleware(['auth']);

//1行ずつ書く場合
// Route::get('contacts', ContactFormController::class, 'index')->name(['contacts.index']);

//ルートのグループ化
//prefix(頭に文字を追加。ディレクトリ名などを入れる)
//middlewareを書くことでauthが記述した全体のルートにかかってくれる
route::prefix('contacts')->middleware(['auth'])
->controller(ContactFormController::class)
->name('contacts.')
->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
