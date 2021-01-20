

    <!-- jumbotron -->
    <div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/gedung1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/gedung2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/gedung.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
     </div>
    </div>
   
<!-- akhir jumbotron -->

<!-- colpase -->
<div>
  @include('layouts.form')
</div>

<!-- colpase -->

<!-- isi -->
<!-- berita -->
<div class="container">
  <div class="isi" style="margin-top: 30px; margin-bottom: 50px;">
    <h2>Berita Terbaru</h2>
  </div>
</div>


  <div class="container">
    <div class="owl-carousel owl-theme">
      @foreach ( $berita as $i )
      <div class="item">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{ config('app.sftp_src').'paud_storage/public/'. $i->gambar }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $i->judul }}</h5>
            <p class="card-text">{{ $i->isi_berita }}</p>
            <a href="{{url('/beritaPopular')}}" class="btn btn-primary">Lihat Berita</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  
  <div class="more-btn col-md-12 text-center">
    <a href="{{ url('/beritaPopular') }}" class="btn btn-primary border btn-md">Tampilkan Semua Berita</a>
  </div>  
</div>
<!-- akhir berita -->
<!-- akhir isi -->


<!-- ekstrakulikuler -->
<div  class="gray">
  <div class="container" id="ekstrakurikuler">
        <div class="isi2" >
          <h2>Ekstrakulikuler</h2>
        </div>

        <div class="row han">
          <div class="col-md-3">
            <div class="card card1" style="width: 15rem;">
              <div class="card-body">
                  <div class="row away">
                      <div class="col-md-6">
                        <img src="img/lukis.png" alt="" style="width: 100px;">
                      </div>
                      <div class="col-md-6">
                        <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 30px;">Menggambar</h6>
                      </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card2" style="width: 15rem;">
              <div class="card-body">
                <div class="row away">
                    <div class="col-md-6">
                      <img src="img/tari.jpg" alt="" style="width: 100px;">
                    </div>
                    <div class="col-md-6">
                      <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 30px;">Tari-tarian</h6>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card3" style="width: 15rem;">
              <div class="card-body">
                <div class="row away">
                    <div class="col-md-6">
                      <img src="img/olahraga.png" alt="" style="width: 100px;">
                    </div>
                    <div class="col-md-6">
                      <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 30px;">Olahraga</h6>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card4" style="width: 15rem;">
              <div class="card-body">
                <div class="row away">
                    <div class="col-md-6">
                      <img src="img/alquran.jpg" alt="" style="width: 100px;">
                    </div>
                    <div class="col-md-6">
                      <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 30px;">Mengaji</h6>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>

<!-- akhir ekstrakulikuler -->

<!-- prestasi -->

<div id="prestasi">
<div class="container">
  <div class="asu">
    <h2>Prestasi Baru</h2>
  </div>
  <div class="more-btn col-md-12 text-center">
    <a href="{{ url('/prestasi') }}" class="btn btn-primary border btn-md">Tampilkan Semua Prestasi</a>
  </div>
  <div class="owl-carousel owl-theme"> 
  @foreach ($prestasi as $i)
  <div class="item">
    <div class="card cardd" style="width: 18rem;">
      <div class="row">
        <div class="col-md-6">
          <div>
            <img class="card-img-top" src="{{ config('app.sftp_src').'paud_storage/public/'. $i->gambar }}" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">{{$i->n_prestasi}}</h5>
            <p>{{$i->isi_prestasi}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  </div>
</div>
</div>

<!-- akhir prestasi -->

<!-- profil Siswa -->

<div id="alumni" class="alumni">
<div class="container">
  <div class="h2">
    <h2>Profil Siswa</h2>
  </div>
  <div class="more-btn col-md-12 text-center">
    <a href="{{ url('/profilesiswa') }}" class="btn btn-primary border btn-md">Tampilkan Semua Siswa</a>
  </div> 

  <div class="owl-carousel owl-theme">
    @foreach ( $daftar_siswa as $i )
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{ config('app.sftp_src').'paud_storage/public/'. $i->gambar }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$i->nama_siswa}}</h5>
          <a href="{{ url('/profilesiswa') }}" class="btn btn-success">Lihat semua</a>
        </div>
      </div>
    </div>
   @endforeach
</div>
  
</div>
</div>

<!-- akhir profil alumni -->


    

