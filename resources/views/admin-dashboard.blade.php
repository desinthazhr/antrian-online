@extends('layouts.admin')

@section('title', 'Admin - Dashboard')

@section('content')
        <div class="container">
            <div class="col-md-10 content mt-5">
                <h3 class="justify-content-between">SELAMAT DATANG <br> BENGKEL AUTO SERVICE SEHAT</h3>
            </div>
            <di v class="row text-white pt-4 ms-2">
                <div class="card bg-danger " style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-4 text-center">JUMLAH ANTRIAN</h5>
                        <div class="card-footer ">
                            <p class="card-text fw-bold text-center mt-2">06</p>
                        </div>

                    </div>
                </div>
                <div class="card bg-warning" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-4 text-center">ANTRIAN SEKARANG</h5>
                        <div class="card-footer ">
                            <p class="card-text fw-bold text-center mt-2">N-01, E-01, N-02</p>
                        </div>

                    </div>
                </div>
                <div class="card bg-success" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-4 text-center">ANTRIAN SELANJUTNYA</h5>
                        <div class="card-footer">
                            <p class="card-text  fw-bold text-center mt-2">N-03, N-04, N-05</p>
                        </div>
                    </div>
                </div>
            </di>
           
            <!-- card antrian saat ini -->
            <div class="detail-antrian-admin mt-5">
                <h5 class="fw-bold p-3 ">ANTRIAN SAAT INI</h5>
                <div class="row card-header">
                    <div class="card card-antrian">
                        <div class="card-body ">
                            <h2>N-01</h2>
                        </div>
                    </div>
                    <div class="card card-antrian">
                        <div class="card-body ">
                            <h2>N-02</h2>
                        </div>
                    </div>
                    <div class="card card-antrian">
                        <div class="card-body ">
                            <h2>N-03</h2>
                        </div>
                    </div>
                    <div class="card card-antrian">
                        <div class="card-body ">
                            <h2>N-04</h2>
                        </div>
                    </div>
                    <div class="card card-antrian">
                        <div class="card-body ">
                            <h2>N-05</h2>
                        </div>
                    </div>


                </div>
            </div>
        </div>
   
@endsection