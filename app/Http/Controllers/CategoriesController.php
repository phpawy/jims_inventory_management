<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Redirect;

class CategoriesController extends Controller {

    public function getList() {
        $data['categories'] = Category::all();
        return view('categories.list', $data);
    }

    public function getCreate() {
        $data['categories'] = Category::all();
        return view('categories.create', $data);
    }

    public function postCreate(Request $request) {
        $category = new Category();
        $category->title = $request->title;
        $category->save();

        return Redirect::to(route('categories.list'))->with('success', 'Category created successfully!');
    }

    public function getEdit($category_id) {
        $data['category'] = Category::findOrFail($category_id);
        return view('categories.edit', $data);
    }

    public function postEdit($category_id, Request $request) {
        $category = Category::findOrFail($category_id);
        $category->title = $request->title;
        $category->save();

        return Redirect::to(route('categories.list'))->with('success', 'Category updated successfully!');
    }

    public function getDelete($category_id) {
        $data['category'] = Category::findOrFail($category_id);
        return view('categories.delete', $data);
    }

    public function postDelete($category_id, Request $request) {
        if (!is_null($request->confirm)) {
            Category::find($category_id)->delete();
            return Redirect::to(route('categories.list'))->with('success', 'Category deleted successfully!');
        } else {
            return Redirect::to(route('categories.list'))->with('success', 'Nothing was deleted!');
        }
    }

}
