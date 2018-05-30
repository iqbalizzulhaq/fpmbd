<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Trolly;

class MainController extends Controller
{
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

      public function show(){  
        $trollies = Trolly::all();
        return view('trolly',compact('trollies'));
    }

    public function edit($id){
      $trolly = Trolly::find($id);
    	return view('edit')->with('trolly', $trolly);
    }

    public function update(Request $request){
      $trolly = Trolly::find($request->id);
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

      if ($trolly->save())
        return redirect()->route('trolly')->with(['success'=>'edit sukses']);
    }

    public function delete($id){
      $trolly=Trolly::find($id)->delete();
      return redirect()->route('show.trolly')->with(['success'=>'delete sukses']);
    }

}
