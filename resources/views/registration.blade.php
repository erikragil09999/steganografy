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
				<a href="user-daftar.html" class="font-muli comment" style="color: #EBA1A1;">Calon Pengantin</a>
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
	<nav class="main-nav dark js-stick">
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


	<section class="page-section bg-light" style="padding-top: 10px">
		<div class="container relative">

			<div class="row">

				<!-- Content -->
				<div class="col-sm-12 mt-50">
					<div class="row">
						<div class="container relative boxed">
							<p class="font-muli-card heading text-center">Pendaftaran Akun</p>
							{{-- REGISTRATION FORM --}}
							<form method="POST" action="{{ url('register/store') }}" enctype="multipart/form-data" class="form" role="form">
								{{ csrf_field() }}
								<hr class="mb-50">
								<div class="col-sm-6">
									<p class="text-center">
										<div class="container relative" style="width: 260px; height: auto;">
											<span id="image-holder">
												<div id="pre-avatar"></div>
											</span>
											<br>
											<div class="custom-btn-upload btn btn-mod btn-gray btn-large btn-round">
												<span><i class="fa fa-camera"></i> Unggah Foto</span>
												<input id="fileUpload" type="file" class="file-custom" accept="image/*"/>
											</div>
										</div>
									</p>
								</div>
								<div class="col-sm-6">
									<div class="mt-10 mb-20">
										<label for="nama_depan">Nama Depan</label>
										<input type="text" name="firstname" id="nama_user" class="form-control input-md" maxlength="100">
									</div>

									<div class="mt-10 mb-20">
										<label for="nama_belakang">Nama Belakang</label>
										<input type="text" name="lastname" id="nama_belakang" class="form-control input-md" maxlength="100">
									</div>

									<div class="mt-10 mb-20">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" class="form-control input-md" maxlength="100">
									</div>

									<div class="mt-30 mb-20">
										<label for="telepon">HP</label>
										<br>
										<input type="text" name="phone" id="nama_user" class=" input-md col-xs-3" maxlength="100" placeholder="+62 (Indonesia)" disabled>
										<input type="text" name="phone" id="nama_user" class=" input-md col-xs-9" maxlength="100">
									</div>
									<br>
									<div class="mt-10 mb-20">
										<label for="alamat_lengkap">Lokasi</label>
										<br>
										<div class="mb-10">
											<select name="state">
												<option hidden>Provinsi</option>
												<option value="Jawa Timur">Jawa Timur</option>
											</select>
											<select name="city">
												<option hidden>Kota</option>
												<option value="Jember">Jember</option>
											</select>
											<input type="text" name="postal_code" id="nama_user" class=" input-sm" maxlength="100" placeholder="Kode Pos">
										</div>
										<textarea name="address" id="text" class="input-md form-control" rows="3" placeholder="Alamat Lengkap" maxlength="400"></textarea>
									</div>
									<div class="mt-10 mb-20">
										<label for="rekening">Rekening</label>
										<br>
										<div class="mb-10">
											<select name="bank">
												<option hidden>Nama Bank</option>
												<option value="BCA">BCA</option>
												<option value="Mandiri">Mandiri</option>
												<option value="Lainnya">Lainnya</option>
											</select>
											<input type="text" name="alamat_lengkap" id="nama_user" class=" input-sm" maxlength="100" placeholder="" disabled>
										</div>
										<input type="text" name="bank_account" id="rekening_user" class=" input-md col-xs-8" maxlength="100" placeholder="Nomor Rekening">
										<input type="text" name="bank_account_name" id="rekening_user" class=" input-md col-xs-4" maxlength="100" placeholder="Atas Nama">
									</div>
									<br><br>

									<div class="mb-20">
										<label for="password">Password</label>
										<input type="password" name="password" id="user_password" class="form-control input-md" maxlength="100" placeholder="Minimal 6 karakter">
									</div>

									<div class="mb-20">
										<label for="konfirm_user_password">Konfirmasi Password</label>
										<input type="password" name="confirm_password" id="konfirm_user_password" class="form-control input-md" maxlength="100">
									</div>

								</div>

								<div class="row">
									<div class="col-xs-12">
										<hr> 
										<div class="row">
											<div class="mb-20 mb-md-10">
												<p class="text-center">
													<label class="checkbox-inline">
														<input type="checkbox" id="inlineCheckbox1" value="option1">Saya menyetujui 
														<a href="" class="font-muli comment" style="font-size: 14px; color: #EBA1A1;">Ketentuan dan Kebijakan</a>
														ManteninAja 
													</label>
												</p>
											</div>
										</div>
										<p class="text-center">
											<button href="#" class="btn btn-mod btn-pink btn-large btn-round" type="submit" style="width: 40%">Daftar</button>
										</p>
									</div>
								</div>
							</form>

						</div>
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
<script type="text/javascript" src="{{ URL::asset('js/image-upload.js') }}"></script>  
@stop