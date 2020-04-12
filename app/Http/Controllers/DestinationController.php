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
}
