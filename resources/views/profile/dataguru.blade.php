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
          <li class="breadcrumb-item active" aria-current="page" style="margin-left: 30px;"><b>DATA GURU</b> </li>
        </ol>
      </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="owl-carousel owl-theme">
                <div class="item" style="padding: 50px;">
                  <div class="card" style="width: 18rem; padding: 20px;">
                    <img class="card-img-top" src="{{asset('img/logo.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 25rem; margin-top: 50px;">
                <div class="card-body">
                  <h5 class="card-title">AGENDA</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card" style="width: 25rem; margin-top: 50px;">
                <div class="card-body">
                  <h5 class="card-title">PENGUMUMAN</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card" style="width: 25rem; margin-top: 50px; margin-bottom: 30px;">
                <div class="card-body">
                  <h5 class="card-title">Berita terbaru</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
    </div>
</div>


 @include('layouts.kontak')

 @include('layouts.footer')

@endsection

