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
            <div class="card neww" style="width: 45rem; margin-top: 50px; margin-bottom: 50px;">
                <img class="card-img-top" src="img/gedung1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus explicabo atque laudantium nihil eveniet sunt magni provident tenetur, rerum sed sint repellendus. Facere, cum magni rerum impedit nostrum minus voluptatibus!  
                      Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-4">
          <div class="col-md-4">
            <div class="card" style="width: 25rem; margin-top: 50px;">
                <div class="card-body">
                  <h4>AGENDA</h4>
                 <div class="row">
                   <div class="col-md-2">
                    <i class="fas fa-calendar-alt"></i>
                   </div>
                   <div class="col-md-10">
                     <p>Lorem ipsum dolor sit amet.</p>
                   </div>
                 </div>
                </div>
              </div>
              <div class="card" style="width: 25rem; margin-top: 50px;">
                <div class="card-body">
                  <h4>PENGUMUMAN</h4>
                 <div class="row">
                   <div class="col-md-2">
                    <i class="fas fa-bullhorn"></i>
                   </div>
                   <div class="col-md-10">
                     <p>Lorem ipsum dolor sit amet.</p>
                   </div>
                 </div>
                </div>
              </div>
              <div class="card" style="width: 25rem; margin-top: 50px; margin-bottom: 30px;">
                <div class="card-body">
                  <h4>BERITA</h4>
                  <div class="row">
                    <div class="col-md-4">
                      <img class="card-img-top" src="{{asset('img/gedung1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="col-md-8">
                      <p>Lorem ipsum dolor sit amet 
                        lorem3</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


 @include('layouts.kontak')

 @include('layouts.footer')

@endsection

