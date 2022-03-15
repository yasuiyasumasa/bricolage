<nav class="navbar navbar-expand-lg navbar-light pl-5 pr-5 pt-2 pb-2">
  <a class="navbar-brand text-white" href="/">bricolage</a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="Navber">
    <ul class="navbar-nav">
      <li class="nav-item ml-2">
        <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ホーム</a>
      </li>
      <li class="nav-item ml-2">
        <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">使い方</a>
      </li>
      <li class="nav-item ml-2">
        <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">本棚</a>
      </li>
      <li class="nav-item ml-2">
        <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">書籍の登録</a>
      </li>
      <li class="nav-item ml-2">
        <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ハイライト</a>
      </li>
      <li class="nav-item ml-2">
        <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">キーワード</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto mr-5">
      <li class="nav-item dropdown">
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              ログアウト
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </li>
      <li class="nav-item ml-2">
        <a class="nav-link text-white" id="register" href="/register">ユーザ登録</a>
      </li>
      <li class="nav-item ml-2">
        <a class="nav-link text-white" href="#">ログイン</a>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>