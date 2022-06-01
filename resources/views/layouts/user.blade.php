<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- Laravel標準で用意されているCSSを読み込みます --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- この章の後半で作成するCSSを読み込みます --}}
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      {{-- 画面上部に表示するナビゲーションバーです。 --}}
      <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="http://localhost/bricolage/public/image/logo_new_w.png" alt="ブランドロゴ" width="30" height="24" class="d-inline-block align-text-top">
            bricolage
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="/bricolage/public">⌂</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/bricolage/public/user/book">本棚</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/bricolage/public/user/book/create">書籍の登録</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/bricolage/public/user/highlight">ハイライト</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/bricolage/public/user/keyword">キーワード</a>
                  </li>
              </ul>
          </div>

          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">

            {{-- 以下を追記 --}}
            <!-- Authentication Links -->
            {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
            @guest
              <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
              {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest
            {{-- 以上までを追記 --}}

          </ul>
        </div>
      </nav>
      {{-- ここまでナビゲーションバー --}}

      <main class="py-4">
        {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
        @yield('content')
      </main>
    </div>
  </body>

<!--
  <footer id="footer01" class="footer outer-block">
    <div class="container navbar-expand-md navbar-dark bg-dark shadow">

      <ul class="nav">
        <li><a href="https://b-risk.jp/works/">WORKS</a></li>
        <li><a href="https://b-risk.jp/blog/">BLOG</a></li>
        <li><a href="https://b-risk.jp/recruit/">RECRUIT</a></li>
        <li><a href="https://b-risk.jp/company/">COMPANY</a></li>
        <li><a href="https://b-risk.jp/contact/">CONTACT</a></li>
      </ul>
      <p class="copyright">
        COPYRIGHT © BRISK Inc. All rights Reserved.
      </p>
    </div> 
  </footer>
  -->


  <footer class="navbar navbar-expand-md navbar-dark bg-dark shadow">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link">| </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">© 2021 Yasui</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">| </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.google.com">利用規約</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">| </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.google.com">プライバシーポリシー</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">| </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.google.com">お問い合わせ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">| </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

</html>