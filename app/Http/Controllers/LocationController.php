<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index() {
    	$locations = Location::all();

    	return $this->output($locations);
    }

    public function store(Request $request) {
        $location = Location::create($request->all());

        return $this->output($location);
    }

    public function show($id) {
    	$location = Location::find($id);

    	if($location) {
    		return $this->output($location);
    	}

    	return $this->notFound('Location not found');
    }

    public function update(Request $request, $id) {
        $location = Location::find($id);

        if($location) {
            if($request->has('name')) { 
                $location->name = $request->get('name');
            }

            if($request->has('description')) { 
                $location->description = $request->get('description');
            }

            if($request->has('photo')) { 
                $location->photo = $request->get('photo');
            }

            if($request->has('longitude')) { 
                $location->longitude = $request->get('longitude');
            }

            if($request->has('latitude')) { 
                $location->latitude = $request->get('latitude');
            }
            
            $location->save();

            return $this->output($location);
        }

        return $this->notFound('Location not found');
    }

    public function destroy($id) {
        $location = Location::find($id);

        if($location->delete()) {
            return $this->output('Location deleted');
        } else {
            return $this->notFound('Location not found');
        }
    }
}
