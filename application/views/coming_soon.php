<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title>Coming Soon... | buildsme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='<?php echo base_url() ?>assets/css/fonts/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!--
	<link href='<?php echo base_url() ?>assets/css/demo-panel.css' rel='stylesheet' type='text/css'>
	-->

    <link href='<?php echo base_url() ?>assets/css/fonts/Inconsolata.css' rel='stylesheet' type='text/css' id="font-theme">
    <link href='<?php echo base_url() ?>assets/css/bootstrap-mod.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url() ?>assets/css/custom.css' rel='stylesheet' type='text/css'>

    <style>
        html,
        body,
        .fullscreen {
            height: 100%;
            color: #fff;
        }

        .bg-Curiosity-blue {
            background: -webkit-linear-gradient(90deg, #525252 10%, #3d72b4 90%);
            /* Chrome 10+, Saf5.1+ */
            background: -moz-linear-gradient(90deg, #525252 10%, #3d72b4 90%);
            /* FF3.6+ */
            background: -ms-linear-gradient(90deg, #525252 10%, #3d72b4 90%);
            /* IE10 */
            background: -o-linear-gradient(90deg, #525252 10%, #3d72b4 90%);
            /* Opera 11.10+ */
            background: linear-gradient(90deg, #525252 10%, #3d72b4 90%);
            /* W3C */
        }

        .bg-Rose-Water {
            background: -webkit-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%);
            /* Chrome 10+, Saf5.1+ */
            background: -moz-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%);
            /* FF3.6+ */
            background: -ms-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%);
            /* IE10 */
            background: -o-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%);
            /* Opera 11.10+ */
            background: linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%);
            /* W3C */
        }

        .bg-texture {
            /*
      background-image:url(assets/images/dark_embroidery.png);
      background-repeat:repeat;
      */
            linear-gradient(135deg, #708090 22px, #d9ecff 22px, #d9ecff 24px, transparent 24px, transparent 67px, #d9ecff 67px, #d9ecff 69px, transparent 69px),
            linear-gradient(225deg, #708090 22px, #d9ecff 22px, #d9ecff 24px, transparent 24px, transparent 67px, #d9ecff 67px, #d9ecff 69px, transparent 69px)0 64px;
            background-color: #5F5F5F;

        }

        .wrap {
            padding: 200px 0px;
            text-align: center;
        }
    </style>
</head>

<body class="bg-texture  ">

    <div class="preloader">
        <div class="status">&nbsp;</div>
    </div>

    <!-- Begin page content -->
    <div class="container" id="content">
        <div class="fullscreen wrap">
            <h1 class="mt0 mb40"><span class="rotate">Coming Soon,本网页 即将开始</span></h1>
            <h4 class="mb20">We're working hard to improve our website.</h4>
            <h4 class="mb20" id="subTitle" style="display:none">Thank you.</h4>
            <p><a href="<?php echo base_url() ?>" class="btn btn-sm btn-primary">Back to Main page.</a></p>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/plugin/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugin/jquery.simple-text-rotator.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    -->

    <script>
        //		$.backstretch([
        //		"images/bg3.jpg"], {
        //			duration: 3000,
        //			fade: 750
        //		  });

        $(".rotate").textrotator({});
    </script>
</body>

</html>