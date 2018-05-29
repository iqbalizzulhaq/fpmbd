<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('home');
    }

    public function store(Request $request){
        $trolly = new Trolly;
        $trolly->nama_barang = $request->nama_barang;
        $trolly->jumlah_barang = $request->jumlah_barang;
        $trolly->tipe_bahan = $request->tipe_bahan;
        $trolly->desain = $request->desain;
        $trolly->fname = $request->fname;
        $trolly->lname = $request->lname;
        $trolly->phone = $request->phone;
        $trolly->address = $request->address;
        $trolly->bank = $request->bank;
        $trolly->no_rekening = $request->no_rekening;
        $trolly->nama = $request->nama;
        $trolly->total = $request->total;
  
        if ($trolly->save()){
          return view('trolly')->with('success', 'item berhasil ditambahkan');
        }
  
    }
    public function transaksi(){
        return view('mbd.transaksi');
    }
    public function pemesan(){
        return view('mbd.pemesan');
    }
    public function mbd(){
        return view('mbd.mbd');
    }
}
