<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $this->lang->line('common_title_site'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="<?=base_url();?>/assets/js/plugin/wow/animate.css" rel="stylesheet" type="text/css">
    

    <!-- Custom CSS -->
    <link href="<?=base_url();?>/assets/theme/grayscale/grayscale.css" rel="stylesheet">
    <link href="<?=base_url();?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>/assets/css/fonts/Roboto.css" rel="stylesheet" type="text/css">
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="/assets/js/IEFix/html5shiv.js"></script>
        <script src="/assets/js/IEFix/respond.min.js"></script>
    <![endif]-->

<style>
#Container .mix{
	display: none;
	margin-bottom: 3px;
}
img{
    max-width: 100%;
}
header{
	background: url('assets/images/banner-1.jpg')no-repeat;
}
.no-gap{padding-left:0px;padding-right: 0px;}
.artist-img img{max-width:150px;height:auto; }
</style>

</head>

<body id="page-top" data-spy="scroll" data-offset="51" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                <img src="assets/images/logo.png" height="35">
                    <!--<i class="fa fa-play-circle"></i>  <span class="light">Art</span> Unit-->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#artist">Artist</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#service">Service</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
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
                        <p class="intro-text">Branding, Online-Advertising , Printing</p>
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
                    <h2>Artist</h2></br></br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 artist-img">
                        <div class="wow fadeInUp">
                            <img src="assets/images/tanatat.png">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-left" >
                        <div class="wow fadeInUp">
                        <h4>MR. Tanatat Sriwanichakorn</h4><h5><span class="light">Executive Designer</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 artist-img">
                        <div class="wow fadeInUp">
                            <img src="assets/images/wipawat.png">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-left">
                        <div class="wow fadeInUp">
                        <h4>Ms. Wipawat Rupsom</h4><h5><span class="light">Graphic Designer</span></h5>
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
                    <div><?php echo $this->lang->line('pic_service');?></div>
                </div>
			</div>
			<!--
			<div id="Container" class="row mt20">
				<div class="mt20 mb20">
					<div class="filter btn bnt-sm btn-default mb10" data-filter="all">Show All</div>
					<div class="filter btn bnt-sm btn-default mb10" data-filter=".category-1">Category 1</div>
					<div class="filter btn bnt-sm btn-default mb10" data-filter=".category-2">Category 2</div>
					<div class="filter btn bnt-sm btn-default mb10" data-filter=".category-3">Category 3</div>
				</div>
				
				<div class="mix category-1" data-myorder="2"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 2" /></div>
				<div class="mix category-2" data-myorder="4"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 2" /></div>
				<div class="mix category-1" data-myorder="1"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 1" /></div>
				<div class="mix category-2" data-myorder="4"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 2" /></div>
				<div class="mix category-3" data-myorder="1"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 3" /></div>
				<div class="mix category-2" data-myorder="4"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 2" /></div>
				<div class="mix category-1" data-myorder="1"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 1" /></div>
				<div class="mix category-3" data-myorder="4"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 3" /></div>
				<div class="mix category-1" data-myorder="1"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 1" /></div>
				<div class="mix category-3" data-myorder="1"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 3" /></div>
				<div class="mix category-2" data-myorder="4"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 2" /></div>
				<div class="mix category-1" data-myorder="1"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 1" /></div>
				<div class="mix category-3" data-myorder="4"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 3" /></div>
				<div class="mix category-1" data-myorder="1"><img data-src="holder.js/150x150?bg=5A5A5A&amp;text=Category 1" /></div>
			</div>col-xs-12 col-sm-12 col-md-12 col-lg-12 
            col-xs-6 col-sm-3 col-md-2 col-lg-2-->
			
            <div id="Container" class="row mt20 ">
                <div class="mt20 mb20 ">               
                    <div class="mix category-1 "><img src="assets/images/logo-1.jpg"/></div>
                    <div class="mix category-1 "><img src="assets/images/logo-2.jpg"/></div>
                    <div class="mix category-1 "><img src="assets/images/logo-6.jpg"/></div>
                    <div class="mix category-1 "><img src="assets/images/logo-4.jpg"/></div>
                    <div class="mix category-1 "><img src="assets/images/logo-13.jpg"/></div>
                    <div class="mix category-1 "><img src="assets/images/logo-3.jpg"/></div>
                </div>
               <!-- <div class="mt20 mb20 ">
                    <div class="mix category-1 "><img src="assets/images/logo-7.jpg"/></div>
                    <div class="mix category-1 "><img src="assets/images/logo-8.jpg"/></div>
                    <div class="mix category-1 "><img src="assets/images/logo-9.jpg"/></div>
                    <div class="mix category-1 "><img src="assets/images/logo-10.jpg"/></div>
                    <div class="mix category-1 "><img src="assets/images/logo-11.jpg"/></div>
                    <div class="mix category-1 "><img src="assets/images/logo-12.jpg"/></div>
                </div> -->
            </div>

		</div>
    </section>


    <section id="contact" class="content-section text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Contact Us</h2>
					<div class="wow fadeInUp"><p>Art Unit Co.,Ltd.</p>
                    <?php echo $this->lang->line('contact_detail'); ?>

                    <p><a href="mailto:feedback@startbootstrap.com">info@artunit.co.th</a></p>
					<ul class="list-inline banner-social-buttons">
						<li>
							<a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
						</li>
						<li>
							<a href="#" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
						</li>
						<li>
							<a href="#" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
    </section>
    
	<!-- Map Section -->
	<div id="map"></div>

    <!-- Footer -->
    <footer class="bg-dark">
        <div class="container text-center">
            <p>© 2016 by Art Unit Co.,Ltd.</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?=base_url();?>/assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=base_url();?>/assets/js/jquery.easing.1.3.min.js"></script>
    <script src="<?=base_url();?>/assets/js/SmoothScroll.js"></script>
    <script src="<?=base_url();?>/assets/js/plugin/holderjs/holder.js"></script>
    <script src="<?=base_url();?>/assets/js/plugin/mixitup/jquery.mixitup.js"></script>
    <script src="<?=base_url();?>/assets/js/plugin/wow/wow.min.js"></script>


    <!-- Google Maps API Key -->   
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApYcHVhZHJlyva4TXqEARUBo4m51ChEdA"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url();?>/assets/theme/grayscale/grayscale.js"></script>
    
    
    
    <script>
    $(function(){
		new WOW().init();
		$('#Container').mixItUp();
		
		$(".langSwitch").click(function(){
			var lang = $(this).attr("data-lang");
			
			$.ajax({
			url: '<?php echo base_url()?>LanguageSwitcher/switchLang/'+lang,
			success: function(data, status) {
					window.location.reload();
			}
			});
			
			console.log("langSwitch : "+lang);
			return false;
		});
    });
    </script>

</body>

</html>
