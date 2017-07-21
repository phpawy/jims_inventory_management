<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function getList()
    {
        $data['products'] = Product::all();
        return view('products.list', $data);
    }

    public function getCreate()
    {
        $data['products'] = Product::all();
        return view('products.list', $data);
    }
}
