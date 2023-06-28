<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTruckRequest;
use App\Http\Requests\UpdateTruckRequest;

class TruckController extends Controller
{
    public function index()
    {
        // dd('fgfg');
        $truck = Truck::get();
        return view('trucks.index', compact('truck'));
    }

    public function create()
    {
        return view('trucks.create');
    }

    public function edit(Truck $truck)
    {
        $truck = Truck::get();
        return view('trucks.edit', compact('truck'));
    }

    public function update(UpdateTruckRequest $request, Truck $truck)
    {
        $truck->customUpdate($request);
        return to_route('trucks.index');
    }

    public function store(StoreTruckRequest $request)
    {
        $request->validate([
            'unitnum' => 'required',
            'year' => 'required',
            'notes' => 'required'
        ]);

        Truck::create($request->all());
        return to_route('home')->with('success', 'Truck has been added succesfully');
    }

    public function destroy($id)
    {
        $truck = Truck::find($id);
        $truck->delete();
        return to_route('home')->with('errors', 'Truck has been removed');
    }
    public function show(Truck $truck)
    {
        return view('trucks.show', compact('truck'));
    }
}