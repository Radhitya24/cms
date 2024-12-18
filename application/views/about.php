<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= base_url('assets/baker')?>/img/kd.png" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/baker')?>/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/baker')?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/baker')?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/baker')?>/css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Spinner Start -->
	<div id="spinner"
		class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-grow text-primary" role="status"></div>
	</div>
	<!-- Spinner End -->


	<!-- Topbar Start -->
	<div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
		<div class="row gx-0 align-items-center d-none d-lg-flex">
			<div class="col-lg-6 px-5 text-start">
			</div>
			<div class="col-lg-6 px-5 text-end">
				<small>Follow us:</small>
				<div class="h-100 d-inline-flex align-items-center">
					<a class="btn-lg-square text-primary border-end rounded-0" href="<?= $konfig->facebook;?>"><i
							class="fab fa-facebook-f"></i></a>
					<a class="btn-lg-square text-primary border-end rounded-0" href="https://wa.me/+6288233676888"><i
							class="bi bi-phone"></i></a>
					<a class="btn-lg-square text-primary pe-0" href="<?= $konfig->instagram;?>"><i
							class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Topbar End -->


	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
		<a href="index.html" class="navbar-brand ms-4 ms-lg-0">
			<h1 class="text-primary m-0"><?= $konfig->judul_website; ?></h1>
		</a>
		<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav mx-auto p-4 p-lg-0">
				<a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
				<a href="<?= base_url('home/galeri') ?>" class="nav-item nav-link">Gallery</a>
				<a href="<?= base_url('home/about') ?>" class="nav-item nav-link">About</a>
				<?php foreach ($kategori as $kate) { ?>
				<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="nav-item nav-link">
					<?= $kate['nama_kategori'] ?>
				</a>
				<?php } ?>
			</div>
		</div>
	</nav>
	<!-- Navbar End -->


	<!-- Page Header Start -->
	<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
		<div class="container text-center pt-5 pb-3">
			<h1 class="display-4 text-white animated slideInDown mb-3">About Us</h1>
			<nav aria-label="breadcrumb animated slideInDown">

			</nav>
		</div>
	</div>
	<!-- Page Header End -->


	<!-- About Start -->
	<div class="container-xxl py-6">
		<div class="container">
			<div class="row g-5">
				<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
					<div class="row img-twice position-relative h-100">
						<div class="col-6">
							<img class="img-fluid rounded" src="<?= base_url('assets/baker')?>/img/hallo.jpg" alt="">
						</div>
						<div class="col-6 align-self-end">
							<img class="img-fluid rounded" src="<?= base_url('assets/baker')?>/img/jogja.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
					<div class="h-100">
						<p class="text-primary text-uppercase mb-2">// About Us</p>
						<h1 class="display-6 mb-4">Kebon Ndalem</h1>
						<p>Kebon Ndalem Coffee & Eatery adalah sebuah tempat ngopi yang terletak dekat dengan tugu Jogja
							yang ikonik.  Kebon Ndalem berada di Jalan Pangeran Diponegero, tepatnya di arah barat laut
							dari depan Tugu Jogja. Apabila anda ingin sekedar ngopi dan menikmati pemandangan tugu jogja
							dari atas dan dekat, kebon ndalem menjadi rekomendasi yang cocok untuk anda kunjungi.</p>
						<p>Kebon Ndalem beroperasi dari jam 10.00 pagi sampai 23.00 malam. Jadi apabila anda ingin
							menikmati pemandangan tugu jogja bisa dari pagi hari hingga malam hari. Nah untuk waktu
							terbaik datang ke kebon ndalem adalah di jam 16.00-18.00 karena anda akan dapat menikmati
							senja yang indah dari atas balkon kebon ndalem.</p>
						<div class="row g-2 mb-4">
							<div class="col-sm-6">
								<i class="fa fa-check text-primary me-2"></i>Produk Berkualitas
							</div>
							<div class="col-sm-6">
								<i class="fa fa-check text-primary me-2"></i>View Bagus
							</div>
							<div class="col-sm-6">
								<i class="fa fa-check text-primary me-2"></i>Spot Foto
							</div>
							<div class="col-sm-6">
								<i class="fa fa-check text-primary me-2"></i>Dan Lain-Lain.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About End -->
	<!-- Footer Start -->
	<div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
		<div class="container py-5">
			<div class="row g-5">
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-6">
						<h4 class="text-light mb-4"><?= $konfig->judul_website;?></h4>
						<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?= $konfig->alamat;?></p>
						<p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?= $konfig->no_wa;?></p>
						<p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $konfig->email;?></p>
						<div class="d-flex pt-2">
							<a class="btn btn-square btn-outline-light rounded-circle me-1"
								href="<?= $konfig->facebook;?>"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-square btn-outline-light rounded-circle me-1"
								href="<?= $konfig->instagram;?>"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-box about-widget">
							<h4 class="text-light mb-4">Tentang Kami</h4>
							<p><?= $konfig->profil_website;?></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<h4 class="text-light mb-4">Quick Links</h4>
						<a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
						<a href="<?= base_url('home/galeri') ?>" class="nav-item nav-link">Gallery</a>
						<a href="<?= base_url('home/about') ?>" class="nav-item nav-link">About</a>
						<?php foreach ($kategori as $kate) { ?>
						<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="nav-item nav-link">
							<?= $kate['nama_kategori'] ?>
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->


		<!-- Copyright Start -->
		<div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
						&copy; <a href="#">Your Site Name</a>, All Right Reserved.
					</div>
					<div class="col-md-6 text-center text-md-end">
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed By <a href="https://htmlcodex.com">HTML Codex</a>
						<br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
							target="_blank">ThemeWagon</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Copyright End -->


		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
				class="bi bi-arrow-up"></i></a>


		<!-- JavaScript Libraries -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url('assets/baker')?>/lib/wow/wow.min.js"></script>
		<script src="<?= base_url('assets/baker')?>/lib/easing/easing.min.js"></script>
		<script src="<?= base_url('assets/baker')?>/lib/waypoints/waypoints.min.js"></script>
		<script src="<?= base_url('assets/baker')?>/lib/counterup/counterup.min.js"></script>
		<script src="<?= base_url('assets/baker')?>/lib/owlcarousel/owl.carousel.min.js"></script>

		<!-- Template Javascript -->
		<script src="<?= base_url('assets/baker')?>/js/main.js"></script>
</body>

</html>
