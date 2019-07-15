<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Pesanan;

class FrontEndController extends Controller
{
    public function index(){
    	$produk = Produk::where('status', '1')->paginate(3);
    	return view('front-and.pages.index', compact('produk'));
    }

    public function detail($id){
    	$produk = Produk::find($id);
    	return view('front-and.pages.detail', compact('produk'));
    }

    public function produk(){
    	$produk = Produk::where('status', '1')->get();
    	return view('front-and.pages.produk', compact('produk'));
    }

    public function pesan($id){
        $produk = Produk::find($id);
        return view('front-and.pages.form', compact('produk'));
    }

    public function pesansubmit(Request $request){
        $pesanan = new pesanan();
        $pesanan->nama = $request->nama;
        $pesanan->email = $request->email;
        $pesanan->id_produk = $request->id_produk;
        $pesanan->alamat = $request->alamat;
        $pesanan->no_hp = $request->nohp;
        $pesanan->konfirmasi = '0';
        $pesanan->save();

        return redirect()->route('userindex');
    }
}
