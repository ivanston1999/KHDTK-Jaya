<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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

        return view('sensor', [
            'sensorNitrogenDataArrays' => $sensorNitrogenDataArrays,
            'sensorPotassiumDataArrays' => $sensorPotassiumDataArrays,
            'sensorPhosphorusDataArrays' => $sensorPhosphorusDataArrays,
            'sensorTemperatureDataArrays' => $sensorTemperatureDataArrays,
            'sensorHumidityDataArrays' => $sensorHumidityDataArrays,
            'sensorPHDataArrays' => $sensorPHDataArrays,
            'sensorElectricalConductivityDataArrays' => $sensorElectricalConductivityDataArrays,
        ]);
    }
}
