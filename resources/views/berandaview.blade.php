<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset ('images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/main.css">
<!--===============================================================================================-->
</head>
    <style>
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    }
    .button2 {
        background-color: white; 
        color: black; 
        border: 2px solid #DAA520;
    }

    .button2:hover {
        background-color: #DAA520;
        color: white;
    }

    .button4 {
    	background-color: #2c347b; /* Green */
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    	border: 2px solid #2c347b;
    }
    .button4:hover{
    	background-color: #2c347b;
    	color: white;
    }

    .button3 {
        background-color: white; 
        color: black; 
        border: 2px solid #f44336;
    }

    .button3:hover {
        background-color: #f44336;
        color: white;
    }


    </style>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<a href="/formTambahData" class="button4"><i class="ti-plus">Tambah Data</i></a>
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column5">No</th>
									<th class="cell100 column1">NIM</th>
									<th class="cell100 column2">Nama</th>
									<th class="cell100 column3">Jurusan</th>
									<th class="cell100 column4">Alamat</th>
									<th class="cell100 column5">Action</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
							@php ($k = (20 * ($mahasiswa->currentPage()-1))+1)
							@foreach ($mahasiswa as $mhs)
								<tr class="row100 body">
									<td class="cell100 column6">{{ ++$i }}</td>
									<td class="cell100 column1">{{ $mhs->nim }}</td>
									<td class="cell100 column2">{{ $mhs->nama }}</td>
									<td class="cell100 column3">{{ $mhs->jurusan }}</td>
									<td class="cell100 column4">{{ $mhs->alamat }}</td>
									<td class="cell100 column5">
										<a href="#" class="button button 2"><i class="ti-pencil">Ubah</i></a>
										<a href="#" class="button button 3"><i class="ti-pencil">Ubah</i></a>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
						{{$mahasiswa->links()}}
					</div>
				</div>
				
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="{{ asset('/') }}vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}vendor/bootstrap/js/popper.js"></script>
	<script src="{{ asset('/') }}vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}js/main.js"></script>

</body>
</html>