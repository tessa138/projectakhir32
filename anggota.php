<?php
	session_start();
	include "koneksi.php";
	$db = new database();
	$data_anggota = $db->tampil_anggota();
	$iduser = $_SESSION['iduser'];
	$username = $_SESSION['username'];
	$jenis_user = $_SESSION['type'];
	
	if(!isset($_SESSION['is_login'])){
		header("location:login.php");
	
	}
	if(isset($_GET['q'])){
		$db->logout();
		header("location:index.php");
	}
?>

<html>
<head><title>Anggota</title>
	<!-- versi offline -->
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.js"></script>
<!-- end -->
<!-- versi web

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


end -->
	<style>
	/*untuk teks heading di tag <body>*/
		
		body
		{
			background-image: url('buku5.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
<?php
		include "nav.php"; 
	?>

<br/>
	<div class="container">
	 	 <div class="card border-danger mb-3 mx-auto">
	  <div class="card-header bg-info">
		<div class="row">
			<div class="col-sm-11 col-xs-3">
			<br/>
			  <h2>Data Anggota</h2>
			</div>
		</div>
	 </div>
		<div class="card-body">
			<?php
				$batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
				$previous = $halaman - 1;
				$next = $halaman + 1;
				$data = $db->tampil_anggota();
				$jumlah_data = $data;
				$total_halaman = ceil($jumlah_data / $batas);
				$data_anggota = $db->tampil_anggota_paging($halaman_awal,$batas);
				$nomor = $halaman_awal+1;
				if($jumlah_data!=0){
					include "view_anggota.php";
				}else{
					echo "<br><br><h3>Data Anda Kosong</h3>";
				}
			?>
		</div>
	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>