<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attribute;
use App\Category;
use App\MasterValue;
use Illuminate\Support\Facades\Redirect;

class AttributeController extends Controller
{
    public function getList() {
        $data['attributes'] = Attribute::all();
        return view('attributes.list', $data);
    }

    public function getCreate() {
        $data['attributes'] = Attribute::all();
        $data['categories'] = Category::all()->pluck('title', 'id');
        //dd($data['categories']);
        return view('attributes.create', $data);
    }

    public function postCreate(Request $request) {

        $att = new Attribute;
        $att->title = $request->title;
        $att->type = $request->type;
        $att->categories_id = $request->category_id;
        $att->save();

        $mastervalues = explode(",", $request->mastervalue);
        if(is_array($mastervalues)) {
            foreach($mastervalues AS $mv) {
                $new_mv = new MasterValue(['master_value' => trim($mv)]);
                $att->mastervalues()->save($new_mv);
            }
        }
        return Redirect::to(route('attributes.list'))->with('success', 'Attribute created successfully!');
    }

    public function getEdit($attribute_id) {
        $data['attribute'] = Attribute::findOrFail($attribute_id);
        $data['categories'] = Category::all()->pluck('title', 'id');
        return view('attributes.edit', $data);
    }

    public function postEdit($attribute_id, Request $request) {
        $att = Attribute::findOrFail($attribute_id);
        $att->title = $request->title;
        $att->type = $request->type;
        $att->categories_id = $request->category_id;
        $att->save();

        return Redirect::to(route('attributes.list'))->with('success', 'Attribute updated successfully!');
    }

    public function getDelete($attribute_id) {
        $data['attribute'] = Attribute::findOrFail($attribute_id);
        return view('attributes.delete', $data);
    }

    public function postDelete($attribute_id, Request $request) {
        if (!is_null($request->confirm)) {
            Attribute::find($attribute_id)->delete();
            return Redirect::to(route('attributes.list'))->with('success', 'Attribute deleted successfully!');
        } else {
            return Redirect::to(route('attributes.list'))->with('success', 'Nothing was deleted!');
        }
    }
}
