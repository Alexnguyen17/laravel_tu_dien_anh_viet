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

Route::get('/login', function () {
    return view('Dictionary');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    $dictionary = ["hello" => "xin chao",
        "awesome" => "quá đỉnh",
        "book" => "quyển sách",
        "cool" => "tuyệt vời"
    ];

    foreach ($dictionary as $word => $description) {
        if ($request->search == $word) {
            return view('mear', [
                'dictionary' => $dictionary
            ]);
        }
    }

    return view('find_error');
});