<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Illuminate\Support\Facades\Redirect;

class SuppliersController extends Controller
{
    public function getList() {
        $data['suppliers'] = Supplier::all();
        return view('suppliers.list', $data);
    }

    public function getCreate() {
        //$data['categories'] = Category::all();
        return view('suppliers.create', isset($data) ? $data : array());
    }

    public function postCreate(Request $request) {
        $supp = new Supplier();
        $supp->title = $request->title;
        $supp->code = $request->code;
        $supp->tax_number = $request->tax_number;
        $supp->phone = $request->phone;
        $supp->fax = $request->fax;
        $supp->website = $request->website;
        $supp->email = $request->email;
        $supp->description = '';
        $supp->save();

        return Redirect::to(route('suppliers.list'))->with('success', 'Supplier added successfully!');
    }

    public function getEdit($supplier_id) {
        $data['supplier'] = Supplier::findOrFail($supplier_id);
        return view('suppliers.edit', $data);
    }

    public function postEdit($supplier_id, Request $request) {
        $supp = Supplier::findOrFail($supplier_id);
        $supp->title = $request->title;
        $supp->code = $request->code;
        $supp->tax_number = $request->tax_number;
        $supp->phone = $request->phone;
        $supp->fax = $request->fax;
        $supp->website = $request->website;
        $supp->email = $request->email;
        $supp->description = '';
        $supp->save();

        return Redirect::to(route('suppliers.list'))->with('success', 'Supplier updated successfully!');
    }

    public function getDelete($supplier_id) {
        $data['supplier'] = Supplier::findOrFail($supplier_id);
        return view('suppliers.delete', $data);
    }

    public function postDelete($supplier_id, Request $request) {
        if (!is_null($request->confirm)) {
            Supplier::find($supplier_id)->delete();
            return Redirect::to(route('suppliers.list'))->with('success', 'Supplier deleted successfully!');
        } else {
            return Redirect::to(route('suppliers.list'))->with('success', 'Nothing was deleted!');
        }
    }
}
