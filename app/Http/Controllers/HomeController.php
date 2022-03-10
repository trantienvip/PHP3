<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $key = "xxxx";
        $students = [
            [
                'name' => 'Tientph12974',
                'age' => 25,
                'class' => 'Web16201',
                'id' => '1',
                'image' => 'https://lh3.google.com/u/2/ogw/ADea4I6gkECeC9QGXYuJ73aRF0Im_S-V90HluqW5wXYg=s32-c-mo'
            ],
            [
                'name' => 'tienPH33333',
                'age' => 26,
                'class' => 'Web16201',
                'id' => '2',
                'image' => 'https://lh3.google.com/u/2/ogw/ADea4I6gkECeC9QGXYuJ73aRF0Im_S-V90HluqW5wXYg=s32-c-mo'
            ],
        ];
        return view('home.index', compact('key', 'students'));
    }
}
