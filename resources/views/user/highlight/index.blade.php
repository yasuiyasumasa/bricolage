@extends('layouts.user')
@section('title', 'ハイライト')

@section('content')

<div class="container">
  <div class="row">
      <img class="img-fluid" src="http://localhost/bricolage/public/image/book_cover/WS000001.JPG" width=100 height=100 alt="Book image">
    <div class="col-lg-6">
      <div class="body">
        <h3 class="title">書籍名</h3>
        <p class="auther">著者</p>
        <p class="publisher">出版社</p>
        <p class="publisher_day">出版年月日</p>
        <p class="ISBN">ISBNコード</p>
        <p class="read_day">読んだ日</p>
        <p class="highlight">ハイライト○件</p>
      </div>
    </div>
  </div>
</div>

@endsection