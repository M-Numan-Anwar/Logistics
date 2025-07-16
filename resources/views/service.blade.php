@extends('layouts.app')

@section('content')
    <!-- ST Service Area -->
<div class="st-service-area pt-100 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="st__section__title mb-50 text-center wow fadeInUp">
					<h5> Types of Loglstice </h5>
					<span class="circle"></span>
					<h1>Popular Logistics Services</h1>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="st__service__box wow fadeInUp p-relative">
					<div class="st__service__thumb">
						<img src="assets/images/service/service1.jpg" alt="">
						<div class="st__service__icon">
							<img src="assets/images/service/icon1.png" alt="">
						</div>
					</div>
					<div class="st__service__content">
						<span> Tracking </span>
						<h2> <a href="service-details.html"> Transport by Road </a> </h2>
						<div class="st__service__btn">
							<a href="service-details.html"> <i class="bi bi-arrow-right"></i> </a>
						</div>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="st__service__box wow fadeInUp p-relative">
					<div class="st__service__thumb">
						<img src="assets/images/service/service2.jpg" alt="">
						<div class="st__service__icon">
							<img src="assets/images/service/icon2.png" alt="">
						</div>
					</div>
					<div class="st__service__content">
						<span> Tracking </span>
						<h2> <a href="service-details.html"> Safety Garunteed </a> </h2>
						<div class="st__service__btn">
							<a href="service-details.html"> <i class="bi bi-arrow-right"></i> </a>
						</div>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="st__service__box wow fadeInUp p-relative">
					<div class="st__service__thumb">
						<img src="assets/images/service/service3.jpg" alt="">
						<div class="st__service__icon">
							<img src="assets/images/service/icon3.png" alt="">
						</div>
					</div>
					<div class="st__service__content">
						<span> Tracking </span>
						<h2> <a href="service-details.html"> Managing logistics for </a> </h2>
						<div class="st__service__btn">
							<a href="service-details.html"> <i class="bi bi-arrow-right"></i> </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection