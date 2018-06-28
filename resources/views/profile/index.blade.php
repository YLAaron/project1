@extends('layout.layout')

@section('title','個人檔案')

@section('content')
	<!-- Start home-about Area -->
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="{{asset('img/logo1.png')}}" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<p>姓名 : xxx</p>
							<p>年齡 : 21</p>
							<p>性別 : 男</p>
							<p>興趣 : 打籃球</p>
						</div>
					</div>
					<br><br>
				</div>	
			</section>
@endsection

@section('css')
<link rel="stylesheet" href="css/main.css">
@endsection

@section('js')
@endsection