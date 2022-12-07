<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
use App\Http\Controllers\HomePageController;

use App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\Admin\FoodController;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomePageController::class,"index"])->name('home_page');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');

Route::middleware(['auth'])->group(function () {
    Route::get('/food/list', [FoodController::class,"list"])->name('food.list');
    Route::get('/food/form', [FoodController::class,"create"])->name('food.create');
    Route::post('/food', [FoodController::class,"store"])->name('food.store');
    Route::get('/food/{post}', [FoodController::class,"edit"])->name('food.edit');
    Route::put("/food/{post}", [FoodController::class,"update"])->name('food.update');
    Route::delete('/food/{post}', [FoodController::class,"destroy"])->name('food.destroy');
});


Route::get('/food',    [App\Http\Controllers\FoodController::class,"index"])->name('food');


Route::get('/food', function (Request $request) {

    $query = Food::query();

    if ($request->has('name')) {
        $query->where('name', 'LIKE', '%' . $request->name . '%');
    }

    $food = $query->paginate();

    return $food;
});