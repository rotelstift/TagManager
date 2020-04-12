<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>配信先定義登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
          @include('message')
          @if($target == 'store')
            <form action="/destination" method="post">
          @elseif($target == 'update')
            <form action="/destination/{{ $destination->id }}" method="post">
                <!-- updateメソッドにはPUTメソッドがルーティングされているのでPUTにする -->
                <input type="hidden" name="_method" value="PUT">
          @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">配信先定義名</label>
                    <input type="text" class="form-control" name="name" value="{{ $destination->name }}">
                    <label for="definition">定義用キーワード</label>
                    <input type="text" class="form-control" name="definition" value="{{ $destination->definition }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/destination">戻る</a>
            </form>
        </div>
    </div>
</div>
