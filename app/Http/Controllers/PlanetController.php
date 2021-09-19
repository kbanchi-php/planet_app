<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlanetRequest;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        $data = [
            'planets' => $planets,
        ];
        return view('planets.index', $data);
    }

    public function create()
    {
        return view('planets.create');
    }

    public function store(PlanetRequest $request)
    {
        $planet = new Planet();

        $planet->name_ja = $request->name_ja;
        $planet->name_en = $request->name_ja;
        $planet->radius_km = $request->radius_km;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        $data = [
            'id' => $id,
            'planet' => $planet,
        ];
        return view('planets.show', $data);
    }

    public function edit($id)
    {
        $planet = Planet::find($id);
        $data = [
            'id' => $id,
            'planet' => $planet,
        ];
        return view('planets.edit', $data);
    }

    public function update(PlanetRequest $request, $id)
    {
        $planet = Planet::find($id);

        $planet->name_ja = $request->name_ja;
        $planet->name_en = $request->name_ja;
        $planet->radius_km = $request->radius_km;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }

    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();
        return redirect('/planets');
    }
}
