<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aromaterapi</title>

	<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/ninja-slider.css') ?>" rel="stylesheet">

	<script src="<?php echo base_url('assets/js/jque.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<link href="<?php echo base_url('assets/fontawesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<!-- <script src="js/jquery.fancybox.min.js"></script> -->
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css') ?>">
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				var scroll = $(window).scrollTop();
				var aboutchange = $('#about');
				var about = aboutchange.offset();
				var feachange = $('#feature');
				var fea = feachange.offset();
				var teschange = $('#testi');
				var tes = teschange.offset();
				var prochange = $('#produk');
				var pro = prochange.offset();
				var konchange = $('#pesan');
				var kon = konchange.offset();
				if (scroll > 10 && scroll < about.top) {
					$(".navbar-up").css("display", "none");
					$(".navbar-up").css("-moz-transition", "all 0.3s ease");
					$(".navbar-up").css("transition", "all 0.3s ease");
					$("#ko").css("padding", "5px 20px");
					$("#ko").css("margin-top", "20px");
					$("#con-us").css("border", "2px solid #fff");
					$("#con-us").css("padding", "8px 15px");
				}
				else if (scroll >= about.top && scroll < fea.top) {
					$(".navbar-up").css("display", "block");
					$(".navbar-up").css("box-shadow", "0 3px 8px -2px rgba(0,0,0,.15)");
					$(".navbar-up").css("-moz-transition", "all 0.3s ease");
					$(".navbar-up").css("transition", "all 0.3s ease");
					$(".navbar-up").css("background-color", "#fff");
					$("#ab").css("border-bottom", "2px solid #4A7CDF");
					$(".navbar-default .navbar-nav > li > a").css("color", "#4A7CDF");
					$(".navbar-default .navbar-nav > li > a").css("font-weight", "bold");
					$("#fe").css("border-bottom", "none");
					$("#te").css("border-bottom", "none");
					$("#pr").css("border-bottom", "none");
				}
				else if (scroll >= fea.top && scroll < tes.top) {
					$(".navbar-up").css("display", "block");
					$(".navbar-up").css("box-shadow", "0 3px 8px -2px rgba(0,0,0,.15)");
					$(".navbar-up").css("-moz-transition", "all 0.3s ease");
					$(".navbar-up").css("transition", "all 0.3s ease");
					$(".navbar-up").css("background-color", "#fff");
					$(".navbar-default .navbar-nav > li > a").css("color", "#4A7CDF");
					$(".navbar-default .navbar-nav > li > a").css("font-weight", "bold");
					$("#fe").css("border-bottom", "2px solid #4A7CDF");
					$("#ab").css("border-bottom", "none");
					$("#te").css("border-bottom", "none");
					$("#pr").css("border-bottom", "none");
				}
				else if (scroll >= tes.top && scroll < pro.top) {
					$(".navbar-up").css("display", "block");
					$(".navbar-up").css("box-shadow", "0 3px 8px -2px rgba(0,0,0,.15)");
					$(".navbar-up").css("-moz-transition", "all 0.3s ease");
					$(".navbar-up").css("transition", "all 0.3s ease");
					$(".navbar-up").css("background-color", "#fff");
					$(".navbar-default .navbar-nav > li > a").css("color", "#4A7CDF");
					$(".navbar-default .navbar-nav > li > a").css("font-weight", "bold");
					$("#te").css("border-bottom", "2px solid #4A7CDF");
					$("#ab").css("border-bottom", "none");
					$("#fe").css("border-bottom", "none");
					$("#pr").css("border-bottom", "none");
				}
				else if (scroll >= pro.top && scroll < kon.top) {
					$(".navbar-up").css("display", "block");
					$(".navbar-up").css("box-shadow", "0 3px 8px -2px rgba(0,0,0,.15)");
					$(".navbar-up").css("-moz-transition", "all 0.3s ease");
					$(".navbar-up").css("transition", "all 0.3s ease");
					$(".navbar-up").css("background-color", "#fff");
					$(".navbar-default .navbar-nav > li > a").css("color", "#4A7CDF");
					$(".navbar-default .navbar-nav > li > a").css("font-weight", "bold");
					$("#pr").css("border-bottom", "2px solid #4A7CDF");
					$("#ab").css("border-bottom", "none");
					$("#fe").css("border-bottom", "none");
					$("#te").css("border-bottom", "none");
					$("#ko").css("border-bottom", "none");
				}
				else if (scroll >= kon.top) {
					$(".navbar-up").css("display", "block");
					$(".navbar-up").css("box-shadow", "0 3px 8px -2px rgba(0,0,0,.15)");
					$(".navbar-up").css("-moz-transition", "all 0.3s ease");
					$(".navbar-up").css("transition", "all 0.3s ease");
					$(".navbar-up").css("background-color", "#fff");
					$(".navbar-default .navbar-nav > li > a").css("color", "#4A7CDF");
					$(".navbar-default .navbar-nav > li > a").css("font-weight", "bold");
					$("#ko").css("border-bottom", "2px solid #4A7CDF");
					$("#ab").css("border-bottom", "none");
					$("#fe").css("border-bottom", "none");
					$("#te").css("border-bottom", "none");
					$("#pr").css("border-bottom", "none");
					$("#ko").css("padding", "25px 35px");
					$("#ko").css("margin-top", "0px");
					$("#con-us").css("border", "none");
					$("#con-us").css("padding", "0px");
				}
				else{
					$(".navbar-up").css("-moz-transition", "all 0.3s ease");
					$(".navbar-up").css("transition", "all 0.3s ease");
					$(".navbar-up").css("display", "block");
					$(".navbar-up").css("box-shadow", "none");
					$(".navbar-up").css("background-color", "transparent");
					$(".navbar-up").css("color", "#fff");
					$("#ab").css("border-bottom", "none");
					$(".navbar-default .navbar-nav > li > a").css("color", "#fff");
					$(".navbar-default .navbar-nav > li > a").css("font-weight", "normal");
				}
			})
})
 
</script>
<nav class="navbar navbar-default navbar-fixed-top navbar-up">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">HOME</a></li>
				<li><a href="#about" id="ab">ABOUT</a></li>
				<li><a href="#feature" id="fe">FEATURES</a></li>
				<li><a href="#testi" id="te">TESTIMONIAL</a></li>
				<li><a href="#produk" id="pr">PRODUCTS</a></li>
				<li><a href="#pesan" id="ko"><span id="con-us">CONTACT US </span></a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="jumbotron header">
	<div class="container-fluid">
		<div class="col-sm-6">
			<h2 id="title-page">
				<b>Aromaterapi</b><br>
				Jogja
			</h2>
			<p id="sub-title">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at dolor fermentum quam sodales vulputate.
			</p>
			<button id="btn-home" class="btn">Learn More <span style="margin-left: 5px" class="glyphicon glyphicon-arrow-right"></span></button>
		</div>
		<div class="col-sm-6">
			<img id="gbr-head" src="assets/images/home_character.svg">
		</div>
	</div>
</div>
<div id="about">
	<div class="container">
		<div class="col-sm-12">
			<h2 class="jdl-menu">
				ABOUT US
			</h2>
			<div class="grs">
			</div>

		</div>
		<div class="col-sm-6">
		</div>

		<div class="col-sm-6" id="isi-about">
			<?php foreach ($about as $u) :?>
				<p><?php echo $u['deskripsi'] ?></p>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<div id="feature">
	<div class="container">
		<div class="col-sm-12">
			<h2 class="jdl-menu" style="margin-top: 190px">
				A NEW FEATURES
			</h2>
			<div class="grs">
			</div>
		</div>
		<div class="col-sm-12" style="margin-top: 90px">
			<div class="col-sm-4 menu">
				<img src="assets/images/features_delivery.svg" width="80px">
				<?php foreach ($ongkir as $u) :?>
					<h4 class="jdl-fea"><?php echo $u['judul'] ?></h4>



					<p class="p-fea"><?php echo $u['deskripsi'] ?></p>
				<?php endforeach; ?>
			</div>
			<div class="col-sm-4 menu">
				<img src="assets/images/features_nature.svg" width="80px">
				<?php foreach ($kualitas as $u) :?>
					<h4 class="jdl-fea"><?php echo $u['judul'] ?></h4>



					<p class="p-fea"><?php echo $u['deskripsi'] ?></p>
				<?php endforeach; ?>
			</div>
			<div class="col-sm-4 menu">
				<img src="assets/images/features_price.svg" width="80px">
				<?php foreach ($garansi as $u) :?>
					<h4 class="jdl-fea"><?php echo $u['judul'] ?></h4>



					<p class="p-fea"><?php echo $u['deskripsi'] ?></p>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<div id="testi">
	<div class="container">
		<div class="col-sm-12">
			<h2 class="jdl-menu" style="margin-top: 30px">
				TESTIMONIALS
			</h2>
			<div class="grs">
			</div>
		</div>
		<div class="col-sm-12" style="padding-top: 150px">
			<section id="demos">
				<div class="large-12 columns">
					<div class="owl-carousel owl-theme">
						<?php foreach ($testimoni as $u) : ?>
							<div class="item">

								<img src="<?php echo base_url().'assets/img/uploads/';?><?php echo $u['gambar'] ?>" width="100"/><br><br>


							</div>
						<?php endforeach; ?>

					</div>
					<script>
						$(document).ready(function() {
							var owl = $('.owl-carousel');
							owl.owlCarousel({
								margin: 10,
								nav: true,
								loop: true,
								responsive: {
									0: {
										items: 1
									},
									600: {
										items: 3
									},
									1000: {
										items: 5
									}
								}
							})
						})
					</script>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- <div id="product">
	<h2 class="jdl-segment">Featured Products</h2>
	<p class="p-about">Etiam dapibus, arcu eget efficitur ultricies, nisi urna bibendum felis, laoreet posuere justo risus vel sem.estibulum sit amet eleifend nulla. </p>
	<div id="wrap-product">

		<div class="col-sm-12" id="produk">


		</div>
		<div class="col-sm-12" id="pagination_link">
			<ul class="pagination pagination-lg pag-pro">

			</ul>
		</div>
	</div>
</div> -->
<div id="produk">
	<div class="container">
		<div class="col-sm-12">
			<h2 class="jdl-menu" style="margin-top: 30px">
				OUR PRODUCTS
			</h2>
			<div class="grs">
			</div>
		</div>
		<div class="col-sm-12" style="padding-top:100px">


			<div align="center">
				<button class="filter-button" data-filter="all">All</button>
				<?php foreach ($ktgr as $kt): ?>
					<button class="filter-button" data-filter="cat<?php echo $kt['id']; ?>"><?php echo $kt['nama']; ?></button>	
				<?php endforeach ?>
			</div>

			<br/>

			<div class="col-sm-12" id="dproduk">
				
			</div>
			

		</div>
		<div class="col-sm-12" id="pagination_link" style="text-align: center;margin-top: 20px">
		<ul class="pagination">
		</ul> 
	</div>
	</div>
</div>
<div id="pesan">
	<div class="container">
		<div class="col-sm-12">
			<h2 class="jdl-menu" style="margin-top: 30px">
				SEND US A MESSAGES
			</h2>
			<div class="grs">
			</div>
			<div class="col-md-7">
			</div>
			<div class="col-md-5" style="padding-top: 100px">
			<?php 
			   	if($this->session->flashdata('notif')){
			    	echo $this->session->flashdata('notif');
			  	}
			?>
				<?php echo validation_errors(); ?>

				<?php echo form_open(base_url('aromaterapi/create'));?>
				<input type="text" name="nama" placeholder="Nama" class="input-pesan" required>
				<br><br><br>
				<input type="text" name="subject" placeholder="Subject" class="input-pesan" required>
				<br><br><br>
				<input type="email" name="email" placeholder="Email" class="input-pesan" required>
				<br><br><br>
				<input type="text" name="pesan" placeholder="Message" class="input-pesan" style="height:200px" required>
				<br><br><br>
				<p><?php echo $img; ?></p>
				<input type="text" placeholder="Masukkan Captcha" class="input-pesan" required name="secutity_code">
				<br><br><br>
				<div class="col-sm-6">
					<img src="assets/images/contact_facebook.svg" class="sosmed">
					<img src="assets/images/contact_twitter.svg" class="sosmed">
					<img src="assets/images/contact_gplus.svg" class="sosmed">
					<div style="clear: both">
					</div>
				</div>
				<div class="col-sm-6" id="send">
					<button id="btn-home" class="btn" style="margin-top: 0px;padding:10px 40px">Send<span style="margin-left:5px" class="glyphicon glyphicon-send"></span> </button>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p style="margin:0px">
		Copyright © 2018 Aroma Terapi Jogja, toko online dengan sensasi belanja online store ala mall <br>
		All Rights Reserved
	</p>
</div>

<script>
	var start=0;
	function load_country_data(page) {
		$.ajax({
			url:"<?php echo base_url(); ?>aromaterapi/pagination/"+page,
			method:"GET",
			dataType:"json",
			success:function(data) {
				
				$('#dproduk').html(data.data_produk);
				$('#pagination_link').html(data.pagination_link);
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
				alert("Status: " + textStatus); alert("Error: " + errorThrown);
			}
		});
	}

	load_country_data(0);
	$(document).ready(function(){
		$(document).on("click", ".pagination li a", function(event){
			event.preventDefault();
			var page = $(this).attr("href");
			var res = page.split("/");
			start = res[5];
			load_country_data(start);
		});
	});
		</script>
 <script>

	$(document).ready(function(){

		$(".filter-button").click(function(){
			var value = $(this).attr('data-filter');

			if(value == "all")
			{
				$('.filter').show('1000');
			}
			else
			{
				$(".filter").not('.'+value).hide('3000');
				$('.filter').filter('.'+value).show('3000');

			}

			if ($(".filter-button").removeClass("active")) {
				$(this).removeClass("active");
			}
			$(this).addClass("active");
		});
	});
	/*	end gallery */

	$(document).ready(function(){
		$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
		});
	});


</script> -->
</body>
</html>
