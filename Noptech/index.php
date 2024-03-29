<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Noptech</title>
	<meta name="description" content="Noptech - Consultants on all things tech" />
	<meta name="keywords" content="website design, 3d printing, laser etching, software">
	<meta property="og:title" content="">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fancybox/jquery.fancybox-v=2.1.5.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body>
	<div class="navbar navbar-fixed-top inv" data-activeslide="1">
		<div class="container">

			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>


			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav row">
					<li data-slide="1" class="col-12 col-sm-2"><a id="menu-link-1" href="#slide-1" title="Next Section"><span class="icon icon-home"></span> <span class="text">HOME</span></a></li>
					<li data-slide="2" class="col-12 col-sm-2"><a id="menu-link-2" href="#slide-2" title="Next Section"><span class="icon icon-user"></span> <span class="text">ABOUT US</span></a></li>
					<li data-slide="3" class="col-12 col-sm-2"><a id="menu-link-3" href="#slide-3" title="Next Section"><span class="icon icon-envelope"></span> <span class="text">CONTACT</span></a></li>
				</ul>
				<div class="row">
					<div class="col-sm-2 active-menu"></div>
				</div>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->

    <!-- === Arrows === -->
	<div id="arrows">
		<div id="arrow-up" class="disabled"></div>
		<div id="arrow-down"></div>
		<!--<div id="arrow-left" class="disabled visible-lg"></div>-->
		<!--<div id="arrow-right" class="disabled visible-lg"></div>-->
	</div><!-- /.arrows -->

	<!-- === MAIN Background === -->
	<div class="slide story" id="slide-1" data-slide="1">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
					<h1 class="font-semibold">NOPTECH</h1>
					<h4 class="font-thin">We are an <span class="font-semibold">independent consulting agency</span> based in Denmark.</h4>
					<br>
					<br>
				</div><!-- /col-12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide1 -->

	<!-- === Slide 2 === -->
	<div class="slide story" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row title-row">
                <div class="col-12 font-thin">Meet the <span class="font-semibold">duo</span>.</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-12 col-lg-6 col-sm-6">
					<p><i class="icon icon-gears"></i></p>
					<h2 class="font-thin">Nikolaj <span class="font-semibold">Røndbjerg</span></h2>
                    <h4 class="font-thin">Data/Electronics Engineer</h4>
                    <h4 class="font-thin"><span class="font-semibold">Areas of expertise:</span><br>3d printing, laser etching/cutting, hardware modules, mechatronic systems, embedded systems and graphics.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-6 col-sm-6">
					<p><i class="icon icon-laptop"></i></p>
					<h2 class="font-thin">Mikkel <span class="font-semibold">Madsen</span></h2>
                    <h4 class="font-thin">Software Engineer</h4>
					<h4 class="font-thin"><span class="font-semibold">Areas of expertise:</span><br>backend applications, mobile app development, server maintenance, hosting and web design.</h4>
				</div><!-- /col12 -->
			</div><!-- /row -->
            <div class="spacer">
                &nbsp;
            </div>
            <div class="row line-row">
                <div class="hr">&nbsp;</div>
            </div><!-- /row -->
			<div class="row content-row">
                <div class="row line-row">
                    <h4 class="col-12 font-thin">Between us, we have the <span class="font-semibold">expertise</span> to assist you in wide range of projects.
                    <a href="#slide-3">Get in touch</a> so we can discuss how <span class="font-semibold">Noptech</span> can help <span class="font-semibold">you</span>
                    bring your ideas to life.</h4>
                </div>
            </div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide2 -->


	<!-- === Slide 3 / Contact === -->
	<div class="slide story" id="slide-3" name="contact" data-slide="3">
		<div class="container">
			<div class="col-lg-5">
				<p>
				</p>
			</div>

			<div class="col-lg-7">
				<h3 class="title-row">Drop Us A Line</h3>
				<br>
                <?php
                    if(isset($_GET['msg'])){
                        echo "<div class=row line-row>";
                        echo "<h4 style='font-weight: bold' class='col-12 font-thin'>".$_GET['msg']."</h4>";
                        echo "</div>";
                        echo "<br>";
                    }else{
                        echo '
                        <form name="enq" class="form-horizontal" action="mailsender.php" method="post" onsubmit="return validation();">
                        <fieldset>
                          <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="name" name="name" class="form-control" id="name" placeholder="Your Name">
                          </div>
                          <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label>Your Text</label>
                            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                              <input type="submit" name="submit" title="submit"/>
                          </div>
                        </fieldset>
                        </form>
                        ';
                    }
                ?>
			</div>
		</div>
	</div><!-- /Slide 3 -->

</body>

	<!-- SCRIPTS -->
	<script src="js/html5shiv.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
	<script src="js/script.js"></script>

	<!-- fancybox init -->
	<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );

		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});

	});
	</script>

</html>
