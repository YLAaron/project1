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
	<title>講茶 | 商業版品評單</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

	<!-- 整個layout的CSS -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/layout/bootstrap.css">
	<link rel="stylesheet" href="css/layout/magnific-popup.css">
	<link rel="stylesheet" href="css/layout/jquery-ui.css">				
	<link rel="stylesheet" href="css/layout/nice-select.css">							
	<link rel="stylesheet" href="css/layout/animate.min.css">
	<link rel="stylesheet" href="css/layout/owl.carousel.css">				
	<link rel="stylesheet" href="css/layout/main.css">

	<!-- 表單input的CSS -->
	<link rel="stylesheet" href="css/form/form.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css"> -->

</head>
<body>	
	<!-- navbar -->
	<header id="header">
		<div class="container main-menu">
		    <div class="row align-items-center  justify-content-between d-flex">
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
			              <li><a href="{{ url('form_business/vertification') }}">商業版</a></li>
			            </ul>
			          </li>
			          <li><a href="{{ url('/login') }}">會員登入</a></li>
			        </ul>
			    </nav><!-- #nav-menu-container -->		    		
		    </div>
		</div>
	</header>
	<!-- navbar結束 -->

	<!-- 表單 -->
	<form>
		<!-- 表單第一部分 -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left" style="margin-top: 20%;">
							<h3>第一部分</h3><br>
							<div class="wrap-input100 validate-input m-b-26" data-validate="未輸入品茶師">
								<span class="label-input100">品茶師</span>
									<input class="input100" type="text" name="username" placeholder="請輸入品茶師">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 validate-input m-b-26" data-validate="未選擇品茶日期">
								<span class="label-input100">品茶日期</span>
									<input class="input100 example" type="text" name="username" placeholder="請選擇品茶日期">
								<span class="focus-input100"></span>
							</div>
							<div class=" validate-input m-b-26" data-validate="未輸入茶品名稱">
								<span class="label-input100" style="margin-bottom: 10px;">茶葉品種</span>
								<br>
								<select class="selectpicker show-menu-arrow" id="sel1">
									<option value="" selected disabled>請選擇
									<span class="caret"></span>
									</option>
						        	<option>紅茶</option>
						        	<option>綠茶</option>
						        	<option>烏龍茶</option>
						        	<option>黃茶</option>
						        	<option>白茶</option>
						        	<option>黑茶</option>
						    	</select>
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 validate-input m-b-26" data-validate="未輸入茶品名稱">
								<span class="label-input100">茶品名稱</span>
									<input class="input100" type="text" name="username" placeholder="請輸入茶品名稱">
								<span class="focus-input100"></span>
							</div>
						</div>
					</div>
				</div>					
			</section>
		<!-- 表單第一部分結束 -->

		<!-- 表單第二部分 -->
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-5 col-md-6 home-about-right">
							<h3>第二部分</h3><br>
							<div class=" validate-input m-b-26" data-validate="未輸入茶品名稱">
								<span class="label-input100" style="margin-bottom: 10px;">季節</span>
								<br>
								<select class="selectpicker show-menu-arrow" id="sel1">
									<option value="" selected disabled>請選擇
									<span class="caret"></span>
									</option>
						        	<option>春天</option>
						        	<option>夏天</option>
						        	<option>秋天</option>
						        	<option>冬天</option>
						    	</select>
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 validate-input m-b-26" data-validate="未輸入茶品名稱">
							<span class="label-input100">產區</span>
								<input class="input100" type="text" name="username" placeholder="請輸入產區">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="未選擇品茶日期">
							<span class="label-input100">年份</span>
								<input class="input100 example" type="text" name="username" placeholder="請選擇年份">
							<span class="focus-input100"></span>
						</div>
						<div class="validate-input m-b-26" data-validate="未選擇品茶日期">
							<span class="label-input100">外型</span>
							<div style="width: 100%; margin-left: 8%; margin-top: 4%;">
								<div class="row checkbox-option">
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">條形
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">球形
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">針形
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">花朵形
									</label>
								</div><br>
								<div class="row checkbox-option">
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">捲曲
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">劍片
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">原葉
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">粉碎
									</label>
								</div>
							</div>
							<span class="focus-input100"></span>
						</div>
						</div>
					</div>
					<br><br>
				</div>	
			</section>
			<!-- 第二部分結束 -->

			<!-- 第三部分 -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left" style="margin-top: 20%;">
							<h3>第三部分</h3><br>
							<div class="validate-input m-b-26" data-validate="未選擇品茶日期">
							<span class="label-input100">香氣</span>
							<div style="width: 100%; margin-left: 8%; margin-top: 4%; color: #808080;">
								<div class="row checkbox-option">
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">豆香
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">海苔
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">薄荷
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">花香
									</label>
								</div><br>
								<div class="row checkbox-option">
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">蘭花
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">桂花
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">玫瑰
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">瓜類
									</label>
								</div><br>
								<div class="row checkbox-option">
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">柑橘
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">梅子
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">桃子
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">桂圓
									</label>
								</div><br>
								<div class="row checkbox-option">
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">甘蔗
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">栗子
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">蕃薯
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">堅果
									</label>
								</div><br>
								<div class="row checkbox-option">
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">麥芽
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">竹片
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">泥土
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">火香
									</label>
								</div><br>
								<div class="row checkbox-option">
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">奶香
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">蜜香
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">糖香
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">炭香
									</label>
								</div><br>
								<div class="row checkbox-option">
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">焦香
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">青草香
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">青澀果香
									</label>
								</div><br>
									<div class="row checkbox-option">
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">紅色莓果
									</label>
									<label class="checkbox-inline" style="margin-right: 5%;">
									    <input type="checkbox" value="">成熟果香
									</label>
								</div>
							</div>
							<span class="focus-input100"></span>
						</div>
						</div>
					</div>
				</div>					
			</section>
			<!-- 第三部分結束 -->

			<!-- 表單第四部分 -->
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-5 col-md-6 home-about-right">
							<h3>第四部分</h3><br>
							<div class="validate-input m-b-26" data-validate="未選擇品茶日期">
							<span class="label-input100">滋味</span>
							<div style="width: 100%; margin-left: 8%; margin-top: 5%; color: #808080;">
								<div class="row checkbox-option">
									<span class="tatse-title" style="margin-right: 5%;">酸</span>
									<br>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">無</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中高</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">高</label>
									</div>
								</div><br>
								<div class="row checkbox-option">
									<span class="tatse-title" style="margin-right: 5%;">甜</span>
									<br>
									<div class="radio-inline" style="margin-right: 5%;"v>
									  <label><input type="radio" name="optradio">無</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中高</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">高</label>
									</div>
								</div><br>
								<div class="row checkbox-option">
									<span class="tatse-title" style="margin-right: 5%;">苦</span>
									<br>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">無</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中高</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">高</label>
									</div>
								</div><br>
								<div class="row checkbox-option">
									<span class="tatse-title" style="margin-right: 5%;">鹹</span>
									<br>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">無</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中高</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">高</label>
									</div>
								</div><br>
								<div class="row checkbox-option">
									<span class="tatse-title" style="margin-right: 5%;">鮮</span>
									<br>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">無</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中高</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">高</label>
									</div>
								</div><br>
								<div class="row checkbox-option">
									<span class="tatse-title"  style="margin-right: 5%;">澀</span>
									<br>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">無</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中高</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">高</label>
									</div>
								</div><br>
								<div class="row checkbox-option">
									<span class="tatse-title" style="margin-right: 5%;">辣</span>
									<br>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">無</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">微中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">中高</label>
									</div>
									<div class="radio-inline" style="margin-right: 5%;">
									  <label><input type="radio" name="optradio">高</label>
									</div>
								</div>
							</div>
							<span class="focus-input100"></span>
						</div>
						</div>
						</div>
					</div>
					<br><br>
				</div>	
			</section>
			<!-- 第四部分結束 -->

			<!-- 第五部分 -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left" style="margin-top: 20%;">
							<h3>第五部分</h3><br>
							<div class="validate-input m-b-26" data-validate="未選擇品茶日期">
								<span class="label-input100">口感</span>
								<div style="width: 100%; margin-left: 10%; margin-top: 4%;">
									<div class="row checkbox-option">
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">柔軟
										</label>
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">細緻
										</label>
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">飽滿
										</label>
									</div><br>
									<div class="row checkbox-option">
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">滑順
										</label>
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">綿密
										</label>
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">厚實
										</label>
									</div><br>
									<div class="row checkbox-option">
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">輕薄
										</label>
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">硬感
										</label>
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">空洞
										</label>
									</div><br>
									<div class="row checkbox-option">
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">水感
										</label>
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">粗感
										</label>
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">重量感
										</label>
										<label class="checkbox-inline" style="margin-right: 5%;">
										    <input type="checkbox" value="">刮舌感
										</label>
									</div>
								</div>
								<span class="focus-input100"></span>
							</div>
						</div>
					</div>
				</div>					
			</section>
			<!-- 第五部分結束 -->
		</form>
		<div style="background-color: #f9f9ff;">
			<button class="btn btn-primary" type="submit"  style="margin-left: 43%; margin-top: 10%; margin-bottom: 20%;" onclick="window.location.href='/form_successful'">完成</button>
		</div>
			
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

			<!-- pickadate.js v3.5.6 -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/classic.css" rel="stylesheet" />
			<link href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/themes/classic.date.css" rel="stylesheet" />
			<link href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/themes/classic.time.css" rel="stylesheet" />
			<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.date.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.time.js"></script>
			<script>
				$( ".example" ).pickadate();
			</script>

			<!-- Latest compiled and minified JavaScript -->
<!-- 	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script> -->

	<!-- (Optional) Latest compiled and minified JavaScript translation files -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script> -->
		</body>
	</html>