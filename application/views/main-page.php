<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">

	<title><?php echo $this->lang->line('common_title_site'); ?></title>


	<link rel="preload" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css" as="style" onload="this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	</noscript>


	<link rel="preload" href="<?= base_url(); ?>assets/js/plugin/wow/animate.css" as="style" onload="this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?= base_url(); ?>assets/js/plugin/wow/animate.css">
	</noscript>

	<link rel="preload" href="<?= base_url(); ?>assets/theme/grayscale/grayscale.css" as="style" onload="this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?= base_url(); ?>assets/theme/grayscale/grayscale.css">
	</noscript>

	<link rel="preload" href="<?= base_url(); ?>assets/css/font-awesome/css/font-awesome.min.css" as="style" onload="this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome/css/font-awesome.min.css">
	</noscript>

	<link rel="preload" href="<?= base_url(); ?>assets/css/fonts/Roboto.css" as="style" onload="this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fonts/Roboto.css">
	</noscript>
	<!-- Custom CSS -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="/assets/js/IEFix/html5shiv.js"></script>
	<script src="/assets/js/IEFix/respond.min.js"></script>
	<![endif]-->

	<style>
		.navbar-brand {
			padding: 0px;
		}

		@media (max-width: 767px) {
			.navbar-brand {
				padding: 10px 15px;
			}

			.navbar-brand img {
				height: 35px;
			}
		}

		#Container .mix {
			display: none;
			margin-bottom: 3px;
		}

		img {
			max-width: 100%;
		}

		header {
			background: url('assets/images/banner-1.jpg')no-repeat;
		}

		.no-gap {
			padding-left: 0px;
			padding-right: 0px;
		}
	</style>
</head>

<body id="page-top" data-spy="scroll" data-offset="51" data-target=".navbar-fixed-top">
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-49272091-8', 'auto');
		ga('send', 'pageview');
	</script>


	<!-- Navigation -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">
					<img src="assets/images/logo.png" height="50">
					<!--<i class="fa fa-play-circle"></i>  <span class="light">Art</span> Unit-->
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
				<ul class="nav navbar-nav">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden"><a href="#page-top"></a></li>
					<li><a class="page-scroll" href="#about">About</a></li>
					<li><a class="page-scroll" href="#artist">Artist</a></li>
					<li><a class="page-scroll" href="#service">Service</a></li>
					<li><a class="page-scroll" href="#contact">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#" class="langSwitch" data-lang="thai">Thai</a></li>
							<li><a href="#" class="langSwitch" data-lang="english">English</a></li>
							<li><a href="#" class="langSwitch" data-lang="chinese">Chinese</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Intro Header -->
	<header class="intro" style="border-bottom:1px solid #525252">
		<div class="intro-body">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="brand-heading"><span class="light">Art</span> Unit</h1>
						<p class="intro-text">Arts of business design</p>
						<a href="#about" class="btn btn-circle page-scroll">
							<i class="fa fa-angle-double-down animated"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>


	<section id="about" class="content-section text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 wow fadeInUp">
					<h2>About <span class="light">Art</span> Unit</h2>
					<?php echo $this->lang->line('about_detail'); ?>
				</div>
			</div>
		</div>
	</section>

	<section id="artist" class="content-section text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 wow fadeInUp">
					<h2>Artist</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
							<div class="wow fadeInUp">
								<img src="assets/images/tanatat.png" class="img-responsive">
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-left">
							<div class="wow fadeInUp">
								<h4>MR. Tanatat Sriwanichakorn</h4>
								<h5><span class="light">Executive Designer</span></h5>
							</div>
						</div>
					</div>
					<div class="visible-xs visible-sm mb40"></div>
				</div>

				<div class="col-md-6 col-sm-12">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
							<div class="wow fadeInUp">
								<img src="assets/images/wipawat.png" class="img-responsive">
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-left">
							<div class="wow fadeInUp">
								<h4>Ms. Wipawat Rupsom</h4>
								<h5><span class="light">Graphic Designer</span></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="service" class="content-section text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 wow fadeInUp">
					<h2>Service</h2>
					<div><?php echo $this->lang->line('pic_service'); ?></div>
				</div>
			</div>
			<div id="Container" class="row mt20 ">
				<div class="mt20 mb20 ">
					<div class="mix category-1 "><img src="assets/images/logo-1.jpg" /></div>
					<div class="mix category-1 "><img src="assets/images/logo-2.jpg" /></div>
					<div class="mix category-1 "><img src="assets/images/logo-6.jpg" /></div>
					<div class="mix category-1 "><img src="assets/images/logo-4.jpg" /></div>
					<div class="mix category-1 "><img src="assets/images/logo-13.jpg" /></div>
					<div class="mix category-1 "><img src="assets/images/logo-3.jpg" /></div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact" class="content-section text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Contact Us</h2>
					<div class="wow fadeInUp">
						<p>Art Unit Co.,Ltd.</p>
						<?php echo $this->lang->line('contact_detail'); ?>
					</div>

					<p><a href="mailto:info@artunit.co.th">info@artunit.co.th</a></p>
					<ul class="list-inline banner-social-buttons">
						<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a></li>
						<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a></li>
						<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Map Section -->
	<div class="container">
		<div class="embed-responsive embed-responsive-16by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61985.95588559166!2d100.55344547926398!3d13.831697376767627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d0c5380a89f%3A0xd2427e86532e49ad!2s203%20Thanon%20Sena%20Nikhom%201%2C%20Khwaeng%20Lat%20Phrao%2C%20Khet%20Lat%20Phrao%2C%20Krung%20Thep%20Maha%20Nakhon%2010230!5e0!3m2!1sen!2sth!4v1696752156813!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>

	<!-- Footer -->
	<footer class="bg-dark">
		<div class="container text-center">
			<p>© 2016 by Art Unit Co.,Ltd.</p>
		</div>
	</footer>

	<div class="modal fade" id="merimiesMessageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="background-color:#323232;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Message for Merimies Customer</h4>
				</div>
				<div class="modal-body">
					<div class="text-center">
					<h1 style="margin-top: 20px;"><i class="fa fa-3x fa-exclamation-circle text-info"></i></h1>
					<p>Website www.merimies.com unavailable for this time in China due to security reasons. You still use product series no. to check authentication via www.artunit.co.th (soon) </p>
					<p>For more information please call our Merimies Customer Service via Tel. <a href="tel:057187311123"> 057187311123</a> or <a href="http://weixin.qq.com/r/eil1bTLE6m_VrXYO93xo">official wechat</a></p>
					<p>
						<img class="img-fluid" src="<?php echo base_url()?>assets/images/merimies-wechat-qrcode.jpg" height="250">
					</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" id="dismissMerimiesMessageModal" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url(); ?>assets/js/loadCSS.js"></script>

	<!-- jQuery -->
	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="<?= base_url(); ?>assets/js/jquery.easing.1.3.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/SmoothScroll.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugin/mixitup/jquery.mixitup.js"></script>
	<script src="<?= base_url(); ?>assets/js/plugin/wow/wow.min.js"></script>
	<?php
	/*
	<script src="<?= base_url(); ?>assets/js/plugin/holderjs/holder.js"></script>

	<!-- Google Maps API Key -->
	<!--
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApYcHVhZHJlyva4TXqEARUBo4m51ChEdA"></script>
	-->
	*/
	?>

	<!-- Custom Theme JavaScript -->
	<script src="<?= base_url(); ?>assets/theme/grayscale/grayscale.js"></script>



	<script>
		$(function() {
			//$("#merimiesMessageModal").modal('show')

			$("#dismissMerimiesMessageModal").click(function(){
				console.log('fire')
				$(this).closest(".modal").modal('hide')
				return false
			})

			new WOW().init();
			$('#Container').mixItUp();

			$(".langSwitch").click(function() {
				var lang = $(this).attr("data-lang");

				$.ajax({
					url: '<?php echo base_url() ?>LanguageSwitcher/switchLang/' + lang,
					success: function(data, status) {
						window.location.reload();
					}
				});

				console.log("langSwitch : " + lang);
				return false;
			});
		});
	</script>

</body>

</html>