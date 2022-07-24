<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use App\Models\Antrian;

class AntrianController extends Controller
{
    //
    public function buatAntrian(Request $request)
    {

        // dd($request->inputNama);
        $kode = "N";
        $no = "01";

        Pengunjung::create(['nama' => $request->inputNama, 'alamat' => $request->alamat, 'no_hp' => $request->inputNoHp, 'jenis_mobil' => $request->inputMobil, 'no_polisi' => $request->inputNoPolisi, 'harga' => $request->harga]);

        Antrian::create(['user_id' => $request->id, 'kode_antrian' => $kode, 'status' => $request->status, 'prediksi_waktu' => $request->prediksi_waktu, 'layanan' => $request->layanan, 'no_antri' => $no, 'jenis_antrian' => $request->jenisAntrian, 'ukuran' => $request->ukuran]);

        // return view("pengunjung-ambilAntrian");
        return redirect('/');
        // return redirect('\pengunjung-liveAntrian');


    }
}
