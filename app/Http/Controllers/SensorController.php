<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
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

        $i = 1;
        while (true) {
            $tableName = "sensor{$i}";
            // Check if the table exists
            $tableExists = Schema::hasTable($tableName);

            if (!$tableExists) {
                // If the table does not exist, break out of the loop
                break;
            }
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

            $i++;
        }

        $sensorStatus = [];
        $currentTime = now();

        $i = 1;
        while (true) {
            // Mengambil data terakhir dari setiap sensor.
            $tableName = "sensor{$i}";
            // Check if the table exists
            $tableExists = Schema::hasTable($tableName);

            if (!$tableExists) {
                // If the table does not exist, break out of the loop
                break;
            }
            $lastDataPoint = DB::table($tableName)
                ->latest('Tanggal')
                ->first();

            if ($lastDataPoint) {
                $lastDataTime = Carbon::parse($lastDataPoint->Tanggal);
                // Menentukan status sensor berdasarkan waktu terakhir data diterima.
                $sensorStatus[$tableName] = $lastDataTime->diffInHours($currentTime, false) <= 3 ? 'Aktif' : 'Tidak Aktif';
            } else {
                // Jika tidak ada data, tandai sensor sebagai tidak aktif.
                $sensorStatus[$tableName] = 'Tidak Aktif';
            }

            $i++;
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

    public function index()
    {
        // Define your sensor types here
        $sensorTypes = ['Nitrogen', 'Kalium', 'Phosphorus', 'Suhu', 'Kelembaban', 'pH', 'Konduktivitas Listrik'];
        $parameters = [];

        foreach ($sensorTypes as $sensorType) {
            $parameters[$sensorType] = $this->getSensorData($sensorType);
        }

        // Get sensor status here (you'll need to define this method)
        $sensorStatus = $this->getSensorStatus();

        return view('sensor', [
            'parameters' => $parameters,
            'sensorStatus' => $sensorStatus,
        ]);
    }

    // Method to fetch sensor data for each type
    private function getSensorData($sensorType)
    {
        // Replace 'your_sensor_table' with your actual table name
        $sensorData = DB::table('your_sensor_table')
            ->select('Tanggal', $sensorType)
            ->orderBy('Tanggal', 'asc')
            ->get()
            ->map(function ($data) use ($sensorType) {
                return [
                    'x' => Carbon::parse($data->Tanggal)->getTimestamp() * 1000, // Convert to milliseconds
                    'y' => $data->$sensorType,
                ];
            })
            ->all();

        return $sensorData;
    }
    public function addNewSensorTable(Request $request)
    {
        $request->validate([
            'sensor_name' => 'required|alpha_dash',
        ]);

        $sensorName = $request->input('sensor_name');
        $tableName = 'sensor' . strtolower($sensorName);

        if (!Schema::hasTable($tableName)) {
            Schema::create($tableName, function (Blueprint $table) {
                $table->id();
                $table->dateTime('Tanggal');
                // Definisikan kolom lain sesuai kebutuhan
                $table->float('Nitrogen')->nullable();
                $table->float('Kalium')->nullable();
                $table->float('Phosphorus')->nullable();
                $table->float('Suhu')->nullable();
                $table->float('Kelembaban')->nullable();
                $table->float('pH')->nullable();
                $table->float('Konduktivitas Listrik')->nullable();
                $table->float('Sensor_ID')->nullable();
            });

            return redirect()
                ->back()
                ->with('success', "Tabel $tableName berhasil dibuat.");
        } else {
            return redirect()
                ->back()
                ->with('error', "Tabel $tableName sudah ada.");
        }
    }
}
