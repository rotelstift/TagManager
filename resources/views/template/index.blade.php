@extends('layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">テンプレート一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">タイプ</th>
        <th class="text-center">テンプレート名</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($templates as $template)
      <tr>
        <td>
          <a href="/template/{{ $template->id }}/edit">{{ $template->id }}</a>
        </td>
        <td>{{ $template->type->name }}</td>
        <td>{{ $template->name }}</td>
        <td>
          <form action="/template/{{ $template->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/template/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
@endsection
