<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Redirect;

class CustomersController extends Controller
{
    public function getList() {
        $data['customers'] = Customer::all();
        return view('customers.list', $data);
    }

    public function getCreate() {
        //$data['categories'] = Category::all();
        return view('customers.create', isset($data) ? $data : array());
    }

    public function postCreate(Request $request) {
        $customer = new Customer();
        $customer->title = $request->title;
        $customer->code = $request->code;
        $customer->tax_number = $request->tax_number;
        $customer->phone = $request->phone;
        $customer->fax = $request->fax;
        $customer->website = $request->website;
        $customer->email = $request->email;
        $customer->description = '';
        $customer->save();

        return Redirect::to(route('customers.list'))->with('success', 'Customer added successfully!');
    }

    public function getEdit($customer_id) {
        $data['customer'] = Customer::findOrFail($customer_id);
        return view('customers.edit', $data);
    }

    public function postEdit($customer_id, Request $request) {
        $customer = Customer::findOrFail($customer_id);
        $customer->title = $request->title;
        $customer->code = $request->code;
        $customer->tax_number = $request->tax_number;
        $customer->phone = $request->phone;
        $customer->fax = $request->fax;
        $customer->website = $request->website;
        $customer->email = $request->email;
        $customer->description = '';
        $customer->save();

        return Redirect::to(route('customers.list'))->with('success', 'Customer updated successfully!');
    }

    public function getDelete($customer_id) {
        $data['customer'] = Customer::findOrFail($customer_id);
        return view('customers.delete', $data);
    }

    public function postDelete($customer_id, Request $request) {
        if (!is_null($request->confirm)) {
            Customer::find($customer_id)->delete();
            return Redirect::to(route('customers.list'))->with('success', 'Customer deleted successfully!');
        } else {
            return Redirect::to(route('customers.list'))->with('success', 'Nothing was deleted!');
        }
    }
}
