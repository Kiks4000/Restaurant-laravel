<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('restaurants.index', ['restaurant'=>Restaurants::latest()->get()]);
    }

    public function create()
    {
        return view('restaurants/create');
    }

    public function store(Request $request)
    {
        $attributes = $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'zipCode' => 'required',
            'town' => 'required',
            'country' => 'required',
            'description' => 'required',
            'review' => 'required'
        ]);
        Restaurants::create($attributes);

        return redirect('/restaurants');
    }

    public function show(Restaurants $restaurant)
    {
        return view('restaurants.show', ['restaurant'=>$restaurant]);
    }

    public function edit(Restaurants $restaurant)
    {
        return view('restaurants.edit', ['restaurant'=>$restaurant]);
    }

    public function update(Request $request, $id)
    {
        $attributes = $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'zipCode' => 'required',
            'town' => 'required',
            'country' => 'required',
            'description' => 'required',
            'review' => 'required'
        ]);

        Restaurants::find($id)->update($attributes);

        return redirect('/restaurants');
    }

    public function destroy($id)
    {
        Restaurants::find($id)->delete();
        return redirect('/restaurants');
    }
}
