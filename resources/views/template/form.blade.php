<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>テンプレート登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
          @include('type/message')
          @if($target == 'store')
            <form action="/template" method="post">
          @elseif($target == 'update')
            <form action="/template/{{ $template->id }}" method="post">
                <!-- updateメソッドにはPUTメソッドがルーティングされているのでPUTにする -->
                <input type="hidden" name="_method" value="PUT">
          @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">テンプレート名</label>
                    <input type="text" class="form-control" name="name" value="{{ $template->name }}">
                    <label for="type_id">タイプ選択</label>
                    {{ Form::select('type_id', $types, null, ['class' => 'form-control', 'name' => 'type_id']) }}
                    <label for="body">テンプレート本文</label>
                    <textarea name="body" rows="8" cols="80" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/type">戻る</a>
            </form>
        </div>
    </div>
</div>
