<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;

class TypeController extends Controller
{
  public function index()
  {
      // DBよりTypeテーブルの値を全て取得
      $types = Type::all();

      // 取得した値をビュー「type/index」に渡す
      return view('type/index', compact('types'));
  }

  public function edit($id)
  {
      // DBよりURIパラメータと同じIDを持つTypeの情報を取得
      $type = Type::findOrFail($id);

      // 取得した値をビュー「type/edit」に渡す
      return view('type/edit', compact('type'));
  }
}
