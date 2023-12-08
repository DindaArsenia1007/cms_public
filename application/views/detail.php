<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Videograph Template">
	<meta name="keywords" content="Videograph, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $judul; ?></title>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">

	<!-- Css Styles -->
	<link rel="stylesheet" href="<?= base_url('assets/paling-awal/')?>css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/paling-awal/')?>css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/paling-awal/')?>css/elegant-icons.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/paling-awal/')?>css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/paling-awal/')?>css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/paling-awal/')?>css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/paling-awal/')?>css/style.css" type="text/css">
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section Begin -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<div class="header__logo">
						<a href="#" class="text-light"><?= $konfig->judul_website ?></a>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="header__nav__option">
						<nav class="header__nav__menu mobile-menu">
							<ul>
								<li class="active"><a href="<?= base_url('home')?>">Home</a></li>
								<li><a href="#">Kategori</a>
									<?php foreach($kategori as $kate){?>
									<ul class="dropdown">
										<li>
                                            <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
											
                                        </li>
									</ul>
									<?php }?>
								</li>
								<li><a href=""></a>
									<div class="mb-5">
										<form action="">
											<div class="input-group">
												<input type="text" class="form-control form-control-lg"
													placeholder="keyword" />
												<div class="input-group-append">
													<span class="input-group-text bg-transparent text-primary">
														<i class="fa fa-search"></i>
													</span>
												</div>
											</div>
										</form>
									</div>
								</li>
								<li><a href="<?= base_url('auth')?>">Login</a></li>
							</ul>
						</nav>

					</div>
				</div>
			</div>
			<div id="mobile-menu-wrap"></div>
		</div>
	</header>
	<!-- Header End -->
	<!-- Blog Details Section Begin -->
	<div class="blog-details spad">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="blog__details__content" style="color: white">
						<div class="blog__details__text">
                            <h6><?= $konten->nama_kategori; ?></h6>
                            <h2 class="text-light">
                            <?= $konten->judul; ?>
                            </h2>
                            <img class="img-fluid rounded w-100 mb-4 h-25" 
                            src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>"
                            >
							<?= $konten->keterangan; ?>
						</div>
						<div class="blog__details__tags">
							<span><i class="fa fa-tag"></i> Tag:</span>
							<a href="#">Wedding</a>
							<a href="#">Event</a>
							<a href="#">Couple</a>
						</div>
						<div class="blog__details__recent">
							<h4>Recent Posts</h4>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6">
									<div class="blog__details__recent__item">
										<img src="img/blog/ri-1.jpg" alt="">
										<h5>What are the steps of a body lift procedure?</h5>
										<span>Dec 06, 2019</span>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6">
									<div class="blog__details__recent__item">
										<img src="img/blog/ri-2.jpg" alt="">
										<h5>What are the steps of a body lift procedure?</h5>
										<span>Dec 06, 2019</span>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6">
									<div class="blog__details__recent__item">
										<img src="img/blog/ri-3.jpg" alt="">
										<h5>How to shop for a cosm surgery procedure</h5>
										<span>Dec 06, 2019</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Details Section End -->
	<!-- Footer Section Begin -->
	<footer class="footer">
		<div class="container">
			<div class="footer__top">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="footer__top__logo">
							<a href="#"><img src="img/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="footer__top__social">
							<a href="<?= $konfig->facebook ?>"><i class="fa fa-facebook"></i></a>
							<a href="<?= $konfig->instagram ?>"><i class="fa fa-instagram"></i></a>
							<a href="<?= $konfig->no_wa ?>"><i class="fa fa-whatsapp"></i></a>
							<a href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to=<?= $konfig->email ?>"><i
									class="fa fa-envelope-o"></i></a>
							<a href="<?= $konfig->alamat ?>"><i class="fa fa-map-marker"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__option">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="footer__option__item">
							<h5><?= $konfig->judul_website ?></h5>
							<p><?= $konfig->profil_website ?></p>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-3">
						<div class="footer__option__item">
							<h5>About</h5>
							<ul>
								<li><a href="<?= base_url('home')?>">Home</a></li>
								<?php foreach($kategori as $kate){?>
								<li><a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
										<?= $kate['nama_kategori'] ?></a>
								</li>
								<?php }?>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="footer__option__item">
							<h5>Newsletter</h5>
							<p>Videoprah is an award-winning, full-service production company specializing.</p>
							<form action="#">
								<input type="text" placeholder="Email">
								<button type="submit"><i class="fa fa-send"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__copyright">
				<div class="row">
					<div class="col-lg-12 text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<p class="">
							All rights project | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="Dinda A.P"
								target="_blank">Dinda A.P</a>
						</p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section End -->

	<!-- Js Plugins -->
	<script src="<?= base_url('assets/paling-awal/')?>js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url('assets/paling-awal/')?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/paling-awal/')?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/paling-awal/')?>js/mixitup.min.js"></script>
	<script src="<?= base_url('assets/paling-awal/')?>js/masonry.pkgd.min.js"></script>
	<script src="<?= base_url('assets/paling-awal/')?>js/jquery.slicknav.js"></script>
	<script src="<?= base_url('assets/paling-awal/')?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/paling-awal/')?>js/main.js"></script>
</body>

</html>
