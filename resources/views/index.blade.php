@extends('layout.layout')

@section('content')
<!-- Popup itself -->
<div id="masuk-modal" class="white-popup mfp-hide">
	<div class="mfp-container2" style="padding: 10px;">
		<br>
		<br>
		<div style="margin-top: -40px;">
			<p class="section-text font-lora mt-30">
				Untuk Calon Pengantin dan WO/WP, Selamat Datang di <strong>ManteninAja</strong>.
			</p>
		</div>

		<hr style="margin-top: 8px;">

		<!-- Form -->
		<div class="mfp-container2" style="padding: 0px 100px 0px 100px">
			<p class="section-text font-lora">
				<strong>Masuk</strong> untuk melanjutkan
			</p>
			<form method="post" action="#" role="form" class="form">

				<div class="mb-20 mb-md-10 mt-20">
					<!-- Email -->
					<input type="email" name="email" id="email-4" class="form-control input-lg" placeholder="Email" maxlength="100">
				</div>    

				<div class="mb-20 mb-md-10">
					<!-- Password -->
					<input type="password" name="password" id="password-4" class="form-control input-lg" placeholder="Password" maxlength="100">
				</div>  
				<a href="#" class="btn btn-mod btn-pink btn-medium btn-round mt-10" style="width: 40%">Masuk</a>
			</form>
			<!-- End Form -->  

			<div class="mt-10">
				<a href="" class="font-muli comment" style="color: #EBA1A1;">Butuh bantuan?</a>       
			</div>

		</div>
		<hr style="margin-top: 40px;">
		<div class="mt-30">
			<p class="font-muli comment" style="color: black;">Belum terdaftar? Buat akun untuk
				<a href="{{ url('register') }}" class="font-muli comment" style="color: #EBA1A1;">Calon Pengantin</a>
				atau
				<a href="wedding-daftar.html" class="font-muli comment" style="color: #EBA1A1;">Wedding Organizer/Planner</a>
			</p>       
		</div>
	</div>

</div>
<!-- Page Loader -->        
<div class="page-loader">
	<div class="loader">Loading...</div>
</div>
<!-- End Page Loader -->

<!-- Page Wrap -->
<div class="page" id="top">

	<!-- Navigation panel -->
	<nav class="main-nav dark transparent stick-fixed">
		<div class="full-wrapper relative clearfix">
			<!-- Logo ( * your text or image into link tag *) -->
			<div class="nav-logo-wrap local-scroll">
				<a href="index-mantenin.html" class="logo">
					<img src="images/manten-white2.png" alt="" />
				</a>
			</div>
			<div class="mobile-nav">
				<i class="fa fa-bars"></i>
			</div>

			<!-- Main Menu -->
			<div class="inner-nav desktop-nav">
				<ul class="clearlist">

					<!-- Item With Sub -->
					<li>
						<a href="#">Panduan </a>
					</li>
					<!-- Item With Sub -->
					<li>
						<a href="#" class="mn-has-sub">Tentang Kami </a>
					</li>
					<!-- End Item With Sub -->


					<!-- Blog Menu -->
					<li>
						<a href="#">Blog </a> 
					</li>
					<!-- End Blog Menu -->

					<!-- Divider -->
					<li><a></a></li>
					<!-- End Divider -->


					<!-- Search -->
					<li>
						<a href="#" class="mn-has-sub"><i class="fa fa-search"></i> Cari</a>

						<ul class="mn-sub">

							<li>
								<div class="mn-wrap">
									<form method="post" class="form">
										<div class="search-wrap">
											<button class="search-button animate" type="submit" title="Cari WO/WP">
												<i class="fa fa-search"></i>
											</button>
											<input type="text" class="form-control search-field" placeholder="Cari WO/WP...">
										</div>
									</form>
								</div>
							</li>

						</ul>

					</li>
					<!-- End Search -->

					<!-- Login & Daftar Menu -->
					<li>
						<a href="#masuk-modal" class="open-popup-link">Masuk</a>
					</li>
					<!-- End Login & Daftar Menu -->

				</ul>
			</div>
			<!-- End Main Menu -->

		</div>
	</nav>
	<!-- End Navigation panel -->


	<!-- Head Section -->
	<section class="page-section bg-dark-alfa-30" data-background="images/background/8.jpg">
		<div class="relative container align-left">

			<div class="row">

				<div class="align-center">
					<h1 class="mb-20 mb-xs-0 font-cinzel-head">ManteninAja</h1>
					<div class="hs-line-4 font-muli">
						Temukan Wedding Organizer/Planner Favoritmu
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End Head Section -->

	<section class="page-section bg-manteninaja" style="padding-bottom: 10px;padding-top: 65px;">

		<div class="container relative">

			<div class="row">

				<!-- Content -->
				<div class="col-sm-12">

					<!-- Shop options -->
					<div class="clearfix mb-40">

						<div class="left section-text monserat-bold mt-10">
							Cari Wedding Organizer/Planner
						</div>

						<div class="right">
							<form method="post" action="#" class="form">

								<!-- Name -->
								<!-- <input type="text" name="name" id="name" class="input-md round" placeholder="Ketikkan WO/WP . . ." maxlength="100"> -->

								<select class="input-md round">
									<option>WO & WP</option>
									<option>Wedding Planner (WP)</option>
									<option>Wedding Organizer (WO)</option>
								</select>

								<select class="input-md round">
									<option>Semua Kota</option>
									<option>Jember</option>
								</select>

								<select class="input-md round">
									<option>Semua Harga</option>
									<option>IDR >= 10.000.000</option>
								</select>

								<a href="#" class="btn btn-mod btn-pink btn-medium btn-round btn-with-border">Cari</a>

							</form>
						</div>

					</div>
					<!-- End Shop options -->
				</div>
			</div>
		</div>
	</section>
	<!-- Section -->
	<section class="page-section bg-light" style="padding-top: 10px">
		<div class="container relative">

			<div class="row">

				<!-- Content -->
				<div class="col-sm-12">
					<br>
					<h5 class="font-muli heading align-center">Menampilkan hasil untuk <strong>WO & WP</strong> di <strong>Jember</strong> dengan <strong>Semua Jangkauan Harga</strong>.</h5>

					<div class="right">
						<form method="post" action="#" class="form">
							<select class="input-md round">
								<option>Rating Tertinggi</option>
								<option>Alphabetical (A-Z)</option>
								<option>Alphabetical (Z-A)</option>
							</select>
						</form> 
					</div>
					<br>
					<br>
					<br>
					<div class="row masonry">

						<!-- WO/WP Card -->
						<div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40 wedding-card" style="margin: 0px">

							<div class="post-prev-img">

								<a href="details-wedding.html"><img src="images/WO/Davy_Linggar/preview_thumb/1.jpg" alt="" /></a>

							</div>

							<div class="post-prev-title align-left">
								<img src="images/tiffany-avatar.jpg" alt="" width="50" class="img-circle left">
								<a href="details-wedding.html" class="font-lora-card" style="margin-left: 10px"><em>Davy Linggar</em>
								</a>
								<p class="font-muli-card" style="margin-left: 60px;"><strong>Wedding Organizer - Jember</strong></p>
								<p class="font-muli-card" style="margin-left: 60px; margin-top: -16px">
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									(33 user)
								</p>
							</div>

							<div class="post-prev-more align-center">
								<a href="#" class="btn btn-mod btn-pink btn-round"><i class="fa fa-bookmark"></i> Simpan</a>
							</div>

						</div>
						<!--End WO/WP Card -->

						<!--WO/WP Card -->
						<div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40 wedding-card">

							<div class="post-prev-img">

								<a href="details-wedding.html"><img src="images/WO/Magnolia/preview_thumb/1.jpg" alt="" /></a>

							</div>

							<div class="post-prev-title align-left">
								<img src="images/WO/Magnolia/preview_thumb/pp.jpg" alt="" width="50" class="img-circle left">
								<a href="details-wedding.html" class="font-lora-card" style="margin-left: 10px"><em>Magnolia</em></a>
								<p class="font-muli-card" style="margin-left: 60px;"><strong>Wedding Organizer - Jember</strong></p>
								<p class="font-muli-card" style="margin-left: 60px; margin-top: -16px">
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									(33 user)
								</p>
							</div>

							<div class="post-prev-more align-center">
								<a href="#" class="btn btn-mod btn-pink btn-round"><i class="fa fa-bookmark"></i> Simpan</a>
							</div>

						</div>
						<!-- End WO/WP Card -->

						<!--WO/WP Card -->
						<div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40 wedding-card">

							<div class="post-prev-img">

								<a href="details-wedding.html"><img src="images/WO/Bridal_Dreams/preview_thumb/1.jpg" alt="" /></a>

							</div>

							<div class="post-prev-title align-left">
								<img src="images/WO/Bridal_Dreams/preview_thumb/pp.jpg" alt="" width="50" class="img-circle left">
								<a href="details-wedding.html" class="font-lora-card" style="margin-left: 10px"><em>Magnolia</em></a>
								<p class="font-muli-card" style="margin-left: 60px;"><strong>Wedding Organizer - Jember</strong></p>
								<p class="font-muli-card" style="margin-left: 60px; margin-top: -16px">
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									(33 user)
								</p>
							</div>

							<div class="post-prev-more align-center">
								<a href="#" class="btn btn-mod btn-pink btn-round"><i class="fa fa-bookmark"></i> Simpan</a>
							</div>

						</div>
						<!-- End WO/WP Card -->

						<!--WO/WP Card -->
						<div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40 wedding-card">

							<div class="post-prev-img">

								<a href="details-wedding.html"><img src="images/background/1.jpg" alt="" /></a>

							</div>

							<div class="post-prev-title align-left">
								<img src="images/WO/Go_Bride!/preview_thumb/pp.jpg" alt="" width="50" class="img-circle left">
								<a href="details-wedding.html" class="font-lora-card" style="margin-left: 10px"><em>Magnolia</em></a>
								<p class="font-muli-card" style="margin-left: 60px;"><strong>Wedding Organizer - Jember</strong></p>
								<p class="font-muli-card" style="margin-left: 60px; margin-top: -16px">
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									(33 user)
								</p>
							</div>

							<div class="post-prev-more align-center">
								<a href="#" class="btn btn-mod btn-pink btn-round"><i class="fa fa-bookmark"></i> Simpan</a>
							</div>

						</div>
						<!-- End WO/WP Card -->   

						<!-- WO/WP Card -->
						<div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40 wedding-card">

							<div class="post-prev-img">

								<a href="details-wedding.html"><img src="images/WO/Davy_Linggar/preview_thumb/1.jpg" alt="" /></a>

							</div>

							<div class="post-prev-title align-left">
								<img src="images/tiffany-avatar.jpg" alt="" width="50" class="img-circle left">
								<a href="details-wedding.html" class="font-lora-card" style="margin-left: 10px"><em>Davy Linggar</em></a>
								<p class="font-muli-card" style="margin-left: 60px;"><strong>Wedding Organizer - Jember</strong></p>
								<p class="font-muli-card" style="margin-left: 60px; margin-top: -16px">
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									(33 user)
								</p>
							</div>

							<div class="post-prev-more align-center">
								<a href="#" class="btn btn-mod btn-pink btn-round"><i class="fa fa-bookmark"></i> Simpan</a>
							</div>

						</div>
						<!--End WO/WP Card -->       

						<!--WO/WP Card -->
						<div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40 wedding-card">

							<div class="post-prev-img">

								<a href="details-wedding.html"><img src="images/WO/Bridal_Dreams/preview_thumb/1.jpg" alt="" /></a>

							</div>

							<div class="post-prev-title align-left">
								<img src="images/WO/Bridal_Dreams/preview_thumb/pp.jpg" alt="" width="50" class="img-circle left">
								<a href="details-wedding.html" class="font-lora-card" style="margin-left: 10px"><em>Magnolia</em></a>
								<p class="font-muli-card" style="margin-left: 60px;"><strong>Wedding Organizer - Jember</strong></p>
								<p class="font-muli-card" style="margin-left: 60px; margin-top: -16px">
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									(33 user)
								</p>
							</div>

							<div class="post-prev-more align-center">
								<a href="#" class="btn btn-mod btn-pink btn-round"><i class="fa fa-bookmark"></i> Simpan</a>
							</div>

						</div>
						<!-- End WO/WP Card -->   
						<!--WO/WP Card -->
						<div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40 wedding-card">

							<div class="post-prev-img">

								<a href="details-wedding.html"><img src="images/WO/Bridal_Dreams/preview_thumb/1.jpg" alt="" /></a>

							</div>

							<div class="post-prev-title align-left">
								<img src="images/WO/Bridal_Dreams/preview_thumb/pp.jpg" alt="" width="50" class="img-circle left">
								<a href="details-wedding.html" class="font-lora-card" style="margin-left: 10px"><em>Magnolia</em></a>
								<p class="font-muli-card" style="margin-left: 60px;"><strong>Wedding Organizer - Jember</strong></p>
								<p class="font-muli-card" style="margin-left: 60px; margin-top: -16px">
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									(33 user)
								</p>
							</div>

							<div class="post-prev-more align-center">
								<a href="#" class="btn btn-mod btn-pink btn-round"><i class="fa fa-bookmark"></i> Simpan</a>
							</div>

						</div>
						<!-- End WO/WP Card -->    
						<!--WO/WP Card -->
						<div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40 wedding-card">

							<div class="post-prev-img">

								<a href="details-wedding.html"><img src="images/WO/Magnolia/preview_thumb/1.jpg" alt="" /></a>

							</div>

							<div class="post-prev-title align-left">
								<img src="images/WO/Magnolia/preview_thumb/pp.jpg" alt="" width="50" class="img-circle left">
								<a href="details-wedding.html" class="font-lora-card" style="margin-left: 10px"><em>Magnolia</em></a>
								<p class="font-muli-card" style="margin-left: 60px;"><strong>Wedding Organizer - Jember</strong></p>
								<p class="font-muli-card" style="margin-left: 60px; margin-top: -16px">
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									<i class="fa fa-star" style="color: yellow"></i>
									(33 user)
								</p>
							</div>

							<div class="post-prev-more align-center">
								<a href="#" class="btn btn-mod btn-pink btn-round"><i class="fa fa-bookmark"></i> Simpan</a>
							</div>

						</div>
						<!-- End WO/WP Card -->               
					</div>
				</div>
				<!-- End Content -->


			</div>

		</div>
	</section>
	<!-- End Section -->


	<!-- Divider -->
	<hr class="mt-0 mb-0"/>
	<!-- End Divider -->


	<!-- Foter -->
	<footer class="page-section bg-gray-lighter footer pb-60">
		<div class="container">

			<!-- Footer Logo -->
			<div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
				<a href="#top"><img src="images/mantenin3-footer.png" width="156" height="72" alt="" /></a>
			</div>
			<!-- End Footer Logo -->

			<!-- Social Links -->
			<div class="footer-social-links mb-110 mb-xs-60">
				<a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
			</div>
			<!-- End Social Links -->  

			<!-- Footer Text -->
			<div class="footer-text">

				<!-- Copyright -->
				<div class="footer-copy font-alt">
					<a href="#" target="_blank">&copy; ManteninAja 2015</a>.
				</div>
				<!-- End Copyright -->

				<div class="footer-made">
					Webiste Portal Wedding Organizer/Planner di Indonesia.
				</div>

			</div>
			<!-- End Footer Text --> 

		</div>


		<!-- Top Link -->
		<div class="local-scroll">
			<a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
		</div>
		<!-- End Top Link -->

	</footer>
	<!-- End Foter -->


</div>
<!-- End Page Wrap -->
@stop

@section('footer')

@stop