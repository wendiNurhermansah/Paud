@extends('layouts.main')

@section('content')

@include('layouts.navbar')
   
     
<div class="top">              
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-info" style="padding: 50px;">
        </ol>
    </nav>
</div>
<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page" style="margin-left: 30px;"><b>SAMBUTAN KEPALA SEKOLAH/KETUA YAYASAN</b> </li>
        </ol>
      </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            @foreach ($sambutan as $i)
            <div class="card neww" style="width: 45rem; margin-top: 50px; margin-bottom: 50px;">
                <img class="card-img-top" src="{{ config('app.sftp_src').'paud_storage/public/'. $i->gambar }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">{{$i->isi_sambutan}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-4">
          <div class="col-md-4">
            @include('isi.agenda')
            @include('isi.pengumuman')
            @include('isi.berita')
          </div>
        </div>
    </div>
</div>


 @include('layouts.kontak')

 @include('layouts.footer')

@endsection

