@extends('layouts.user')
@section('title', 'ハイライト')

@section('content')

<!-- Start Top SaerchBoxs -->

<div class="container" th:fragment="search">
  <form th:action="@{/highlight/search}" method="get">
    <div class="form-group form-inline input-group-sm">
      <label for="name" class="col-md-2 control-label">検索

      </label>
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

<!-- End Top SaerchBoxs -->

<!-- Start Main Cards 1st -->

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

<!-- End Main Cards 1st -->

<p> </p>

<!-- Start Main Cards 2nd -->

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

<!-- End Main Cards 2nd -->

<p> </p>

<!-- Start Main Cards 3rd -->

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

<!-- End Main Cards 3rd -->











@endsection