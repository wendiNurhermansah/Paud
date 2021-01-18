<div class="card" style="width: 25rem; margin-top: 50px;">
    <div class="card-body">
      <h4>AGENDA</h4>
     
     <div class="row">
        @foreach ($agenda as $i)
       <div class="col-md-2">
        <i class="fas fa-calendar-alt"></i>
       </div>
       <div class="col-md-10">
         <p>{{$i->isi_agenda}}</p>
       </div>
       @endforeach
     </div>
    </div>
</div>