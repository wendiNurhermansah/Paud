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
          <li class="breadcrumb-item active" aria-current="page" style="margin-left: 30px;"><b>GALLERY</b> </li>
        </ol>
      </nav>
</div>

<div class="container">
    <div class="row">
      @foreach ($gallery as $i)
        <div class="col-md-3" style="margin:20px;">
            <div class="card" style="width: 18rem;  margin-top: 30px; margin-bottom: 30px;">
                <img class="card-img-top" src="{{ config('app.sftp_src').'paud_storage/public/'. $i->gambar }}" alt="Card image cap">
                <div class="card-body" style="background-color: cyan">
                  <h5 class="card-text text-center">{{$i->n_gallery}}</h5>
                </div>
            </div>
        </div>
       
        @endforeach
    </div>
</div>


 @include('layouts.kontak')

 @include('layouts.footer')

@endsection

