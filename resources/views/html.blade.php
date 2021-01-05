<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/falah.css') }}">

    <title>Miftahul-Falah</title>
    <link rel="icon" href="img/logo.jpg">
    

  </head>
  <body>

    <!-- navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
          <div class="">
              <img src="{{asset('img/logo.jpg')}}" alt="" style="width: 70px; height: 70px;">
          </div>
          <a class="navbar-brand" href="#">Miftahul Falah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile Sekolah
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Sejarah</a>
                <a class="dropdown-item" href="#">Sambutan kepala Sekolah</a>
                <a class="dropdown-item" href="#">Visi & Misi</a>
                <a class="dropdown-item" href="#">Tenaga Pendidik</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Berita
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Berita terbaru</a>
                <a class="dropdown-item" href="#">Info Sekolah</a>
                <a class="dropdown-item" href="#">Agenda</a>
                <a class="dropdown-item" href="#">Gallery</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ekstrakurikuler">Ekstrakulikuler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#prestasi">Prestasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#alumni">Profil Alumni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->

    <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">RA / PAUD MIFTAHUL-FALAH</h1>
          </div>
        </div>    
    <!-- akhir jumbotron -->

    <!-- isi -->
    <!-- berita -->
      <div class="container">
        <div class="isi">
          <h2>Berita Terbaru</h2>
        </div>
      </div>

      <div class="container">  
        <div class="row ris">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('img/logo.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>         
        </div>
        <div class="more-btn col-md-12 text-center">
          <a href="#" class="btn btn-primary border btn-md">Tampilkan Semua Berita</a>
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
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card card2" style="width: 15rem;">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card card3" style="width: 15rem;">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card card4" style="width: 15rem;">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
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

    <!-- profil alumni -->

    <div id="alumni" class="alumni">
      <div class="container">
        <div class="h2">
          <h2>Profil Alumni</h2>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="card cardd" style="width: 18rem;">
              <img class="card-img-top" src="gedung2.jpg" alt="Card image cap">
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

    <!-- kontak -->

    <div id="kontak" class="contak">
      <div class="container">
        <div class="kontak">
          <h2>Kontak</h2>
        </div>

        <div class="row rows">
          <div class="col-md-3">
            <h5>MIFTAHUL FALAH</h5>
          </div>
          <div class="col-md-3">
            <h5>Tentang Kami</h5>
          </div>
          <div class="col-md-3">
            <h5>Maps</h5>
          </div>
          <div class="col-md-3">
            <h5>Kontak kami</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- akhir kontak -->

    <!-- footer -->
    
      <div class="footer">
        <h6>CopyRight.11 || RA/PAUD MIFTAHUL-FALAH 2021</h6>
      </div>
    

    <!-- akhir footter -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        $(window).scroll(function() {
          if ($(document).scrollTop() > 50) {
            $("nav").addClass("test");
          } else {
            $("nav").removeClass("test");
          }
        });
      });
      </script>
  </body>
</html>