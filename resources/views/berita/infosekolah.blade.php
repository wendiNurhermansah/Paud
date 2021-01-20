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
          <li class="breadcrumb-item active" aria-current="page" style="margin-left: 30px;"><b>INFO SEKOLAH / FASILITAS / DLL</b> </li>
        </ol>
      </nav>
</div>

<div class="container">
    <div class="row">
        @foreach ($info_sekolah as $i)
        <div class="col-md-3" style="padding:20px; margin:20px;">
            <div class="card" style="width: 18rem;  margin-top: 50px; margin-bottom: 50px; padding:20px;">
                <img class="card-img-top" src="{{ config('app.sftp_src').'paud_storage/public/'. $i->gambar }}" alt="Card image cap">
                <div class="card-body" style="background-color: chartreuse">
                  <h5 class="card-text text-center">{{$i->nama_fasilitas}}</h5>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>


 @include('layouts.kontak')

 @include('layouts.footer')

@endsection

