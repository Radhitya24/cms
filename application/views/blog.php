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
				<ol class="breadcrumb mb-0">
					<a class="btn btn-square btn-outline-light rounded-circle me-0" href="<?= base_url('auth')?>"><i
							class="fa fa-user"></i></a>
				</ol>
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
		<a class="navbar-brand ms-4 ms-lg-0">
			<h1 class="text-primary m-0"><?= $konfig->judul_website;?></h1>
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


	<!-- Carousel Start -->
	<!-- Carousel Start -->
	<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
		<div class="owl-carousel header-carousel position-relative">
			<?php foreach ($caraousel as $kate){ ?>
			<div class="owl-carousel-item position-relative">
				<img class="img-fluid" src="<?= base_url('assets/upload/caraousel/'.$kate['foto'])?>" alt="">
				<div class="owl-carousel-inner">
					<div class="container">
						<div class="row justify-content-start">
							<div class="col-lg-8">
								<h3 class="display-1 text-light mb-2 animated slideInDown">Kebon Ndalem Coffe and Eatery
								</h3>
								<p class="text-light fs-5 mb-4 pb-3">Tak ada yang lebih sempurna untuk menutup hari
									selain aroma kopi dan ketenangan malam di kota.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
	</div>
	<!-- Carousel End -->
	<!-- Product Start -->
	<div class="container">
		<div class="col-12 col-sm-4">
			<div class="mb-3">
				<div class="top-social-area">
					<input type="text" id="searchInput" name="judul" class="form-control mr-2" placeholder="Cari Produk"
						required>
				</div>
			</div>
		</div>
		<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<p class="text-primary text-uppercase mb-2">MEALS</p>
		</div>
		<div class="row g-4">
			<?php foreach ($konten as $uu){  ?>
			<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
				<div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
					<div class="text-center p-4">
						<div class="d-inline-block border border-primary rounded-pill px-3 mb-3">
							<?= $uu['nama_kategori']?></div>
						<h3 class="searchable" class="mb-3"><?= $uu['judul']?></h3>
					</div>
					<div class="position-relative mt-auto">
						<img class="img-fluid" src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>" alt="">
						<div class="product-overlay">
							<a class="btn btn-lg-square btn-outline-light rounded-circle"
								href="<?=base_url('home/artikel/'.$uu['slug'])?>"><i
									class="fa fa-eye text-primary"></i></a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<!-- Product End -->



	<!-- Service End -->


	<!-- Team Start -->

	<!-- Team End -->


	<!-- Testimonial Start -->

	</div>
	<!-- Testimonial End -->


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
							<a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
									class="fab fa-twitter"></i></a>
							<a class="btn btn-square btn-outline-light rounded-circle me-1"
								href="<?= $konfig->facebook;?>"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-square btn-outline-light rounded-circle me-1"
								href="<?= $konfig->instagram;?>"><i class="fab fa-instagram"></i></a>
							<a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
									class="fab fa-linkedin-in"></i></a>
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
						<a href="<?= base_url('home/about') ?>" class="nav-item nav-link">About Us</a>
						<?php foreach ($kategori as $kate) { ?>
						<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"
							class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a>
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
		<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" style=""><i
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
		<script>
			// Ambil elemen input pencarian dan elemen-elemen yang dapat dicari
			const searchInput = document.getElementById('searchInput');
			const searchableItems = document.querySelectorAll('.searchable');
			const productItems = document.querySelectorAll('.col-lg-4'); // Kontainer produk
			const productContainer = document.querySelector('.row.g-4'); // Kontainer produk yang akan difilter
			let noResultsMessage = document.getElementById('noResultsMessage'); // Pastikan pesan sudah ada

			if (!noResultsMessage) {
				// Membuat pesan "Produk tidak ditemukan." jika belum ada
				noResultsMessage = document.createElement('div');
				noResultsMessage.id = 'noResultsMessage';
				noResultsMessage.textContent = 'Produk tidak ditemukan.';
				noResultsMessage.style.display = 'none';
				noResultsMessage.style.color = 'white';
				noResultsMessage.style.textAlign = 'center';
				noResultsMessage.style.marginTop = '20px';
				productContainer.appendChild(noResultsMessage);
			}

			// Event listener untuk pencarian
			searchInput.addEventListener('input', function () {
				const filter = searchInput.value.toLowerCase(); // Ubah teks input menjadi huruf kecil
				let hasResults = false; // Indikator untuk hasil pencarian

				// Menyembunyikan semua produk yang tidak cocok
				productItems.forEach(item => {
					const itemTitle = item.querySelector('.searchable').textContent
						.toLowerCase(); // Ambil teks elemen produk
					if (itemTitle.includes(filter)) {
						item.style.display = ''; // Tampilkan jika cocok
						hasResults = true;
					} else {
						item.style.display = 'none'; // Sembunyikan jika tidak cocok
					}
				});

				// Tampilkan atau sembunyikan pesan "Produk tidak ditemukan."
				if (!hasResults) {
					noResultsMessage.style.display = 'block'; // Tampilkan pesan jika tidak ada hasil
				} else {
					noResultsMessage.style.display = 'none'; // Sembunyikan pesan jika ada hasil
				}
			});

		</script>
</body>

</html>
