@extends('layouts.main')

@section('content')

@include('layouts.navbar')
   
     
<div class="top">              
     <nav aria-label="breadcrumb bg-ark">
        <ol class="breadcrumb bg-info" style="padding: 50px;">
        </ol>
    </nav>
</div>
<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page" style="margin-left: 30px;"><b>DAFTAR PRESTASI</b> </li>
        </ol>
      </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            @foreach ($prestasi as $i)
            <div class="row perpect">
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

