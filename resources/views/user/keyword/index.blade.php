@extends('layouts.user')
@section('title', 'ランキング')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>頻出キーワードTOP10</h2>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <style>
                #ex_chart {max-width:640px;max-height:480px;}
                </style>

                <canvas id="ex_chart"></canvas>

                <script>
                var ctx = document.getElementById('ex_chart');

                var data = {
                    labels: ["ああああ", "いいいい", "うううう", "ええええ", "おおおお", "かかかか", "きききき", "くくくく", "けけけけ", "ここここ"],
                    datasets: [{
                        label: '使用頻度1',
                        data: [121, 103, 60, 52, 31, 29, 26, 27, 9, 7],
                        backgroundColor: 'rgba(255, 100, 100, 1)'
                    }]
                };

                var options = {
                    indexAxis: 'y',
                    scales: {
                        xAxes: [{
                            ticks: {
                                min: 0
                            }
                        }]
                    }
                };

                var ex_chart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });
                </script>

                
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>頻出単語TOP10</h2>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <style>
                #ex_chart {max-width:640px;max-height:480px;}
                </style>

                <canvas id="ex_chart"></canvas>

                <script>
                var ctx = document.getElementById('ex_chart');

                var data = {
                    labels: ["ああああ", "いいいい", "うううう", "ええええ", "おおおお", "かかかか", "きききき", "くくくく", "けけけけ", "ここここ"],
                    datasets: [{
                        label: '使用頻度2',
                        data: [121, 103, 60, 52, 31, 29, 26, 27, 9, 7],
                        backgroundColor: 'rgba(255, 100, 100, 1)'
                    }]
                };

                var options = {
                    indexAxis: 'y',
                    scales: {
                        xAxes: [{
                            ticks: {
                                min: 0
                            }
                        }]
                    }
                };

                var ex_chart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });
                </script>

                
            </div>
        </div>
    </div>
@endsection