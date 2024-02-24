<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function beautyHealth()
{
    return view('products.index');
}

public function homeCare()
{
    return view('products.index');
}

public function babyKid()
{
    return view('products.index');
}
public function foodBeverage()
{
    return view('products.index');
}
}
