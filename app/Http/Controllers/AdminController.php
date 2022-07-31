<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\kategori;

class AdminController extends Controller
{
    public function produkIndex(){
        $produk = produk::paginate(10);

        return view('produk.Index', compact('produk'));
    }

    public function tampiltambahproduk(kategori $kategori){
        $kategori = kategori::all();
        return view('produk.tambah', compact('kategori'));
    }

    public function tambahproduk(Request $request){
        $request -> validate([
            'kategori_id'=>'required',
            'name'=>'required',
            'foto'=>'required|file|image',
            'harga'=>'required|numeric',
        ]);
        produk::create([
            'kategori_id'=>$request->kategori_id,
            'name'=>$request->name,
            'foto'=>$request->foto->store('images'),
            'harga'=>$request->harga,
        ]);

        return redirect()->route('admin.produk');
    }

    public function editproduk(produk $produk){
        $kategori = kategori::all();

        return view('produk.edit', compact('produk','kategori'));
    }

    public function updateproduk(Request $request, produk $produk){
        $data = $request->validate([
            'kategori_id'=>'required',
            'name'=> 'required',
            'foto'=> 'file|image',
            'harga'=> 'required|numeric',
        ]);

        if ($request->hasFile('foto')){
            $data['foto'] = $request->foto->store('images');
        }else{
            unset($data['foto']);
        }
        $produk->update($data);

        return redirect()->route('admin.produk');
    }

    public function deleteProduk(produk $produk){
        $produk -> delete();

        return redirect()->route('admin.produk');
    }

}
