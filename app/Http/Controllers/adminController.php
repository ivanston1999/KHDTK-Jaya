<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Schema;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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

        return view('beranda', [
            'sensorStatus' => $sensorStatus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addUserForm()
    {
        return view('admin/add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users = User::all();
        return view('admin/user-management', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editUser(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin/edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/user-management');
    }
}
