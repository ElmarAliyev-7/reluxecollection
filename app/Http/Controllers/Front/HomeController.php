<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Models\{
    User,
    Brand,
    Category,
    Color,
    Condition,
    Size,
};

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function users()
    {
        return User::all();
    }

    public function brands()
    {
        return Brand::all();
    }

    public function categories()
    {
        return Category::all();
    }

    public function colors()
    {
        return Color::all();
    }

    public function conditions()
    {
        return Condition::all();
    }

    public function sizes()
    {
        return Size::all();
    }
}
