@extends('layouts.user')
@section('title', '本棚')

@section('content')
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="card img-thumbnail">
      <img class="card-img-top" src="..." alt="画像">
      <div class="card-body px-2 py-3">
        <h5 class="card-title">タイトル</h5>
        <p class="card-text">コンテンツ コンテンツ コンテンツ コンテンツ</p>
        <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">ボタン</a> <a href="#" class="btn btn-secondary btn-sm">ボタン</a></p>

      </div><!-- /.card-body -->
    </div><!-- /.card -->
  </div><!-- /.col-sm-6.col-md-3 -->
  ...
</div><!-- /.row -->
@endsection