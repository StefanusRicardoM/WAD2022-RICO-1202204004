<?php

namespace App\Http\Controllers;

use App\Models\showroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NamaMobil' => 'required',
            'NamaPemilik' => 'required',
            'Merk' => 'required',
            'tanggal' => 'required',
            'Deskripsi' => 'required',
            'statusp' => 'required',
            'inputfoto' => 'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('inputfoto');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $filename);

        showroom::create([
            'user_id' => Auth::user()->id,
            'name' => $request->NamaMobil,
            'owner' => $request->NamaPemilik,
            'brand' => $request->Merk,
            'purchase_date' => $request->tanggal,
            'description' => $request->Deskripsi,
            'image' => $filename,
            'status' => $request->statusp,
        ]);

        return redirect('/myitem')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NamaMobil' => 'required',
            'NamaPemilik' => 'required',
            'Merk' => 'required',
            'tanggal' => 'required',
            'Deskripsi' => 'required',
            'statusp' => 'required',
            'inputfoto' => 'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('inputfoto');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $filename);

        $showroom = showroom::find($id);
        unlink("storage/$showroom->image");

        $showroom->update([
            'user_id' => Auth::user()->id,
            'name' => $request->NamaMobil,
            'owner' => $request->NamaPemilik,
            'brand' => $request->Merk,
            'purchase_date' => $request->tanggal,
            'description' => $request->Deskripsi,
            'image' => $filename,
            'status' => $request->statusp,
        ]);

        return redirect('/myitem')->with('success', 'berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $showroom = showroom::find($id);
        unlink("storage/$showroom->image");
        $showroom->delete();
        return redirect('/myitem')->with('success', 'berhasil dihapus');
    }
}
