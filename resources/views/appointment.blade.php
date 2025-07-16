@extends('layouts.app')

@section('content')
    <!-- ST Appointment Area -->
<div class="st-appointment-area pt-100 p-relative">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="st__contact__inner">
					<div class="st__contact__position">
						<div class="st__section__title mb-50 wow fadeInUp">
							<h5 class="text-white"> Booking Appointment </h5>
							<h1 class="text-white">Book Transport & Logistics</h1>
						</div>
						<form action="https://formspree.io/f/maygbqwa" method="post">
							<div class="row">
								<div class="col-lg-6 wow fadeInUp">
									<div class="st__form__box p-relative">
										<input type="text" name="name" placeholder="Full Name*">
										<i class="bi bi-person-fill"></i>
									</div>
								</div>
								<div class="col-lg-6 wow fadeInUp">
									<div class="st__form__box p-relative">
										<input type="email" name="email" placeholder="Email Here*">
										<i class="bi bi-envelope-open"></i>
									</div>
								</div>					
								<div class="col-lg-6 wow fadeInUp">
									<div class="st__form__box p-relative">
										<input type="text" name="text" placeholder="Weight. Kg*">
										<i class="bi bi-bag"></i>
									</div>
								</div>					
								<div class="col-lg-6 wow fadeInUp">
									<div class="st__form__box p-relative">
										<input type="text" name="text" placeholder="Distance. km*">
										<i class="bi bi-geo-alt-fill"></i>
									</div>
								</div>					
								<div class="col-lg-12 wow fadeInUp">
									<div class="st__form__box p-relative">
										<select>
											<option value="1">Select Freight</option>
											<option value="2">Air Freight</option>
											<option value="3">Sea Freight</option>
											<option value="4">Road Freight</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 wow fadeInUp mt-50">
									<div class="st__form__box">
										<button class="st__btn" type="submit"> Request Quote <i class="bi bi-arrow-right"></i> </button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
	<div class="st__appointment__bg wow fadeInUp">
		<img class="a__bg" src="assets/images/appointment/bg.jpg" alt="">
	</div>
	<div class="st__appointment__shape1 wow fadeInUp">
		<img src="assets/images/appointment/shape.png" alt="">
	</div>
	<div class="st__appointment__video wow fadeInUp">
		<a class="video-vemo-icon st__video venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg">
			<i class="bi bi-play"></i>
		</a>
	</div>
</div>
@endsection