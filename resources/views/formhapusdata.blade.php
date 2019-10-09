  <link rel="stylesheet" type="text/css" href="{{ asset('/') }}vendor/bootstrap/css/bootstrap.min.css">
@method('POST')
<h2 class="text-danger" style="padding-left: 50px;">Apa anda sudah yakin ingin menghapus data ini?</h2>
<form action="{{action('berandaC@hapusData', $mahasiswa['id_mahasiswa'])}}" method="post" style="padding-left: 50px;">
  <div class="form-row">
    <div class="form-group col-md-6" >
      <label for="inputEmail4">NIM : </label>
          <div class="form-control">
            {{$mahasiswa->nim}}
          </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nama : </label>
      <div class="form-control">
        {{$mahasiswa->nama}}
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Jurusan : </label>
      <div class="form-control">
        {{$mahasiswa->jurusan}}
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Alamat : </label>
    <div class="form-control">
      {{$mahasiswa->alamat}}
    </div>
  </div>
  {{ csrf_field() }} 
  <input type="hidden" name="id_mahasiswa" value="{{ $mahasiswa->id_mahasiswa }}">
  <button type="submit" class="btn btn-primary">Hapus</button>
</form>
<!--===============================================================================================-->  
  <script src="{{ asset('/') }}vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="{{ asset('/') }}vendor/bootstrap/js/popper.js"></script>
  <script src="{{ asset('/') }}vendor/bootstrap/js/bootstrap.min.js"></script>