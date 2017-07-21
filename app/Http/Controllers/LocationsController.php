<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Illuminate\Support\Facades\Redirect;

class LocationsController extends Controller
{
    public function getList() {
        $data['locations'] = Location::all();
        return view('locations.list', $data);
    }

    public function getCreate() {
        $data['locations'] = Location::all();
        return view('locations.create', $data);
    }

    public function postCreate(Request $request) {
        $location = new Location();
        $location->title = $request->title;
        $location->save();

        return Redirect::to(route('locations.list'))->with('success', 'Location created successfully!');
    }

    public function getEdit($location_id) {
        $data['location'] = Location::findOrFail($location_id);
        return view('locations.edit', $data);
    }

    public function postEdit($location_id, Request $request) {
        $location = Location::findOrFail($location_id);
        $location->title = $request->title;
        $location->save();

        return Redirect::to(route('locations.list'))->with('success', 'Location updated successfully!');
    }

    public function getDelete($location_id) {
        $data['location'] = Location::findOrFail($location_id);
        return view('locations.delete', $data);
    }

    public function postDelete($location_id, Request $request) {
        if (!is_null($request->confirm)) {
            Location::find($location_id)->delete();
            return Redirect::to(route('locations.list'))->with('success', 'Location deleted successfully!');
        } else {
            return Redirect::to(route('locations.list'))->with('success', 'Nothing was deleted!');
        }
    }
}
