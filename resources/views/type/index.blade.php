@extends('layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">タイプ一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">タイプ名</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($types as $type)
      <tr>
        <td>
          <a href="/type/{{ $type->id }}/edit">{{ $type->id }}</a>
        </td>
        <td>{{ $type->name }}</td>
        <td>
          <form action="/type/{{ $type->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/type/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
@endsection
