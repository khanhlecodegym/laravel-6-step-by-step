<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $name = 'CodeGym';

    return view('test', [
        'name' => $name
    ]);
});

// Route::get('brands/{brand}', function ($brand) {
//     $brands = [
//         '1' => 'Huế',
//         '2' => 'Đà Nẵng',
//         '3' => 'Hà Nội'
//     ];

//     if (!array_key_exists($brand, $brands)) {
//         abort(404, 'Chi Nhánh này không tồn tại');
//     }

//     return view('brand', [
//         'brand' => $brands[$brand]
//     ]);
// });


Route::get('brands/{brand}', 'BrandController@index');
