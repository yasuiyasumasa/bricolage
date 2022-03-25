@extends('layouts.user')
@section('title', 'キーワード')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
#ex_chart {max-width:640px;max-height:480px;}
</style>

<canvas id="ex_chart"></canvas>

<script>
var ctx = document.getElementById('ex_chart');

var data = {
    labels: ["平成26年", "平成27年", "平成28年", "平成29年", "平成30年"],
    datasets: [{
        label: '得点',
        data: [880, 740, 900, 520, 930],
        backgroundColor: 'rgba(255, 100, 100, 1)'
    }]
};

var options = {
    scales: {
        yAxes: [{
            ticks: {
                min: 300
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
@endsection