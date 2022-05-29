@extends('layouts.user')
@section('title', 'ハイライト')

@section('content')

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="http://localhost/bricolage/public/image/book_cover/WS000004.JPG" alt="Card image">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">書籍名</h5>
        <h6>著者</h6>
        <h6>出版社</h6>
        <h6>出版年月日</h6>
        <h6>ISBN</h6>
        <h6>価格</h6>
        <h6>読んだ日</h6>      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="http://localhost/bricolage/public/image/book_cover/WS000004.JPG" alt="Card image">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

@endsection