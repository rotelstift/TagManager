<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Template;
use App\Type;

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

    public function create()
    {
        // 空の$typeを渡す
        $template = new Template();
        $types = Type::pluck('name', 'id');

        return view('template/create', compact('template', 'types'));
    }

    public function store(Request $request)
    {
        $template = new Template();
        $template->name = $request->name;
        $template->type_id = $request->type_id;
        $template->template = $request->template;

        $template->save();

        return redirect("/template");
    }
}
