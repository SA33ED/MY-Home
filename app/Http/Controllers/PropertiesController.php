<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\City;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{

    public function index()
    {
        return view('homepage.homepage');
    }

    public function index_loged()
    {
        $properties = Property::all();
        return view('properties.dashboard',compact('properties'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function result_by_dynamically(){
        $properties=Property::all();
        $term=request("term");
        $city=City::where('name',  'like' , "%$term%")->first();
        if(isset($city)){
            $pro = Property::where('city_id', $city->id)->get();
        } else {
            $pro = Property::where("type_id",'like', "%$term%")->orwhere('address','like', "%$term%")
        ->orwhere('customer_id','like', "%$term%")->orwhere('area','like', "%$term%")->orwhere('price_per_month','like', "%$term%")
        ->orwhere('num_of_rooms','like', "%$term%")->orwhere('num_of_bathrooms','like', "%$term%")
        ->orwhere('num_of_kitchen','like', "%$term%")->orwhere('num_of_floors','like', "%$term%")
        ->orwhere('floors','like', "%$term%")->get();
        }
        return view('properties.dashboard', compact('pro' , 'properties'));

    }
}
