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
            .sensor-status-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            /* Ini akan memungkinkan kartu untuk bungkus jika tidak cukup ruang */
            margin-bottom: 20px;
        }

        .sensor-status-card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: calc(50% - 10px);
            /* Mengatur lebar untuk menjadi setengah dari container dikurangi margin */
            border-radius: 5px;
            padding: 16px;
            background-color: #fff;
            text-align: left;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            min-height: 100px;
            /* Menetapkan ketinggian minimal */
            display: flex;
            /* Menambahkan flex untuk menyelaraskan judul dan isi */
            flex-direction: column;
            /* Menyusun judul dan isi secara vertikal */
        }

        .sensor-status-card h4 {
            margin-bottom: auto;
            /* Mendorong isi ke bawah jika tidak ada daftar item */
            text-align: center;
            /* Menyelaraskan teks ke tengah */
        }

        .sensor-status-list {
            display: grid;
            flex-direction: column;
            justify-content: start;
            grid-template-columns: repeat(2, 1fr);
            /* Create two columns */
            grid-gap: 8px;
            /* Space between items */
            list-style-type: none;
            padding-left: 0;
            margin-top: 0;
        }

        .sensor-status-list li {
            padding: 8px 16px;
            background-color: #f2f2f2;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
            text-align: center;
        }

        .sensor-status-list li.dead {
            background-color: #ffcdd2;
        }

        .sensor-status-list li.alive {
            background-color: #c8e6c9;
        }
    </style>
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
