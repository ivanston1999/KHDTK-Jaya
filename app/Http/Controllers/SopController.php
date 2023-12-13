<?php

// app/Http/Controllers/SopController.php

namespace App\Http\Controllers;

use App\Models\Sop;
use Illuminate\Http\Request;

class SopController extends Controller
{
    public function updateStatus(Request $request, $id)
{
    $sop = Sop::findOrFail($id);
    $sop->is_executed = $request->has('is_executed');
    $sop->save();

    // Redirect ke method 'showSops' dengan pesan sukses
    return redirect()->action([SopController::class, 'showSops'])
                     ->with('success', 'Status SOP diperbarui.');
}


    public function showSops()
{
    $sops = Sop::all(); // Ambil semua data SOP dari database
    return view('sop', compact('sops')); // Kirim data ke view
}

}

