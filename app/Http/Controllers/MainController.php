<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Trolly;
use Illuminate\Support\Facades\DB;

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
          return redirect('trolly')->with('success', 'item berhasil ditambahkan');
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

   
    public function tanggal(Request $request){ 
      $query = DB::selectOne("SELECT DISTINCT tampil_pendapatan('$request->tanggal') AS total from transaksi")->total;


      return view('iqbal',compact('query'));
    }
    public function trigger_iqbal(Request $request){ 
      $query2 = DB::select("SELECT * FROM pemesan2");
      return view('iqbal_trigger',compact('query2'));
    }

    public function hasil_proc(Request $request){ 
      $query4 = DB::select("SELECT * FROM transaksi");
      return view('iqbal_procedure',compact('query4'));
    }


    

    // --------------- muzayyin -------------------
    public function jml_pemesan(Request $request){ 
      $query = DB::selectOne("SELECT DISTINCT hitung_pemesan('$request->jml_pemesan') AS jml_pemesan FROM transaksi")->jml_pemesan;
      return view('zayn_function',compact('query'));
    }

    public function trigger_zayn(Request $request){ 
      $query2 = DB::select("SELECT * FROM pegawai2");
      return view('zayn_trigger',compact('query2'));
    }

    public function status(Request $request){ 
      $query3 = DB::selectOne("CALL update_status('$request->status')");
      return view('zayn_procedure',compact('query3'));
    }
    public function zayn_procedure(Request $request){ 
      $query4 = DB::select("SELECT * FROM PENGIRIMAN");
      return view('hasil_zayn_procedure',compact('query4'));
    }
    public function cursor(Request $request){ 
      $query5 = DB::select("SELECT p.pem_nama,b.b_jenis
                            FROM pemesan p 
                            JOIN transaksi t ON p.pem_id=t.pem_id  
                            JOIN detil_nota dn ON dn.t_id=t.t_id
                            JOIN barang b ON b.b_id=dn.b_id
                            WHERE 2018 - EXTRACT(YEAR FROM pem_tgl_lahir)>25;");
      return view('zayn_cursor',compact('query5'));
    }
    
}

