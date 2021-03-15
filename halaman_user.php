<?php
	session_start();
	include "koneksi.php";
	$db = new database();
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
<head>
    <title>Perpustakaan</title>
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

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- favicons -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom-responsive-style.css">
    <link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="script/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="script/all-plugins.js"></script>
    <script type="text/javascript" src="script/plugin-active.js"></script>
</head>
<body data-spy="scroll" data-target=".main-navigation" data-offset="150">
    <section id="MainContainer">
        <!-- Header starts here -->
        <header id="Header">
            <nav class="main-navigation">
                <div class="container clearfix">
                    <div class="site-logo-wrap">
                        <a class="logo" href="#">PERPUSTAKAAN</a>
                    </div>
                    <a href="javascript:void(0)" class="menu-trigger hidden-lg-up"><span>&nbsp;</span></a>
                    <div class="main-menu hidden-md-down">
                        <ul class="menu-list">
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#HeroBanner">Home</a></li>
                            <li><a class="nav-link" href="buku1.php" data-target="#Services">Buku</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#About">About</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Contact</a></li>
							<li><a href="?q=logout" onclick='return confirm("Apakah Yakin Ingin Logout?")' class="btn btn-outline-danger">Keluar</a>
		</div></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg-up">
                    <ul class="mobile-menu-list">
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#HeroBanner">Home</a></li>
                        <li><a class="nav-link" href="buku1.php" data-target="#Services">Buku</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#About">About</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#ContactUs">Contact</a></li>
						<li><a href="?q=logout" onclick='return confirm("Apakah Yakin Ingin Logout?")' class="btn btn-outline-danger">Keluar</a>
		</div></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header ends here -->
        <!-- Banner starts here -->
        <section id="HeroBanner">
            <div class="hero-content">
                <h1>Selamat Datang, <?php echo $username; ?></h1>
                <p>Perpustakaan SMK Negeri 6 Surakarta</p>
            </div>
        </section>
        <!-- Banner ends here -->
        <!-- Services section starts here -->
        <section id="Services">
            <div class="container">
                <a href="buku1.php"></a>
        </section>
        <!-- Services section ends here -->
        <!-- About Us section starts here -->
        <section id="About">
            <div class="container">
                <div class="about-wrapper">
                    <h2>About Us</h2>
                    <p>Tujuan membuat perpustakaan adalah untuk mewadai dan membangun budaya literasi yang sudah mulai berkurang. Minat baca siswa di sekolah saat ini sudah mengkhawatirkan, banyak dari mereka yang lebih suka bermain melalui gadget mereka dibandingkan dengan memperbanyak pengetahuan. </p>
                </div>
            </div>
        </section>
		
       <section id="Testimonial">
          <div class="testimonial-wrap">
          <div class="container">
            <div class="block-heading">
              <h2>Tentang Perpustakaan</h2>
            </div>
            <ul class="testimonial-slider">
              <li>"Perpustakaan adalah tempat untuk<br> memenuhi dahaga ilmu pengetahuan."</li>
              <li>"I have always imagined that paradise will be a kind of library."<br> -Jorge Luis Borges. </li>
              <li>"Buku mengisi jam-jam yang kosong dengan percakapan yang mungkin tak akan pernah selesai, tapi membuat kita tahu.<br> 
			  Kita hanyalah penafsir tanda-tanda, dimana kebenaran menerakan jejaknya itu sebabnya kata pertama yang menakjubkan adalah Bacalah."
				<br>-Gunawan Mohammad</li>
            </ul>
          </div>
        </div>
        </section>
        <!-- Contact us section starts here -->
        <section id="ContactUs">
            <div class="container contact-container">
                <div class="contact-outer-wrapper">
                    <div class="address-block">
                        <p class="add-title">Contact Details</p>
                        <div class="c-detail">
                            <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <span class="c-info">JL. Kronggahan No.24 RT 03/VII, Baturan, Colomadu</span>
                        </div>
                        <div class="c-detail">
                            <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span> <span class="c-info">+6281775184584</span>
                        </div>
                        <div class="c-detail">
                            <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span> <span class="c-info">tessalonika291@gmail.com</span>
                        </div>
                    </div>
                    
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact us section ends here -->
        <!-- Footer section starts here -->
        <footer id="Footer">
            <div class="container">
                <div class="social-share">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="footer-logo-wrap">
                    Thesallonika Kris S &copy; 2020
                </div>
            </div>
        </footer>
        <!-- Footer section ends here -->
    </section>
</body>

</html>