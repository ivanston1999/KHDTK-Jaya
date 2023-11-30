<?php
namespace App\Http\Controllers;
use App\Models\Cabai;
use App\Models\Kalkulators;
use Illuminate\Http\Request;


class CabaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Cabai = cabai::all();
        $Kalkulators = Kalkulators::all();
       return view('kalkulator/cabaiSop', ['cabai' => $Cabai, 'kalkulators' => $Kalkulators]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kalkulator/cabaiCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'aktivitas' => 'required',
            'item' => 'required',
        ]);

        Cabai::create($validate);
        return redirect()->route('cabai.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cabai = cabai::findOrFail($id);
        return view('kalkulator/cabaiSop',['cabais' => collect([$cabai])]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
