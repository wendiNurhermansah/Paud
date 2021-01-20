<div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Folmulir Pendaftaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: rgb(214, 226, 226);">
          <form class="needs-validation" id="form" method="POST"  enctype="multipart/form-data" novalidate>
            @csrf
            <div class="form-group">
              <h5>Data Orangtua</h5>
              <label for="n_ayah">Nama Ayah/Ibu</label>
              <input type="text" class="form-control" name="n_ayah" id="n_ayah" placeholder="Masukan nama ayah dan ibu" required>
            </div>
            <div class="form-group">
              <label for="nik">No NIK</label>
              <input type="text" class="form-control" name="nik" id="nik" placeholder="Nomor Induk Kependudukan" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label><br>
              <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan alamat lengkap" required>
            </div>
            <div class="form-group">
              <label for="pekerjaan">Pekerjaan</label>
              <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Nomor pekerjaan" required>
            </div>
            <div class="form-group">
              <label for="no_hp">No hp</label>
              <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Masukan No hp">
            </div>
  
  
            <h5>Data Siswa</h5>
            
            <div class="form-group">
              <label for="n_siswa">Nama Lengkap</label>
              <input type="text" name="n_siswa" class="form-control" placeholder="masukan nama lengkap" id="n_siswa" required>
            </div>
            <div class="form-group">
              <label for="umur">Umur</label>
              <input type="text" name="umur" class="form-control" placeholder="masukan umur" id="umur" required>
            </div>
    
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="t_lahir">Tempat Lahir</label>
                  <input type="text" name="t_lahir" class="form-control" placeholder="masukan tempat lahir anda!" id="t_lahir" required>
                </div>
              </div>
           
              <div class="col-md-6">
                <div class="form-group">
                  <label for="tanggal_L">Tanggal Lahir</label>
                  <input type="date" name="tanggal_L" class="form-control" id="tanggal_L">
                </div>
              </div>
             </div>
  
             <div >
              <label for="jenis_kelamin">Jenis Kelamin</label><br>
              <div class="form-check-inline">
                 <input type="text" class="form-control" name="jenis_kelamin" id=jenis_kelamin" placeholder="masukan jenis kelamin" checked="" required>
              </div>
             </div>
  
            <div style="text-align: center;">
              <button type="submit" class="btn btn-primary btn-sm" id="action"><i class="icon-save mr-2"></i>Simpan<span id="txtAction"></span></button>
               <a class="btn btn-sm" onclick="add()" id="reset">Reset</a>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>

  @section('script')
  <script type="text/javascript">

    function reset(){
        $('#form').trigger('reset');
        $('#preview').attr({ 'src': '-', 'alt': ''});
        $('#changeText').html('Browser Image')
    }

    function add(){
        save_method = "add";
        $('#tambah-data').trigger('reset');
        $('#formTitle').html('Tambah Data');
        $('input[name=_method]').val('POST');
        $('#txtAction').html('');
        $('#reset').show();
        $('#nama').focus();
    }

    add();
    $('#form').on('submit', function (e) {
        if ($(this)[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        else{
            $('#alert').html('');
            url = "{{ route('pendaftaran.store') }}",
            $.ajax({
                url : url,
                type : 'POST',
                data: new FormData(($(this)[0])),
                contentType: false,
                processData: false,
                success : function(data) {
                    console.log(data);
                    $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " + data.message + "</div>");
                    location.reload(); 
                },
                error : function(data){
                    err = '';
                    respon = data.responseJSON;
                    if(respon.errors){
                        $.each(respon.errors, function( index, value ) {
                            err = err + "<li>" + value +"</li>";
                        });
                    }
                    $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
                }
            });
            return false;
        }
        $(this).addClass('was-validated');
    });


  </script>
      
  @endsection
  