	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Personal</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/layout/bootstrap.css">
			<link rel="stylesheet" href="css/layout/magnific-popup.css">
			<link rel="stylesheet" href="css/layout/jquery-ui.css">				
			<link rel="stylesheet" href="css/layout/nice-select.css">							
			<link rel="stylesheet" href="css/layout/animate.min.css">
			<link rel="stylesheet" href="css/layout/owl.carousel.css">				
			<link rel="stylesheet" href="css/layout/main.css">
		</head>
		<body>	
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <!-- <a href="index.html"><img src="img/logo.png" alt="" title="" /></a> -->
			        <a href="{{ url('/homepage') }}"><h3 style="color:#af9c7f;"><img src="img/smalllogo.png" alt="" title="" style="height: 35px;" />講茶</h3></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="{{ url('/profile') }}">個人資料</a></li>
			          <li><a href="{{ url('/certificate') }}">我的品評單</a></li>
			          <li class="menu-has-children"><a>品評單</a>
			            <ul>
			              <li><a href="{{ url('/form_normal') }}">普通版</a></li>
			              <li><a href="{{ url('/form_professional') }}">專業版</a></li>
			              <li><a href="{{ url('/form_business/vertification') }}">商業版</a></li>
			            </ul>
			          </li>					      		          
			          <li><a href="{{ url('/login') }}">會員登入</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

					

			<script src="js/layout/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/layout/popper.min.js"></script>
			<script src="js/layout/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			<script src="js/layout/easing.min.js"></script>			
			<script src="js/layout/hoverIntent.js"></script>
			<script src="js/layout/superfish.min.js"></script>	
			<script src="js/layout/jquery.ajaxchimp.min.js"></script>
			<script src="js/layout/jquery.magnific-popup.min.js"></script>	
    		<script src="js/layout/jquery.tabs.min.js"></script>						
			<script src="js/layout/jquery.nice-select.min.js"></script>	
            <script src="js/layout/isotope.pkgd.min.js"></script>			
			<script src="js/layout/waypoints.min.js"></script>
			<script src="js/layout/jquery.counterup.min.js"></script>
			<script src="js/layout/simple-skillbar.js"></script>							
			<script src="js/layout/owl.carousel.min.js"></script>							
			<script src="js/layout/mail-script.js"></script>	
			<script src="js/layout/main.js"></script>	
		</body>
	</html>