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
        <div class="col-md-3">
            <div class="card" style="width: 18rem;  margin-top: 50px; margin-bottom: 50px;">
                <img class="card-img-top" src="img/gedung2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text text-center">Lapang</p>
                </div>
              </div>
        </div>
    </div>
</div>


 @include('layouts.kontak')

 @include('layouts.footer')

@endsection

