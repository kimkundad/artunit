<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Build SME</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="<?=base_url();?>/assets/js/plugin/wow/animate.css" rel="stylesheet" type="text/css">
    

    <!-- Custom CSS -->
    <link href="<?=base_url();?>/assets/theme/grayscale/grayscale.css" rel="stylesheet">
    <link href="<?=base_url();?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>/assets/css/fonts/Roboto.css" rel="stylesheet" type="text/css">
    
    <!-- slick -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/plugins/slick/slick.css">

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
    header{background: url('assets/images/banner-1.jpg')no-repeat;}
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
                    <!--<i class="fa fa-play-circle"></i>-->  <span class="light">ART</span> UNIT
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
                        <a class="page-scroll" href="#service">Service</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro" style="border-bottom:1px solid #525252;">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><span class="light">ART</span> UNIT</h1>
                        <p class="intro-text">Printing, Artwork, Online-Advertising and Studio</p>
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
					<h2>About <span class="light">ART</span> UNIT</h2>
					<p>We're here to make reproducing your artwork easy. We specialize in designs for all aspects for increase sale and producing an eye-catching business.</p>
					<p>We offer many varies products include artwork printing and advertising online up to all work of art. The studio producing designs to the highest creative and technical standards. We have a constantly updated collection of designs available, and are renowned for our ability to work quickly and accurately to a brief.</p>
				</div>
			</div>
        </div>
    </section>


    <section id="service" class="content-section text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Service</h2>
					<p class="wow fadeInUp">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			</div>
			
			<div id="Container" class="row mt20">
				<div class="mt20 mb20">
					<div class="filter btn bnt-sm btn-default mb10" data-filter="all">Show All</div>
					<div class="filter btn bnt-sm btn-default mb10" data-filter=".category-1">Printing</div>
					<div class="filter btn bnt-sm btn-default mb10" data-filter=".category-2">Advertising</div>
					<div class="filter btn bnt-sm btn-default mb10" data-filter=".category-3">Artwork</div>
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
			</div>
			
		</div>
    </section>


    <section id="contact" class="content-section text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Contact Us</h2>
					<p class="wow fadeInUp">Feel free to email us to provide some queries on our service, or to just say hello!</p>
					<p><a href="mailto:feedback@startbootstrap.com">info@buildsme.com</a>
					</p>
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
            <p>DRAFT VERSION</p>
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

    <!-- slick -->
    <script src="<?=base_url();?>/assets/plugins/slick/slick.min.js"></script>
    
    
    <script>
    $(function(){
		new WOW().init();
		
		
		$('#Container').mixItUp();
    });
    </script>

</body>

</html>
