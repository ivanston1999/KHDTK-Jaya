@extends('layouts.user_type.auth')

@section('title', 'Sensor')

@section('content')
    <head>
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
                flex-basis: 49%;
                /* Adjust this to put two charts in one row */
                margin-bottom: 20px;
            }
    </head>

    <body>

        <div class="sensor-status-container">
            <div class="sensor-status-card">
                <h4>Sensor Aktif</h4>
                <ul class="sensor-status-list">
                    @foreach ($sensorStatus as $sensorName => $status)
                        @if ($status === 'Aktif')
                            <li class="alive">{{ $sensorName }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="sensor-status-card">
                <h4>Sensor Tidak Aktif</h4>
                <ul class="sensor-status-list">
                    @foreach ($sensorStatus as $sensorName => $status)
                        @if ($status === 'Tidak Aktif')
                            <li class="dead">{{ $sensorName }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>


        @php
            $parameters = [
                'Nitrogen' => 'sensorNitrogenDataArrays',
                'Kalium' => 'sensorPotassiumDataArrays',
                'Phosphorus' => 'sensorPhosphorusDataArrays',
                'Suhu' => 'sensorTemperatureDataArrays',
                'Kelembaban' => 'sensorHumidityDataArrays',
                'pH' => 'sensorPHDataArrays',
                'Konduktivitas Listrik' => 'sensorElectricalConductivityDataArrays',
            ];
        @endphp

        <div class="chart-row">
            @foreach ($parameters as $paramName => $dataArrayName)
                <div id="{{ $paramName }}_chart" class="chart"></div>
                <!-- Check if we need to close the current row and start a new one -->
                @if ($loop->iteration % 2 == 0 && !$loop->last)
        </div>
        <div class="chart-row">
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
                                // Check if the value is below 0 and set it to 0 if it is
                                let value = data[parameter] < 0 ? 0 : data[parameter];
                                return [Date.parse(data.Tanggal), value];
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
                                },
                                rotation: -45, // Rotasi label
                                align: 'right'
                            },
                            tickInterval: 3 * 24 * 3600 * 1000, // 3 days in milliseconds
                            // Anda mungkin ingin menghilangkan waktu dalam format jika hanya menampilkan tanggal
                        },
                        yAxis: {
                            title: {
                                text: 'Value'
                            },
                            min: 0 // Ensure the yAxis doesn't go below 0
                        },
                        tooltip: {
                            formatter: function() {
                                return '<b>' + this.series.name + '</b><br/>' +
                                    Highcharts.dateFormat('%e. %b, %H:%M', this.x) + '<br/>' +
                                    'Value: ' + Highcharts.numberFormat(this.y, 2);
                            }
                        },
                        exporting: {
                            enabled: true // Enable the exporting module
                        },
                        plotOptions: {
                            series: {
                                marker: {
                                    enabled: true
                                }
                            }
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
@endsection
