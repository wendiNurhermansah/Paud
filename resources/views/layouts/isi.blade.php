

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
<div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Folmulir Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color: rgb(214, 226, 226);">
        <form>
          <div class="form-group">
            <h5>Data Orangtua</h5>
            <label for="nama_ayah">Nama Ayah/Ibu</label>
            <input type="text" class="form-control" id="nama_ayah" placeholder="Masukan nama ayah dan ibu">
          </div>
          <div class="form-group">
            <label for="nik">No NIK</label>
            <input type="text" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label><br>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat lengkap">
          </div>
          <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" placeholder="Nomor pekerjaan">
          </div>
          <div class="form-group">
            <label for="Nohp">No hp</label>
            <input type="text" class="form-control" id="Nohp" placeholder="Masukan No hp">
          </div>


          <h5>Data Siswa</h5>
          
          <div class="form-group">
            <label for="Nama Lengkap">Nama Lengkap</label>
            <input type="text" name="" class="form-control" placeholder="masukan nama lengkap" id="Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" name="" class="form-control" placeholder="masukan umur" id="umur">
          </div>
  
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="Tempat Lahir">Tempat Lahir</label>
                <input type="text" name="" class="form-control" placeholder="masukan tempat lahir anda!" id="Tempat Lahir">
              </div>
            </div>
         
            <div class="col-md-6">
              <div class="form-group">
                <label for="Tanggal Lahir">Tanggal Lahir</label>
                <input type="date" name="" class="form-control" id="Tanggal Lahir">
              </div>
            </div>
           </div>

           <div class="form">
            <label>Jenis Kelamin</label><br>
            <div class="form-check-inline">
               <input type="radio" class="form-check-input" name="radio1" id="radio2" checked="">
            <label>LAKI_LAKI</label>
            </div> <br>
            
            <div class="form-check-inline">
               <input type="radio" class="form-check-input" name="radio1" id="radio2">
               <label>PEREMPUAN</label>
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>
<!-- colpase -->

<!-- isi -->
<!-- berita -->
<div class="container">
  <div class="isi">
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
            <a href="#" class="btn btn-primary">Lihat Berita</a>
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

  <div class="row perpect">
    <div class="col-md-6 bg-cover" style="background-image: url('img/gedung.jpg'); ">
    
    </div>
    <div class="col-md-6 info">
      <div class="card" style="width: 35rem; height: 19rem; box-shadow: 0px 0px 1px 1px">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>
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
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card cardd" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
   
</div>
  
</div>
</div>

<!-- akhir profil alumni -->
    

