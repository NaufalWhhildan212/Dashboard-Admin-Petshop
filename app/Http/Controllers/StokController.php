<?php

namespace App\Http\Controllers;
use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtStok = Stok::all();
        return view('Stok',compact('dtStok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Input-Stok');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Stok::create([
            'id' =>$request->id,
            'Nama' =>$request->Nama,
            'Kategori' =>$request->Kategori,
            'Harga' =>$request->Harga,
            'Supplier' =>$request->Supplier,
            'Stok' =>$request->Stok,
        ]);
        return redirect ('Stok')->with('success', 'Data  Berhasil Ditambahkan!');
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
        $Sto = Stok::findorfail($id);
        return view('Update-Stok',compact('Sto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Sto = Stok::findorfail($id);
        $Sto ->update($request->all());
        return redirect ('Stok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Sto = Stok::findorfail($id);
        $Sto->delete();
        return back();
    }
    public function downloadpdf()
    {
    $dtCetakStok = Stok::all();
        $pdf = 'PDF'::loadview('Cetak_Stok',compact('dtCetakStok'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Stok.pdf');
    }
}
