  <link rel="stylesheet" type="text/css" href="{{ asset('/') }}vendor/bootstrap/css/bootstrap.min.css">

<form action="simpanData" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">NIM</label>
      <input type="text" class="form-control" name="nim">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nama</label>
      <input type="text" class="form-control" name="nama">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Jurusan</label>
      <select name="jurusan" class="form-control">
        <option value="teknik informatika">Teknik Informatika</option>
        <option value="teknik elektro">Teknik Elektro</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Alamat</label>
      <input type="text" class="form-control" name="alamat">
  </div>
  {{ csrf_field() }} 
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<!--===============================================================================================-->  
  <script src="{{ asset('/') }}vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="{{ asset('/') }}vendor/bootstrap/js/popper.js"></script>
  <script src="{{ asset('/') }}vendor/bootstrap/js/bootstrap.min.js"></script>