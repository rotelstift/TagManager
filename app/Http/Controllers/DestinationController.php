<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class DestinationController extends Controller
{
    //
    public function index()
    {
        $destinations = Destination::all();

        return view('destination/index', compact('destinations'));
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);

        return view('destination/edit', compact('destination'));
    }

    public function update(Request $request, $id)
    {
        $destination = Destination::findOrFail($id);

        $destination->name = $request->name;
        $destination->definition = $request->definition;

        $destination->save();

        return redirect('/destination');
    }
}
