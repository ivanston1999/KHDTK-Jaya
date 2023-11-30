<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home()
    {
        // Check if the logged-in user has the 'admin' role
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin'); // Replace with your admin dashboard route name
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
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin');
        }
        return view('beranda', [
            'sensorStatus' => $sensorStatus,
        ]);
    }
}

