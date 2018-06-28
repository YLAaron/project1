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
		<title>講茶 | 首頁</title>

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

			<!-- start banner Area -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6>發想</h6>
							<h1>將茶發揚光大</h1>
							<p>
								台灣茶產業是非常龐大的產業群，生產、加工、銷售、文化到相關行業，很多上市上櫃公司也都跨足茶產業，卻沒有專業的茶葉教學單位，農委會茶業改良場繁重的業務只能提供從事茶業相關人員實作學習；近期層出不窮的食安問題，可認知台灣最欠缺並且需要「食物教育」；講茶成立「講茶學院 TeaTalk Educational Agency （TTEA）」，採用完整系統的架構，讓學員能跟著「講茶學院」的課程，從初學到專業，更輕鬆的體驗台灣茶葉的廣度和深度；更可以協助茶產業各品牌做完整的專業人員訓練，讓員工擁有全面的茶專業知識和技能，成為該公司最強力的專業人員。
							</p>
							<a href="{{ url('/login') }}" class="primary-btn text-uppercase">前往登入帳號</a>
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="{{asset('img/tea.jpg')}}" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>仔細品嘗</h6>
							<h1 class="text-uppercase">茶的韻味</h1>
							<p>
								品過美麗茶湯、輕聞茶的飽滿茶香，令你難以忘懷嗎?
							</p>
							<a href="#" class="primary-btn text-uppercase">前往填寫表單</a>
						</div>
					</div>
					<br><br>
				</div>	
			</section>
			<!-- End home-about Area -->

			<!-- Start services Area -->
			<!-- <section class="services-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content  col-lg-7">
		                    <div class="title text-center">
		                        <h1 class="mb-10">My Offered Services</h1>
		                        <p>At about this time of year, some months after New Year’s resolutions have been made and kept, or made and neglected.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-pie-chart"></span>
								<a href="#"><h4>Web Design</h4></a>
								<p>
									“It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.”
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-laptop-phone"></span>
								<a href="#"><h4>Web Development</h4></a>
								<p>
									If you are an entrepreneur, you know that your success cannot depend on the opinions of others. Like the wind, opinions.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-camera"></span>
								<a href="#"><h4>Photography</h4></a>
								<p>
									Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills.
								</p>
							</div>	
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-picture"></span>
								<a href="#"><h4>Clipping Path</h4></a>
								<p>
									Hypnosis quit smoking methods maintain caused quite a stir in the medical world over the last two decades. There is a lot of argument.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-tablet"></span>
								<a href="#"><h4>Apps Interface</h4></a>
								<p>
									Do you sometimes have the feeling that you’re running into the same obstacles over and over again? Many of my conflicts.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-rocket"></span>
								<a href="#"><h4>Graphic Design</h4></a>
								<p>
									You’ve heard the expression, “Just believe it and it will come.” Well, technically, that is true, however, ‘believing’ is not just thinking that.
								</p>
							</div>				
						</div>														
					</div>
				</div>	
			</section> -->
			<!-- End services Area -->	

			<!-- Start fact Area -->
			<!-- <section class="facts-area section-gap" id="facts-area">
				<div class="container">				
					<div class="row">
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">2536</h1>
							<p>Projects Completed</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">6784</h1>
							<p>Happy Clients</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">2239</h1>
							<p>Cups of Coffee</p>
						</div>	
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">435</h1>
							<p>Real Professionals</p>
						</div>												
					</div>
				</div>	
			</section> -->
			<!-- end fact Area -->	

			<!-- Start portfolio-area Area -->
            <!-- <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Our Latest Featured Projects</h1>
		                        <p>Who are in extremely love with eco friendly system.</p>
		                    </div>
		                </div>
		            </div>
                    
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".vector">Vector</li>
                            <li data-filter=".raster">Raster</li>
                            <li data-filter=".ui">UI/UX</li>
                            <li data-filter=".printing">Printing</li>
                        </ul>
                    </div>
                    
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p1.jpg" alt="">
	                            	</div>
									<a href="img/p1.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
								</a>                              		
                            	</div>
								<div class="p-inner">
								    <h4>2D Vinyl Design</h4>
									<div class="cat">vector</div>
								</div>					                               
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p2.jpg" alt="">
	                            	</div>
									<a href="img/p2.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
								</a>                              		
                            	</div>
								<div class="p-inner">
								    <h4>2D Vinyl Design</h4>
									<div class="cat">vector</div>
								</div>					                               
                            </div>                            
                            <div class="single-portfolio col-sm-4 all ui">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p3.jpg" alt="">
	                            	</div>
									<a href="img/p3.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a> 
	                            		
	                           	</div>
                                <div class="p-inner">
                                    <h4>Creative Poster Design</h4>
                                    <div class="cat">Agency</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all printing">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p4.jpg" alt="">
	                            	</div>
									<a href="img/p4.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>                            		
                            	</div> 
                                <div class="p-inner">
                                    <h4>Embosed Logo Design</h4>
                                    <div class="cat">Portal</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p5.jpg" alt="">
	                            	</div>
									<a href="img/p5.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>3D Helmet Design</h4>
                                    <div class="cat">vector</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p6.jpg" alt="">
	                            	</div>
									<a href="img/p6.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>2D Vinyl Design</h4>
                                    <div class="cat">raster</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section> -->
            <!-- End portfolio-area Area -->	

			<!-- Start testimonial Area -->
		    <!-- <section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Client’s Feedback About Me</h1>
		                        <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user1.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
		                            </p>
		                            <h4>Harriet Maxwell</h4>
		                            <p>CEO at Google</p>
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user2.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
		                            </p>
		                            <h4>Carolyn Craig</h4>
		                            <p>CEO at Facebook</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section> -->
		    <!-- End testimonial Area -->
		
			<!-- Start price Area -->
<!-- 			<section class="price-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Choose Your Plan</h1>
								<p>When someone does something that they know that they shouldn’t do, did they.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">01</h1>
								<h4>Economy</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">02</h1>
								<h4>Business</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£299.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">03</h1>
								<h4>Premium</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£399.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">04</h1>
								<h4>Exclusive</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£499.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>																		
					</div>
				</div>	
			</section> -->
			<!-- End price Area -->			
	
			<!-- Start recent-blog Area -->
			<section class="recent-blog-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1>擁有自己的品評單</h1>
							<p>
								記錄下你所品嘗的每一種茶類
							</p>
						</div>
					</div>
					<div class="row">	
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="{{asset('img/tea2.jpg')}}" alt="">	
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
							</div>							
							<a href="#">
								<h4>茶的口感</h4>
							</a>
							<p>
								茶入口的滑順感
							</p>
						</div>
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="{{asset('img/tea3.jpg')}}" alt="">	
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
							</div>							
							<a href="#">
								<h4>茶的香氣</h4>
							</a>
							<p>
								茶沖泡出來的香氣
							</p>
						</div>
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="{{asset('img/tea4.jpg')}}" alt="">	
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
							</div>							
							<a href="#">
								<h4>茶的味道</h4>
							</a>
							<p>
								茶回甘的滋味
							</p>
						</div>												
											
												
					</div>
				</div>	
			</section>
			<!-- end recent-blog Area -->					

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