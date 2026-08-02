<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            'name' => '坂田裕樹',
            'age' => 36,
            'hobbies' => ['カフェ巡り','釣り','旅行'],
        ];

        return view('profile', $data);
    }
}
