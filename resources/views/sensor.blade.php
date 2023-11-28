@extends('layouts.user_type.auth')

@section('content')

<html>
<head>
    <meta charset="utf-8">
    <title>Sensor Data Charts</title>
    <!-- Highcharts Library and Exporting Module -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <style>
        .chart-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .chart {
            min-width: 310px;
            height: 400px;
            margin: 0 auto;
            flex-basis: 49%; /* Adjust this to put two charts in one row */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

@php
$parameters = [
    'Nitrogen' => 'sensorNitrogenDataArrays',
    'Kalium' => 'sensorPotassiumDataArrays',
    'Phosphorus' => 'sensorPhosphorusDataArrays',
    'Suhu' => 'sensorTemperatureDataArrays',
    'Kelembaban' => 'sensorHumidityDataArrays',
    'pH' => 'sensorPHDataArrays',
    'Konduktivitas Listrik' => 'sensorElectricalConductivityDataArrays' 
];
@endphp

<div class="chart-row">
    @foreach ($parameters as $paramName => $dataArrayName)
        <div id="{{ $paramName }}_chart" class="chart"></div>
        <!-- Check if we need to close the current row and start a new one -->
        @if ($loop->iteration % 2 == 0 && !$loop->last)
            </div><div class="chart-row">
        @endif
    @endforeach
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Function to prepare data for Highcharts
    function prepareSeriesData(sensorDataArrays, parameter) {
        return Object.keys(sensorDataArrays).map((key) => {
            return {
                name: key.replace('sensor', 'Sensor '), // Adjust the sensor name here if needed
                data: sensorDataArrays[key].map((data) => {
                    return [Date.parse(data.Tanggal), data[parameter]];
                })
            };
        });
    }

    // Function to initialize Highcharts
    function initializeChart(containerId, title, sensorDataArrays, parameter) {
    Highcharts.chart(containerId, {
        chart: {
            type: 'line'
        },
        title: {
            text: title
        },
        xAxis: {
            type: 'datetime',
            title: {
                text: 'Date and Time'
            },
            labels: {
                formatter: function() {
                    return Highcharts.dateFormat('%e %b %H:%M', this.value);
                }
            }
        },
        yAxis: {
            title: {
                text: 'Value'
            }
        },
        tooltip: {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                    Highcharts.dateFormat('Tanggal %e %b, Jam %H:%M', this.x) + '<br/>' +
                    'Value: ' + Highcharts.numberFormat(this.y, 2);
            }
        },
        exporting: {
            enabled: true // Enable the exporting module
        },
        series: prepareSeriesData(sensorDataArrays, parameter)
    });
}


    // Loop over each parameter and initialize a chart for each
    @foreach ($parameters as $paramName => $dataArrayName)
        initializeChart(
            "{{ $paramName }}_chart",
            "{{ $paramName }}",
            @json(${$dataArrayName}),
            '{{ $paramName }}'
        );
    @endforeach
});
</script>

</body>
</html>


@endsection