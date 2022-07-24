@extends('layouts.admin')

@section('title', 'Admin - Riwayat Antrian')

@section('content')
        <div class="container">
            <div class="col-md-10 content mt-5">
                <h3>RIWAYAT ANTRIAN ONLINE <br> BENGKEL AUTO SERVICE SEHAT</h3>
            </div>
            <div class="exportExcel">
                <button class="border">
                    Export to Excel
                </button>
            </div>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Antrian</th>
                        <th scope="col">Jenis Layanan</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No. Polisi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal</th>

                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>N-01</td>
                        <td>Cuci Reguler</td>
                        <td>Desintha Zahara Azmi</td>
                        <td>BL 122345 EK</td>
                        <td>Selesai</td>
                        <td>21/01/2022</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>N-02</td>
                        <td>Cuci Reguler</td>
                        <td>Desintha Zahara Azmi</td>
                        <td>BL 122345 EK</td>
                        <td>Selesai</td>
                        <td>21/01/2022</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>E-01</td>
                        <td>Cuci Reguler</td>
                        <td>Desintha Zahara Azmi</td>
                        <td>BL 122345 EK</td>
                        <td>Selesai</td>
                        <td>21/01/2022</td>
                    </tr>
                  
                </tbody>

            </table>
        </div>
@endsection