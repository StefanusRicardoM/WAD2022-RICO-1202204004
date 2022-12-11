<?php

namespace App\Http\Controllers;

use App\Models\showroom;
use Illuminate\Http\Request;

class Crudcontroller extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function itemdetail($id)
    {
        $itemdetail = showroom::where('id',$id)->get();
        return view('itemdetail', ['itemdetail' => $itemdetail]);
    }
    public function edititem($id)
    {
        $edititem = showroom::where('id',$id)->get();
        return view('edititem', ['edititem' => $edititem]);
    }
    public function delete($id)
    {
        $delete = showroom::where('id', $id)->delete();
        return redirect('/myitem');
    }
    public function add(Request $request)
    {
        $gambarmobil1 = $request->file('File');
        $gambarmobil1->move(public_path('asset'), $gambarmobil1->getClientOriginalName());
        $add = new showroom;
            $add->name =$request->namamobil;
            $add->owner =$request->pemilik;
            $add->brand =$request->merk;
            $add->purchase_date =$request->tanggalbeli;
            $add->description =$request->deskripsi;
            $add->image =$request->File->getClientOriginalName();
            $add->status =$request->status;
            $add->save();
            return redirect('/myitem')->with('berhasil','berhasil ditambahkan');
    }
    public function myitem()
    {
        $myitem = showroom::all();
        return view('myitem',['myitem' => $myitem]);
    }
}
