@extends('layout.layout')

@section('title','成功送出')

@section('content')
	<!-- Start home-about Area -->
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="{{asset('img/logo1.png')}}" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h1><center>送出成功</center></h1>
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