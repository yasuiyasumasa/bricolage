<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>bricolage</title>
  <!-- cssをインポート -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
  {{-- @includeは別のビューファイルをインポートするときの使用 --}}
  {{-- 今回では、parts/header.blade.phpをインポートしているという意味 --}}
  @include('parts.header')

  {{-- @yieldは拡張したい部分に使用し継承先のビューでそれぞれ定義する --}}
  @yield('content')
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>