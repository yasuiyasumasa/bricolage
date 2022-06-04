@extends('layouts.user')
@section('title', '書籍の登録')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <form action="{{ action('User\BookController@create') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) > 0)
              <ul>
                @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
                @endforeach
            </ul>
          @endif
          <div class="form-group form-inline input-group-sm">
            <span class="col-md-3 text-md-left">書籍情報の取得</span>
          </div>

          <div class="form-group form-inline input-group-sm">
            <span class="col-md-2 text-md-right">Amazon検索</span>
            <input type="text" class="form-control col-sm-10" id="name" name="name" th:value="*{name}" placeholder="ISBNコード">
            <span class="col-sm-2"></span>
            <span class="col-sm-10 text-danger small" th:if="${#fields.hasErrors('name')}" th:errors="*{name}"></span>
          </div>
          <div class="text-center">
            <button class="btn btn-sm btn-outline-secondary" type="submit">検索</button>
          </div>
          <hr>

          <div class="form-group form-inline input-group-sm">
            <span class="col-md-4 text-md-left">オリジナル書籍の登録</span>
          </div>

          <div class="form-group form-inline input-group-sm">
            <span class="col-md-2 text-md-right">書籍名</span>
            <input type="text" class="form-control col-sm-10" id="name" name="name" th:value="*{name}" placeholder="書籍名">
            <span class="col-sm-2"></span>
            <span class="col-sm-10 text-danger small" th:if="${#fields.hasErrors('name')}" th:errors="*{name}"></span>
          </div>
          
          <div class="form-group form-inline input-group-sm">
            <span class="col-md-2 text-md-right">画像</span>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputFile">
                <span class="col-sm-2"></span>
                <label class="custom-file-label" for="inputFile" data-browse="参照">ファイルを選択</label>
                <span class="col-sm-10 text-danger small" th:if="${#fields.hasErrors('inputFile')}" th:errors="*{inputFile}"></span>
              </div>
              <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary input-group-text" id="inputFileReset">取消</button>
              </div>
            </div>
          </div>

          
          <div class="form-group form-inline input-group-sm">
            <span class="col-md-2 text-md-right">ISBNコード</span>
            <input type="text" class="form-control col-sm-10" id="isbn" name="isbn" th:value="*{isbn}" placeholder="ISBNコード">
            <span class="col-sm-2"></span>
            <span class="col-sm-10 text-danger small" th:if="${#fields.hasErrors('isbn')}" th:errors="*{isbn}"></span>
          </div>
          <div class="form-group form-inline input-group-sm">
            <span class="col-md-2 text-md-right">内容</span>
            <textarea class="form-control col-sm-10" cols="22" rows="5" id="description" name="description"
              th:text="*{description}" placeholder="内容"></textarea>
          </div>
          <div class="form-group form-inline input-group-sm">
            <span class="col-md-2 text-md-right">出版社</span>
            <input type="text" class="form-control col-sm-10" id="publisher" name="publisher" th:value="*{publisher}" placeholder="出版社">
            <span class="col-sm-2"></span>
            <span class="col-sm-10 text-danger small" th:if="${#fields.hasErrors('publisher')}" th:errors="*{publisher}"></span>
          </div>
          <div class="form-group form-inline input-group-sm">
            <span class="col-md-2 text-md-right">価格</span>
            <input type="number" class="form-control col-sm-10" id="price" name="price" th:value="*{price}" placeholder="価格">
            <span class="col-sm-2"></span>
            <span class="col-sm-10 text-danger small" th:if="${#fields.hasErrors('price')}" th:errors="*{price}"></span>
          </div>
          <div class="form-group form-inline input-group-sm">
            <span class="col-md-2 text-md-right">出版年月日</span>
            <input type="date" class="form-control col-sm-10" id="publication_date" name="publication_date" th:value="${bookForm.getPublicationDateYmd()}" placeholder="出版年月日">
            <span class="col-sm-2"></span>
            <span class="col-sm-10 text-danger small" th:if="${#fields.hasErrors('publication_date')}" th:errors="*{publication_date}"></span>
          </div>
          <div class="text-center">
            <button class="btn btn-sm btn-outline-secondary" type="submit">登録</button>
          </div>
          <input type="hidden" name="id" th:value="*{id}" >
          <span class="col-sm-10 text-danger small" th:if="${#fields.hasErrors('id')}" th:errors="*{id}"></span>
          <input type="hidden" name="version" th:value="*{version}" >
        </form>
      </div>
    </div>
  </div>
@endsection