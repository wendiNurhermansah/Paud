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
          <li class="breadcrumb-item active" aria-current="page" style="margin-left: 30px;"><b>DAFTAR SISWA</b> </li>
        </ol>
      </nav>
</div>

<div class="container">
    <div class="row">
        @foreach ($daftar_siswa as $i)
        <div class="col-md-3">
          <div class="card" style="width: 18rem;  margin-top: 50px; margin-bottom: 50px;">
              <img class="card-img-top" src="{{ config('app.sftp_src').'paud_storage/public/'. $i->gambar }}" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-center">{{$i->nama_siswa}}</p>
              </div>
          </div>
        </div> 
        @endforeach
        
    </div>
</div>


 @include('layouts.kontak')

 @include('layouts.footer')

@endsection

