<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $spps = DB::table('spps')->get();
        return view('Spp.index', compact("spps"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tahun' => 'required|min:4',
            'nominal' => 'required',
        ]);

        // proses simpan data
         $query = DB::table('spps')->insert([
            'tahun' => $request['tahun'],
            'nominal' => $request['nominal'],
        ]);

        // jika data disimpan maka di redirect ke halaman index
        return redirect()->route('Spp.index')->with(['success' => 'Data Telah Ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $spp = DB::table("spps")->where("id_spp", $id)->first();
        return view("spp.edit", compact("spp"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'tahun'=> "required|min:4",
            'nominal'=> 'required'
        ]);

        $query = DB::table("spps")
        ->where('id_spp', $id)
        ->update([
            'tahun' =>$request['tahun'],
            'nominal' =>$request['nominal'],
        ]);

        return redirect()->route('Spp.index')->with(['succes'=>'Data Telah Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('spps')->where('id_spp', $id)->delete();
        return redirect()->route('Spp.index')->with(['succes'=>'Data Telah Dihapus']);
    }
}
