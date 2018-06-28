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
		<title>講茶 | 我的品評單</title>

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


			<!-- Start portfolio-area Area -->
            <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">我的品評單</h1>
		                        <p>記錄下每個品嘗時刻</p>
		                    </div>
		                </div>
		            </div>
                    
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">全部</li>
                            <li data-filter=".vector">紅茶</li>
                            <li data-filter=".raster">綠茶</li>
                            <li data-filter=".ui">烏龍茶</li>
                            <li data-filter=".printing">黃茶</li>
                            <li data-filter=" ">白茶</li>
                            <li data-filter=" ">黑茶</li>
                        </ul>
                    </div>
                    
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/1.jpg')}}" alt="">
	                            	</div>
									<a href="{{asset('img/1.jpg')}}" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
								</a>                              		
                            	</div>
								<div class="p-inner">
								    <h4>錫蘭紅茶</h4>
									<div class="cat">紅茶</div>
								</div>					                               
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/1.jpg')}}" alt="">
	                            	</div>
									<a href="{{asset('img/1.jpg')}}" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
								</a>                              		
                            	</div>
								<div class="p-inner">
								    <h4>西湖龍井</h4>
									<div class="cat">綠茶</div>
								</div>					                               
                            </div>                            
                            <div class="single-portfolio col-sm-4 all ui">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/1.jpg')}}" alt="">
	                            	</div>
									<a href="{{asset('img/1.jpg')}}" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a> 
	                            		
	                           	</div>
                                <div class="p-inner">
                                    <h4>凍頂烏龍茶</h4>
                                    <div class="cat">烏龍茶</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all printing">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/1.jpg')}}" alt="">
	                            	</div>
									<a href="{{asset('img/1.jpg')}}" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>                            		
                            	</div> 
                                <div class="p-inner">
                                    <h4>君山銀針</h4>
                                    <div class="cat">黃茶</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/1.jpg')}}" alt="">
	                            	</div>
									<a href="{{asset('img/1.jpg')}}" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>大吉嶺紅茶</h4>
                                    <div class="cat">紅茶</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/1.jpg')}}" alt="">
	                            	</div>
									<a href="{{asset('img/1.jpg')}}" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>日本抹茶</h4>
                                    <div class="cat">綠茶</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End portfolio-area Area -->	
	

            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>網站資訊</h4>
                                <p>
                                    © Copyright 2018 NCUMIS - All Rights Reserved
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>聯絡資訊</h4>
                                <p>電  話：04-24737589</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		

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