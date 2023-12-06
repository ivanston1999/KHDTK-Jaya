<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Upload;
use Illuminate\Http\Response;
use App\Models\Drone;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    public function home()
    {
        // Check if the logged-in user has the 'admin' role
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin'); // Replace with your admin dashboard route name
        }

        // Ambil data gambar yang diurutkan berdasarkan created_at
        // $drones = Drone::orderBy('created_at', 'desc')->get();

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

        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin');
        }

        return view('beranda', [
            'sensorStatus' => $sensorStatus,
            // 'drones' => $drones,
        ]);
    }
}
// public function index(): Response
// {
//     return response()->view('upload.index', [
//         'uploads' => Upload::orderBy('updated_at', 'desc')->get(),
//     ]);
// }

// public function index(): Response
// {
//     return response()->view('drone.index', [
//         'drones' => Drone::orderBy('updated_at', 'desc')->get(),
//     ]);
// }
