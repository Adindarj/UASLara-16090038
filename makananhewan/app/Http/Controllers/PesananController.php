<?php

namespace App\Http\Controllers;

use App\Pesanan;
use App\Produk;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::where('status', '1')->get();
        $produk = Produk::where('status','1')->get();
        return view('pages.data_pesanan.index', compact('pesanan','produk'));
    }

    public function konfirmasi($id){
        $pesanan = Pesanan::find($id);
        $pesanan->update(['konfirmasi' => '1']);
        return redirect()->route('pesanan');
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->update(['status' => '0']);
        return redirect()->route('pesanan');
    }
}
