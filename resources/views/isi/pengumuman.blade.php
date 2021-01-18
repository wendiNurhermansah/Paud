<div class="card" style="width: 25rem; margin-top: 50px;">
    <div class="card-body">
      <h4>PENGUMUMAN</h4>
     <div class="row">
        @foreach ($pengumuman as $i)
       <div class="col-md-2">
        <i class="fas fa-bullhorn"></i>
       </div>
       <div class="col-md-10">
         <p>{{$i->isi_pengumuman}}</p>
       </div>
       @endforeach
     </div>
    </div>
  </div>