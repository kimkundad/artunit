<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top">
				<img src="<?php echo base_url() ?>assets/images/logo.png" height="50">
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
<!--
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
-->

<div class="modal" id="AjaxLoadingModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="text-center text-white" style="margin:auto;">
			<p class="mb-2"><i class="fa fa-3x fa-cog fa-spin"></i></p>
			<p>Processing...</p>
		</div>
	</div>
</div>