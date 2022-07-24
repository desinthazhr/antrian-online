@extends('layouts.main')

@section('title', 'Bengkel Sehat - Ambil Antrian')

@section('content')
  <!-- form daftar antrian -->
  <div class="container">
    <div class="daftar-antrian mt-5">
      <h4>DAFRTAR AMBIL ANTRIAN</h4>
      <form action ="/pengunjung" method ="post "id="form-antrian" class="form-antrian" onchange="hitungEstimasi()">
        @csrf
        <div class="textbox">
          <input id='inputNama' type="text" placeholder="Nama Anda" name="inputNama" value="" required> 
        </div>
        <div class="textbox">
          <input id='inputAlamat' type="text" placeholder="Alamat" name="inputAlamat" value="" required>
        </div>
        <div class="textbox">
          <input id='inputNoHp' type="text" placeholder="No. Hp" name="inputNoHp" value=""  required minlength="12" maxlength="12">
        </div>
        <div class="textbox">
          <input id='inputMobil' type="text" placeholder="Jenis Mobil" name="inputMobil" value=""  required>
        </div>
          <div class="textbox ukuran" style="padding-left:5px;">
          <select class='form-select ukuran' name="Ukuran" id="ukuran" >
            <option selected disabled>Ukuran Mobil</option>
            <option value="0">S</option>
            <option value="1">M</option>
            <option value="2">L</option>
            <option value="3">XL</option>
          </select>
        </div>
        <div class="textbox">
          <input id='inputNoPolisi' type="text" placeholder="No. Polisi" name="inputNopolisi" value=""  required>
        </div>
        <div class="textbox" style="padding-left:5px;">
          <select class='form-select' name="layanan" id="layanan" >
            <option selected disabled>Layanan</option>
            <option value="Cuci Reguler">Cuci Reguler</option>
            <option value="Cuci Non-Reguler (Pancung)">Cuci Non-Reguler (Pancung)</option>
            <option value="Cuci Deluxe">Cuci Deluxe</option>
            <option value="Cuci Express">Cuci Express</option>
          </select>
        </div>
        <div class="textbox" style="padding-left:5px ;">
          <select class='form-select' name="antrian" id="antrian" >
            <option selected disabled>Antrian</option>
            <option value="Normal">Antrian Normal</option>
            <option value="Express">Antrian Express</option>
          </select>
        </div>
        <div class="textbox">
          <input id='harga' type="text" placeholder="Estimasi Harga" name="harga" value=""  disabled>
        </div>

        <input class="btn-antrian" type="submit" value="AMBIL ANTRIAN">
      </form>
    </div>

    {{-- hasil tike nomor antrian --}}
    <div class="nomor-antrian mt-4">
      <div class="form-antrian">
        <h4>PT.BENGKEL </h4> <br>
        <h4>AUTO SERVICE SEHAT</h4>
        <p>Ujong Drien,Meureubo. Kabupaten Aceh Barat</p>
        <hr><br>
        <h3>Antrian ke - </h3>
        <span id="noAntrian">N-07</span>
        <div class="dataAntrian">
          <p>Nama Anda : <span id="nama"></span></p>
          <p>Alamat : <span id="alamat"></span></p>
          <p>No Hp : <span id="noHp"></span></p>
          <p>Jenis Mobil : <span id="mobil"></span></p>
          <p>Ukuran Mobil: <span id="ukuranMobil"></span></p>
          <p>No. Polisi : <span id="noPolisi"></span></p>
          <p>Layanan : <span id="layanan-antrian"></span></p>
          <p>Antrian : <span id="antrian-cust"></span></p>
          <p>Harga : <span id="estimasi-harga"></span> </p>
          <hr>
          <h4>TERIMAKASIH <br> ATAS KUNJUNGAN ANDA</h4>
        </div>
      </div>
      <div class="action">
        <button class="btn-cetakAntrian">
          CETAK
          <i class="bi bi-printer"></i>
        </button>
  
        <button class="btn-lihatAntrian">
          SELESAI
          <i class="bi bi-check-square"></i>
        </button>
      </div>
    </div>
  </div>
 
@endsection