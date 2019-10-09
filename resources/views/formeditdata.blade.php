  <link rel="stylesheet" type="text/css" href="{{ asset('/') }}vendor/bootstrap/css/bootstrap.min.css">

<form action="{{action('berandaC@editData', $mahasiswa['id_mahasiswa'])}}" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">NIM</label>
      <input type="text" class="form-control" name="nim" value="{{$mahasiswa->nim}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nama</label>
      <input type="text" class="form-control" name="nama" value="{{$mahasiswa->nama}}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Jurusan</label>
      <select name="jurusan" class="form-control">
        <option value="teknik informatika"  @if ($mahasiswa->jurusan == 'teknik informatika') selected @endif>Teknik Informatika</option>
        <option value="teknik elektro" @if ($mahasiswa->jurusan == 'teknik elektro') selected @endif>Teknik Elektro</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Alamat</label>
      <input type="text" class="form-control" name="alamat" value="{{$mahasiswa->alamat}}">
  </div>
  {{ csrf_field() }} 
  <input type="hidden" name="id_mahasiswa" value="{{ $mahasiswa->id_mahasiswa }}">
  <button type="submit" class="btn btn-primary">Ubah</button>
</form>
<!--===============================================================================================-->  
  <script src="{{ asset('/') }}vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="{{ asset('/') }}vendor/bootstrap/js/popper.js"></script>
  <script src="{{ asset('/') }}vendor/bootstrap/js/bootstrap.min.js"></script>