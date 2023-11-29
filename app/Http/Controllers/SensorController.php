<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SensorController extends Controller
{
    public function LineChart()
    {
        $sensorNitrogenDataArrays = [];
        $sensorPotassiumDataArrays = [];
        $sensorPhosphorusDataArrays = [];
        $sensorTemperatureDataArrays = [];
        $sensorHumidityDataArrays = [];
        $sensorPHDataArrays = [];
        $sensorElectricalConductivityDataArrays = [];

        for ($i = 1; $i <= 9; $i++) {
            $tableName = 'sensor' . $i;
            $sensorNitrogenData = DB::table($tableName)
                ->select('Tanggal', 'Nitrogen')
                ->get();
            $sensorPotassiumData = DB::table($tableName)
                ->select('Tanggal', 'Kalium')
                ->get();
            $sensorPhosphorusData = DB::table($tableName)
                ->select('Tanggal', 'Phosphorus')
                ->get();
            $sensorTemperatureData = DB::table($tableName)
                ->select('Tanggal', 'Suhu')
                ->get();
            $sensorHumidityData = DB::table($tableName)
                ->select('Tanggal', 'Kelembaban')
                ->get();
            $sensorPHData = DB::table($tableName)
                ->select('Tanggal', 'pH')
                ->get();
            $sensorElectricalConductivityData = DB::table($tableName)
                ->select('Tanggal', 'Konduktivitas Listrik')
                ->get();

            $sensorNitrogenDataArrays[$tableName] = $sensorNitrogenData;
            $sensorPotassiumDataArrays[$tableName] = $sensorPotassiumData;
            $sensorPhosphorusDataArrays[$tableName] = $sensorPhosphorusData;
            $sensorTemperatureDataArrays[$tableName] = $sensorTemperatureData;
            $sensorHumidityDataArrays[$tableName] = $sensorHumidityData;
            $sensorPHDataArrays[$tableName] = $sensorPHData;
            $sensorElectricalConductivityDataArrays[$tableName] = $sensorElectricalConductivityData;
        }

        $sensorStatus = [];
        $currentTime = now();

        for ($sensorId = 1; $sensorId <= 9; $sensorId++) {
            // Mengambil data terakhir dari setiap sensor.
            $tableName = 'sensor' . $sensorId;
            $lastDataPoint = DB::table($tableName)
                ->latest('Tanggal')
                ->first();

            if ($lastDataPoint) {
                $lastDataTime = Carbon::parse($lastDataPoint->Tanggal);
                // Menentukan status sensor berdasarkan waktu terakhir data diterima.
                $sensorStatus[$tableName] = $lastDataTime->diffInHours($currentTime, false) <= 4 ? 'Aktif' : 'Tidak Aktif';
            } else {
                // Jika tidak ada data, tandai sensor sebagai tidak aktif.
                $sensorStatus[$tableName] = 'Tidak Aktif';
            }
        }

        return view('sensor', [
            'sensorNitrogenDataArrays' => $sensorNitrogenDataArrays,
            'sensorPotassiumDataArrays' => $sensorPotassiumDataArrays,
            'sensorPhosphorusDataArrays' => $sensorPhosphorusDataArrays,
            'sensorTemperatureDataArrays' => $sensorTemperatureDataArrays,
            'sensorHumidityDataArrays' => $sensorHumidityDataArrays,
            'sensorPHDataArrays' => $sensorPHDataArrays,
            'sensorElectricalConductivityDataArrays' => $sensorElectricalConductivityDataArrays,
            'sensorStatus' => $sensorStatus,
        ]);
    }
}
