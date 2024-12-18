<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title><?= $konten->judul ?></title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url('assets/fruitkha')?>/assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url('assets/fruitkha')?>/assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/fruitkha')?>/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url('assets/fruitkha')?>/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url('assets/fruitkha')?>/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url('assets/fruitkha')?>/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url('assets/fruitkha')?>/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url('assets/fruitkha')?>/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url('assets/fruitkha')?>/assets/css/responsive.css">

</head>

<body>

	<!--PreLoader-->
	<!-- <div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div> -->
	<!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->

						<!-- logo -->


						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-link"><a href="<?= base_url('')?>">Home</a>
								</li>
								<li class="nav-item nav-link"><a href="<?= base_url('home/galeri') ?>">Gallery</a>
									<?php foreach ($kategori as $kate) { ?>
								<li><a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"
										class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a>
									<?php } ?>
								</li>
								<li>
									<a class="mobile-hide search-bar-icon" href="#">
								</div>
							</li>
						</ul>
					</nav>
					
					<!-- menu end -->
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- end header -->
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container" style="display:flex;">
			<div class="">
				<p><img src="<?= base_url('assets/upload/konten/'.$konten->foto)?> " class="img-fluid rounded">
				</p>
			</div>
			<div class="container" style="margin-left:50px;width:100%;height:;">
				<h3 style="height:50px;font-size: 30px;"> <?= $konten->judul ?></h3>
				<p style="margin-top:20px;margin-bottom:180px;font-size: 16px;text-align:justify"> <?= $konten->keterangan ?></p>

				<!-- <div class="single-product-form " style="margin-top:20px;margin-bottom:50px;">
				<form action="index.html">
					<input type="number" placeholder="0">
				</form>
				<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
				<p><strong>Categories: </strong>Fruits, Organic</p>
			</div> -->
				<h4>Share:</h4>
				<ul class="product-share">
					<li><a href="<?= $konfig->facebook;?>"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="<?= $konfig->instagram;?>"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<!-- end single product -->


	<!-- end more products -->


	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-6">
						<div class="footer-box about-widget">
							<h2 class="widget-title">Tentang kami</h2>
							<p><?= $konfig->profil_website;?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-box get-in-touch">
							<h2 class="widget-title"><?= $konfig->judul_website;?></h2>
							<ul>
								<li><?= $konfig->alamat;?></li>
								<li><?= $konfig->no_wa;?></li>
								<li><?= $konfig->email;?></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-box pages">
							<h2 class="widget-title">Quick Links</h2>
							<ul>
								<li class="current-list-item"><a href="<?= base_url('')?>">Home</a>
								</li>
								<li class="current-list-item"><a href="<?= base_url('home/galeri') ?>">Gallery</a>
									<?php foreach ($kategori as $kate) { ?>
								<li><a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"
										class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a>
									<?php } ?>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- end footer -->

		<!-- copyright -->
	
		<!-- end copyright -->

		<!-- jquery -->
		<script src="<?= base_url('assets/fruitkha')?>/assets/js/jquery-1.11.3.min.js"></script>
		<!-- bootstrap -->
		<script src="<?= base_url('assets/fruitkha')?>/assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- count down -->
		<script src="<?= base_url('assets/fruitkha')?>/assets/js/jquery.countdown.js"></script>
		<!-- isotope -->
		<script src="<?= base_url('assets/fruitkha')?>/assets/js/jquery.isotope-3.0.6.min.js"></script>
		<!-- waypoints -->
		<script src="<?= base_url('assets/fruitkha')?>/assets/js/waypoints.js"></script>
		<!-- owl carousel -->
		<script src="<?= base_url('assets/fruitkha')?>/assets/js/owl.carousel.min.js"></script>
		<!-- magnific popup -->
		<script src="<?= base_url('assets/fruitkha')?>/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- mean menu -->
		<script src="<?= base_url('assets/fruitkha')?>/assets/js/jquery.meanmenu.min.js"></script>
		<!-- sticker js -->
		<script src="<?= base_url('assets/fruitkha')?>/assets/js/sticker.js"></script>
		<!-- main js -->
		<script src="<?= base_url('assets/fruitkha')?>/assets/js/main.js"></script>

</body>

</html>
