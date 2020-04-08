<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>タイプ登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
          @if($target == 'store')
            <form action="/type" method="post">
          @elseif($target == 'update')
            <form action="/type/{{ $type->id }}" method="post">
                <!-- updateメソッドにはPUTメソッドがルーティングされているのでPUTにする -->
                <input type="hidden" name="_method" value="PUT">
          @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">タイプ名</label>
                    <input type="text" class="form-control" name="name" value="{{ $type->name }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/type">戻る</a>
            </form>
        </div>
    </div>
</div>
