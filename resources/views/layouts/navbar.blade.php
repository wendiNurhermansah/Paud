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
            <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile Sekolah
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ url('/sejarah') }}">Sejarah</a>
              <a class="dropdown-item" href="{{ url('/sambutan') }}">Sambutan kepala Sekolah</a>
              <a class="dropdown-item" href="{{ url('/visi&misi') }}">Visi & Misi</a>
              <a class="dropdown-item" href="{{ url('/dataguru') }}">Tenaga Pendidik</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Berita
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ url('/beritaPopular')}}">Berita</a>
              <a class="dropdown-item" href="{{ url('/infosekolah')}}">Info Sekolah</a>
              <a class="dropdown-item" href="{{ url('/gallery')}}">Gallery</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ekstrakurikuler">Ekstrakulikuler</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#prestasi">Prestasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#alumni">Profil Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- akhir navbar -->
