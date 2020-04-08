<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Template;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::all();

        return view('template/index', compact('templates'));
    }

    public function edit($id)
    {
        $template = Template::findOrFail($id);

        return view('template/edit', compact('template'));
    }
}
