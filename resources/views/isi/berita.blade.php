<div class="card" style="width: 25rem; margin-top: 50px; margin-bottom: 30px;">
    <div class="card-body">
      <h4>BERITA</h4>
      <div class="row">
        @foreach ($berita as $i)
        <div class="col-md-4">
          <img class="card-img-top" src="{{ config('app.sftp_src').'paud_storage/public/'. $i->gambar }}" alt="Card image cap">
        </div>
        <div class="col-md-8">
          <p>{{ $i->judul }}</p>
        </div>
        @endforeach
    </div>
  </div>