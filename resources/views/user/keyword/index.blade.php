@extends('layouts.user')
@section('title', 'ランキング')

@section('content')

<!-- Reference URL https://codelikes.com/javascript-chart-bar/ -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>bar chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1"></script>
    <script>
      window.onload = function () {
        let context = document.querySelector("#Keyword_frequent_ranking_TOP10").getContext('2d')
        new Chart(context, {
          type: 'bar',
          data: {
            labels: ['ああああ', 'いいいい', 'うううう', 'ええええ', 'おおおお', 'かかかか', 'きききき', 'くくくく', 'けけけけ', 'ここここ'],
            datasets: [{
              label: "キーワード頻出ランキング TOP10",
              data: [121, 103, 60, 52, 31, 29, 27, 25, 9, 7],
              backgroundColor: ['#e0e0e0']
            }],
            
          },
          options: {
            indexAxis: 'y',
            scales: {
              x: [{
              }],
              y: [{
              }],
            },
            responsive: false
          }
        })
      }
    </script>
  </head>
  <body>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <canvas id="Keyword_frequent_ranking_TOP10" width="500" height="500"></canvas>
        </div>
      </div>
    </div>
  </body>
</html>









@endsection