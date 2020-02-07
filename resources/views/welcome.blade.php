@extends('layout')

@section('content')
Hi, I'm Resa!
@endsection('content')
<style>

@media (max-width: 600px) {
    .banner_inner {
		background-image: url('../img/about.jpg');
	}
	.banner_content h2{
		color: #fff;
	}
	.banner_content h5{
		color: #fff;
	}
	.banner_content h6{
		color: #fff;
	}
}
</style>
	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h1 class="">Theresa Obamwonyi</h1>
							<h5 class=" " style="margin-bottom: 5px;">Software developer</h5>
							<h6 class=" ">Fullstack Web Development and Database Security Management </h6>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="/contact"><span>Hire Me</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/banner/town.svg" alt="" width="100%">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-md-5" >
					<div class="about_img"  style="margin-left:20%">
						<img class="" src="img/about.jpg" width="100%"alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-md-6">
					<div class="main_title text-center">
						<h2>Get to know Me</h2>
						<p>
							I am Theresa Obamwonyi, Resa for short. I am an aspiring fullstack software developer, proficient
							in front-end languages such as HTML5, CSS, Javascript and backend languages such as PHP.
						</p>
						<p>
							I am proficient in the following Web frameworks. Vue.js, React.js, Laravel and Redux.
							I am dedicated to growth, learning and teamwork. This is reflected in my unending quest to add
							more to my knowledge repository as well as GitHub.(Winks!)
							I am open to new opportunities to build world class technological solutions, 
							freelancing and brain jostling
							tech talk sessions. Hit me up!
						</p>
						<a class="primary_btn" href="#"><span>Here's a look at my CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	
	<!--================ Start Features Area =================-->
	<section class="features_area">
		<div class="container">
			<div class="row feature_inner">
				<div class="col-lg-4 col-md-6">
					<div class="feature_item">
						<h4> Web development</h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature_item">
						<h4>Serverside Maintainance</h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature_item">
						<h4>Database Management</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->

	