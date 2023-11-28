@extends('layouts.user_type.auth')

@section('title', 'Taripar Hub')

@section('content')
<<<<<<< HEAD
<<<<<<< HEAD
    <html>
    <style>
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
    </body>

    </html>

@endsection
=======

@endsection
=======

@endsection
>>>>>>> d432caf548e0981b823d91748c9395dbe3dcced3
@push('beranda')
  <script>
      
  </script>
@endpush

>>>>>>> d432caf548e0981b823d91748c9395dbe3dcced3
