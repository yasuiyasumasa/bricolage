@extends('layouts.user')
@section('title', 'ハイライト')

@section('content')

<div class="container" th:fragment="search">
  <form th:action="@{/highlight/search}" method="get">
    <div class="form-group form-inline input-group-sm">
      <label for="name" class="col-md-2 control-label">キーワード</label>
      <input type="text" class="form-control col-md-3" id="name" name="name" placeholder="キーワード">
      <button class="btn btn-sm btn-outline-secondary" type="submit">検索</button>
      <label for="isbn" class="col-md-2 control-label">ランダム5件</label>
      <button class="btn btn-sm btn-outline-secondary" type="submit">検索</button>
      <label for="isbn" class="col-md-2 control-label">関連なし5件</label>
      <button class="btn btn-sm btn-outline-secondary" type="submit">検索</button>
    </div>
  </from>
  <hr>
</div>

<div class="container">
  <div class="card-deck">
    <div class="card">
      <div class="row no-gutters">
        <div class="col-lg-12">
          <div class="card-body">
            <h5 class="card-title">ハイライト</h5>
            <h6>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</h6>
            <h5 class="card-title">キーワード</h5>
            <h6>いいい、ううう、えええ</h6>
            <h5 class="card-title">メモ</h5>
            <h6>おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</h6>
          </div>
        </div>
      </div> 
    </div> 


    <div class="card">
      <div class="row no-gutters">
        <div class="col-lg-12">
          <div class="card-body">
            <h5 class="card-title">ハイライト</h5>
            <h6>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</h6>
            <h5 class="card-title">キーワード</h5>
            <h6>いいい、ううう、えええ</h6>
            <h5 class="card-title">メモ</h5>
            <h6>おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</h6>
          </div>
        </div>
      </div>
    </div>
  
    <div class="card">
      <div class="row no-gutters">
        <div class="col-lg-12">
          <div class="card-body">
            <h5 class="card-title">ハイライト</h5>
            <h6>ああああああああああ</h6>
            <h5 class="card-title">キーワード</h5>
            <h6>いいい、ううう、えええ</h6>
            <h5 class="card-title">メモ</h5>
            <h6>おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</h6>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div> 

<p> </p>

<div class="container">
  <div class="card-deck">
    <div class="card">
      <div class="row no-gutters">
        <div class="col-lg-12">
          <div class="card-body">
            <h5 class="card-title">ハイライト</h5>
            <h6>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</h6>
            <h5 class="card-title">キーワード</h5>
            <h6>いいい、ううう、えええ</h6>
            <h5 class="card-title">メモ</h5>
            <h6>おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</h6>
          </div>
        </div>
      </div> 
    </div> 
    
    <div class="card">
      <div class="row no-gutters">
        <div class="col-lg-12">
          <div class="card-body">
            <h5 class="card-title">ハイライト</h5>
            <h6>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</h6>
            <h5 class="card-title">キーワード</h5>
            <h6>いいい、ううう、えええ</h6>
            <h5 class="card-title">メモ</h5>
            <h6>おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</h6>
          </div>
        </div>
      </div>
    </div>
  
    <div class="card">
      <div class="row no-gutters">
        <div class="col-lg-12">
          <div class="card-body">
            <h5 class="card-title">ハイライト</h5>
            <h6>ああああああああああ</h6>
            <h5 class="card-title">キーワード</h5>
            <h6>いいい、ううう、えええ</h6>
            <h5 class="card-title">メモ</h5>
            <h6>おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</h6>
          </div>
        </div>
      </div>
    </div>

  </div> 
</div> 

<p> </p>

<div class="container">
  <div class="card-deck">
    <div class="card">
      <div class="row no-gutters">
        <div class="col-lg-12">
          <div class="card-body">
            <h5 class="card-title">ハイライト</h5>
            <h6>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</h6>
            <h5 class="card-title">キーワード</h5>
            <h6>いいい、ううう、えええ</h6>
            <h5 class="card-title">メモ</h5>
            <h6>おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</h6>
          </div>
        </div>
      </div> 
    </div> 
    
    <div class="card">
      <div class="row no-gutters">
        <div class="col-lg-12">
          <div class="card-body">
            <h5 class="card-title">ハイライト</h5>
            <h6>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</h6>
            <h5 class="card-title">キーワード</h5>
            <h6>いいい、ううう、えええ</h6>
            <h5 class="card-title">メモ</h5>
            <h6>おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</h6>
          </div>
        </div>
      </div>
    </div>
  
    <div class="card">
      <div class="row no-gutters">
        <div class="col-lg-12">
          <div class="card-body">
            <h5 class="card-title">ハイライト</h5>
            <h6>ああああああああああ</h6>
            <h5 class="card-title">キーワード</h5>
            <h6>いいい、ううう、えええ</h6>
            <h5 class="card-title">メモ</h5>
            <h6>おおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</h6>
          </div>
        </div>
      </div>
    </div>

  </div> 
</div> 


@endsection