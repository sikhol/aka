<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Toko Batik </title>
<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/ninja-slider.css') ?>" rel="stylesheet">

	<script src="<?php echo base_url('assets/js/jque.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<link href="<?php echo base_url('assets/fontawesome/css/font-awesome.min.css') ?>" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css') ?>">
	<!-- <script src="js/jquery.fancybox.min.js"></script> -->
 
	<link rel="stylesheet" href="<?php echo base_url('assets/css/swiper.min.css') ?>">

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
				<li><a href="#" id="ab">ABOUT</a></li>
				<li><a href="#" id="fe">FEATURES</a></li>
				<li><a href="#" id="te">TESTIMONIAL</a></li>
				<li><a href="#" id="pr">PRODUCTS</a></li>
				<li><a href="#" id="ko"><span id="con-us">CONTACT US </span></a></li>
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
			<img id="gbr-head" src="<?php echo base_url('assets/images/home_character.svg') ?>">
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
				<img src="<?php echo base_url('assets/images/features_delivery.svg') ?>" width="80px">
				
				<p class="p-fea">
					<?php foreach ($ongkir as $u) :?>
					<h4 class="jdl-fea"><?php echo $u['judul'] ?></h4>



					<p class="p-fea"><?php echo $u['deskripsi'] ?></p>
				<?php endforeach; ?>
				</p>
			</div>
			<div class="col-sm-4 menu">
				<img src="<?php echo base_url('assets/images/features_nature.svg') ?>" width="80px">
				
				<p class="p-fea">
					<?php foreach ($kualitas as $u) :?>
					<h4 class="jdl-fea"><?php echo $u['judul'] ?></h4>



					<p class="p-fea"><?php echo $u['deskripsi'] ?></p>
				<?php endforeach; ?>
				</p>
			</div>
			<div class="col-sm-4 menu">
				<img src="<?php echo base_url('assets/images/features_price.svg') ?>" width="80px">
				
				<p class="p-fea">
					<?php foreach ($garansi as $u) :?>
					<h4 class="jdl-fea"><?php echo $u['judul'] ?></h4>



					<p class="p-fea"><?php echo $u['deskripsi'] ?></p>
				<?php endforeach; ?>
				</p>
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
		<div class="col-sm-12" style="padding-top: 190px">
			 <div class="swiper-container">
    <div class="swiper-wrapper" style="padding-bottom: 40px">
    	<?php foreach ($testimoni as $u) : ?>
							<div class="swiper-slide">

								<img src="<?php echo base_url().'assets/img/uploads/';?><?php echo $u['gambar'] ?>" class="img-responsive"/><br><br>


							</div>
						<?php endforeach; ?>
      <!-- <div class="swiper-slide"><img src="<?php echo base_url('assets/images/ss.png') ?>" class="img-responsive"></div>
      <div class="swiper-slide"><img src="<?php echo base_url('assets/images/ss2.jpg') ?>" class="img-responsive"></div>
      <div class="swiper-slide"><img src="<?php echo base_url('assets/images/ss.png') ?>" class="img-responsive"></div>
      <div class="swiper-slide"><img src="<?php echo base_url('assets/images/ss2.jpg') ?>" class="img-responsive"></div>
     <div class="swiper-slide"><img src="<?php echo base_url('assets/images/ss.png') ?>" class="img-responsive"></div>
      <div class="swiper-slide"><img src="<?php echo base_url('assets/images/ss2.jpg') ?>" class="img-responsive"></div> -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
		</div>
	</div>
</div>
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
				<button class="filter-button" data-filter="category1">Designing</button>
				<button class="filter-button" data-filter="category2">Development</button>
				<button class="filter-button" data-filter="category3">Graphics</button>
			</div>

			<br/>

			<div class="col-sm-12">
				<a href="#" class="modal-pro" data-toggle="modal" data-target="#myModal">
					<div class="gallery_product col-sm-4 col-xs-12 filter category2">
						<div class="fancybox" rel="ligthbox">
							<img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=122" />
							<div class='img-info'>
								<h3>Image Title 1</h3>
								<h4>Rp. 150.000</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</a>
				<a href="#" class="modal-pro">
					<div class="gallery_product col-sm-4 col-xs-12 filter category2">
						<div class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=526">
							<img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=526" />
							<div class='img-info'>
								<h3>Image Title 2</h3>
								<h4>Rp. 150.000</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</a>
				<a href="#" class="modal-pro">
					<div class="gallery_product col-sm-4 col-xs-12 filter category3">
						<div class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=626">
							<img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=626" />
							<div class='img-info'>
								<h3>Image Title 3</h3>
								<h4>Rp. 150.000</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-12">
				<a href="#" class="modal-pro">
					<div class="gallery_product col-sm-4 col-xs-12 filter category1">
						<div class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=626">
							<img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=626" />
							<div class='img-info'>
								<h3>Image Title 4</h3>
								<h4>Rp. 150.000</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</a>
				<a href="#" class="modal-pro">
					<div class="gallery_product col-sm-4 col-xs-12 filter category2">
						<div class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=486">
							<img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=486" />
							<div class='img-info'>
								<h3>Image Title 5</h3>
								<h4>Rp. 150.000</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</a>
				<a href="#" class="modal-pro">
					<div class="gallery_product col-sm-4 col-xs-12 filter category3">
						<div class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=846">
							<img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=846" />
							<div class='img-info'>
								<h3>Image Title 6</h3>
								<h4>Rp. 150.000</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</a>
			</div>

		</div>
		<div class="col-sm-12" style="text-align: center;margin-top: 20px">
		<ul class="pagination">
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
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
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body">
				<p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<script src="<?php echo base_url('assets/js/swiper.min.js') ?>"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
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


</script>
</body>
</html>