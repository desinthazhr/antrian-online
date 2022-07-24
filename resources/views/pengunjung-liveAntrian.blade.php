@extends('layouts.main')

@section('title', 'Bengkel Sehat - Live Antrian')

@section('content')
  <!-- live antrian -->
  <div class="container mt-5">
    <h4>ANTRIAN YANG SEDANG BERJALAN</h4>

    <div class="live-antrian">
      <div class="content-antrian">
        <h5>Antrian Sekarang</h5>
        <!-- <div class="box-antrian">
          <p class="nomor">Nomor Antrian <br><span>N-02</span></p>
          <p> status : <span> sedang doorsmeer</span></p>

          <p> Prediksi Waktu : <span>± 15 menit</span></p>
          <p> No Polisi : <span>BK 1233 BC </span> </p>
          <p> Layanan : <span>Cuci Reguler</span></p>

          <p> Antrian : <span>Normal</span>
          </p>
          <p> Ukuran : <span>L</span>
          </p>

        </div> -->
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-start box-antrian">
          <!-- <div class="col">
            <div class="card" style="width:18rem ; height: 15rem;">
              <div class="card-body text-center">
                <p class="nomor">Nomor Antrian <br><span>N-02</span></p>
                <p> status : <span> sedang doorsmeer</span></p>

                <p> Prediksi Waktu : <span>± 15 menit</span></p>
                <p> No Polisi : <span>BK 1233 BC </span> </p>
                <p> Layanan : <span>Cuci Reguler</span></p>

                <p> Antrian : <span>Normal</span>
                </p>
                <p> Ukuran : <span>L</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width:18rem ; height: 15rem;">
              <div class="card-body text-center">
                <p class="nomor">Nomor Antrian <br><span>N-02</span></p>
                <p> status : <span> sedang doorsmeer</span></p>

                <p> Prediksi Waktu : <span>± 15 menit</span></p>
                <p> No Polisi : <span>BK 1233 BC </span> </p>
                <p> Layanan : <span>Cuci Reguler</span></p>

                <p> Antrian : <span>Normal</span>
                </p>
                <p> Ukuran : <span>L</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width:18rem ; height: 15rem;">
              <div class="card-body text-center">
                <p class="nomor">Nomor Antrian <br><span>N-02</span></p>
                <p> status : <span> sedang doorsmeer</span></p>

                <p> Prediksi Waktu : <span>± 15 menit</span></p>
                <p> No Polisi : <span>BK 1233 BC </span> </p>
                <p> Layanan : <span>Cuci Reguler</span></p>

                <p> Antrian : <span>Normal</span>
                </p>
                <p> Ukuran : <span>L</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width:18rem ; height: 15rem;">
              <div class="card-body text-center">
                <p class="nomor">Nomor Antrian <br><span>N-02</span></p>
                <p> status : <span> sedang doorsmeer</span></p>

                <p> Prediksi Waktu : <span>± 15 menit</span></p>
                <p> No Polisi : <span>BK 1233 BC </span> </p>
                <p> Layanan : <span>Cuci Reguler</span></p>

                <p> Antrian : <span>Normal</span>
                </p>
                <p> Ukuran : <span>L</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width:18rem ; height: 15rem;">
              <div class="card-body text-center">
                <p class="nomor">Nomor Antrian <br><span>N-02</span></p>
                <p> status : <span> sedang doorsmeer</span></p>

                <p> Prediksi Waktu : <span>± 15 menit</span></p>
                <p> No Polisi : <span>BK 1233 BC </span> </p>
                <p> Layanan : <span>Cuci Reguler</span></p>

                <p> Antrian : <span>Normal</span>
                </p>
                <p> Ukuran : <span>L</span>
                </p>
              </div>
            </div>
          </div> -->
        </div>

      </div>
      <div class="content-antrian">
        <h5>Antrian Selanjutnya</h5>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-start box-antrian">
          <!-- <div class="col">
            <div class="card" style="width:18rem ; height: 15rem;">
              <div class="card-body text-center">
                <p class="nomor">Nomor Antrian <br><span>N-02</span></p>
                <p> status : <span> sedang doorsmeer</span></p>

                <p> Prediksi Waktu : <span>± 15 menit</span></p>
                <p> No Polisi : <span>BK 1233 BC </span> </p>
                <p> Layanan : <span>Cuci Reguler</span></p>

                <p> Antrian : <span>Normal</span>
                </p>
                <p> Ukuran : <span>L</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width:18rem ; height: 15rem;">
              <div class="card-body text-center">
                <p class="nomor">Nomor Antrian <br><span>N-02</span></p>
                <p> status : <span> sedang doorsmeer</span></p>

                <p> Prediksi Waktu : <span>± 15 menit</span></p>
                <p> No Polisi : <span>BK 1233 BC </span> </p>
                <p> Layanan : <span>Cuci Reguler</span></p>

                <p> Antrian : <span>Normal</span>
                </p>
                <p> Ukuran : <span>L</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width:18rem ; height: 15rem;">
              <div class="card-body text-center">
                <p class="nomor">Nomor Antrian <br><span>N-02</span></p>
                <p> status : <span> sedang doorsmeer</span></p>

                <p> Prediksi Waktu : <span>± 15 menit</span></p>
                <p> No Polisi : <span>BK 1233 BC </span> </p>
                <p> Layanan : <span>Cuci Reguler</span></p>

                <p> Antrian : <span>Normal</span>
                </p>
                <p> Ukuran : <span>L</span>
                </p>
              </div>
            </div>
          </div> -->


        </div>

      </div>
      <div class="content-antrian">
        <h5>Antrian Yang Sudah Selesai</h5>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-start box-antrian">
          <!-- <div class="col">
            <div class="card" style="width:18rem ; height: 15rem;">
              <div class="card-body text-center">
                <p class="nomor">Nomor Antrian <br><span>N-02</span></p>
                <p> status : <span> sedang doorsmeer</span></p>

                <p> Prediksi Waktu : <span>± 15 menit</span></p>
                <p> No Polisi : <span>BK 1233 BC </span> </p>
                <p> Layanan : <span>Cuci Reguler</span></p>

                <p> Antrian : <span>Normal</span>
                </p>
                <p> Ukuran : <span>L</span>
                </p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <h5>Total Antrian : <strong><span>6</span></strong></h5>
    </div>
  </div>
  <div class='back-to-top' style="cursor: pointer;">
    <svg viewBox="0 0 20 20">
      <polyline points="4 13 10 7 16 13"></polyline>
    </svg>
  </div>
  
@endsection