<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

// /user/1?name=tuannda3&class=we16201&info=title

Route::get('/user/{id}', function (
    Request $request,
    $id,
) {
    $users = [
        [
            'name' => 'Tientph12974',
            'height' => 170,
            'weight' => 56,
            'age' => 25,
            'gender' => 1,
            'avatar' => "https://vnn-imgs-a1.vgcloud.vn/icdn.dantri.com.vn/2020/05/13/nam-sinh-truong-y-duoc-menh-danh-la-hot-boy-anh-the-bang-lai-xedocx-1589375942522.jpeg",
        ],
        [
            'name' => 'Phuongtph11111',
            'height' => 22,
            'weight' => 55,
            'age' => 25,
            'gender' => 0,
            'avatar' => "https://thuthuatnhanh.com/wp-content/uploads/2019/05/gai-xinh-toc-ngan-facebook.jpg",
        ],
    ];
    $res = $request->all();
    return view('info', compact('id', 'users', 'res'));
});
