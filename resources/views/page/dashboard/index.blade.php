@extends('adminlte::page')

@section('title', 'Calculator App | Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Grafik Kunjungan User</h1>
@stop

@section('content')
<canvas id="myChart" style="width: 100%; padding: 25px;"></canvas>
@stop

@section('adminlte_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script>
    const value = '{{ $data }}'

    new Chart("myChart", {
        type: "line",
        data: {
            labels: value?.map(row => row.date),
            datasets: [
                {
                    label: "Waktu Kunjungan User Perhari (Menit)",
                    data: value?.map(row => row.accessTotalInMinute)
                }
                
            ]
        },
        options: {}
    })

</script>
@stop