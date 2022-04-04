@extends('layouts.user')
@section('title', '本棚')

@section('content')
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="http://localhost/bricolage/public/image/book_cover/WS000005.JPG" alt="" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">タイトル</h5>
        <h6 class="card-author">著者</h6>
        <h6 class="card-publisher">出版社</h6>
        <h6 class="card-first_issue_date">発行日</h6>
        <h6 class="card-isbn_code">ISBN</h5>
        <h6 class="card-day_i_read">読んだ日</h6>
        <h6 class="card-highlight">ハイライト○件</h6>
      </div>
    </div>
  </div>
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="http://localhost/bricolage/public/image/book_cover/WS000006.JPG" alt="" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">タイトル</h5>
        <h6 class="card-author">著者</h6>
        <h6 class="card-publisher">出版社</h6>
        <h6 class="card-first_issue_date">発行日</h6>
        <h6 class="card-isbn_code">ISBN</h5>
        <h6 class="card-day_i_read">読んだ日</h6>
        <h6 class="card-highlight">ハイライト○件</h6>
      </div>
    </div>
  </div>

</div>
@endsection