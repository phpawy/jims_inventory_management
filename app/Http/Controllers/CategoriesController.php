<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    public function getList()
    {
        $data['categories'] = Category::all();
        return view('categories.list', $data);
    }
    public function getCreate()
    {
        $data['categories'] = Category::all();
        return view('categories.create', $data);
    }
}
