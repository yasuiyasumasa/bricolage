@extends('layouts.user')
@section('title', '本棚')

@section('content')

<!-- Start Top SaerchBoxs -->
<!DOCTYPE html>
<html>
  <div class="container">
    <form th:action="@{/book/search}" method="get">
      <div class="form-group form-inline input-group-sm">
        <label for="name" class="col-md-2 control-label">書籍名</label>
        <input type="text" class="form-control col-md-5" id="name" name="name" placeholder="書籍名">
        <label for="isbn" class="col-md-2 control-label">ISBNコード</label>
        <input type="text" class="form-control col-md-3" id="isbn" name="isbn" placeholder="ISBNコード">
      </div>
      <div class="form-group form-inline input-group-sm">
        <label for="price_from" class="col-md-2 control-label">価格</label>
        <input type="number" class="form-control col-md-2" id="price_from" name="price_from" placeholder="下限">
        <label class="col-md-1 control-label">～</label>
        <input type="number" class="form-control col-md-2" id="price_to" name="price_to" placeholder="上限">
        <label for="publisher" class="col-md-2 control-label">出版社</label>
        <input type="text" class="form-control col-md-3" id="publisher" name="publisher" placeholder="出版社">
      </div>
      <div class="form-group form-inline input-group-sm">
        <label for="price_from" class="col-md-2 control-label">出版年月日</label>
        <input type="date" class="form-control col-md-3" id="publication_date_from" name="publication_date_from" placeholder="From">
        <label class="col-md-1 control-label">～</label>
        <input type="date" class="form-control col-md-3" id="publication_date_to" name="publication_date_to" placeholder="To">
        <div class="col-md-3"></div>
      </div>
      <div class="form-group form-inline input-group-sm">
        <label for="price_from" class="col-md-2 control-label">読んだ日</label>
        <input type="date" class="form-control col-md-3" id="publication_date_from" name="publication_date_from" placeholder="From">
        <label class="col-md-1 control-label">～</label>
        <input type="date" class="form-control col-md-3" id="publication_date_to" name="publication_date_to" placeholder="To">
        <div class="col-md-3"></div>
      </div>

      <div class="text-center">
        <button class="btn btn-sm btn-outline-secondary" type="submit">検索</button>
      </div>
      
    </form>
    <hr>
  </div>

  <!-- End Top SaerchBoxs -->

  <!-- Start Main Cards 1st -->

  <div class="container">
    <div class="card-deck">
      <div class="card">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000001.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000002.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000003.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000004.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
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
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000005.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000006.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000007.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
          </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000008.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
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
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000009.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000010.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000011.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <img class="card-img" src="http://localhost/bricolage/public/image/book_cover/WS000012.JPG" alt="Card image">
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h5 class="card-title">書籍名</h5>
              <h6>著者</h6>
              <h6>出版社</h6>
              <h6>出版年月日</h6>
              <h6>ISBN</h6>
              <h6>価格</h6>
              <h6>読んだ日</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</html>

<!-- End Main Cards 3rd -->


@endsection