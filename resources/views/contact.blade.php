@extends('layouts.app')

@section('content')
    <!-- ST FAQ Area -->
<div class="st-contact-section pt-100 pb-100">
	<div class="container">
		<div class="row align-items-center contact__bg">
			<div class="col-lg-5">
				<div class="st__contact__info">
					<div class="st__contact__title">
						<h2> Contact Informatlon </h2>
					</div>
					<div class="st__contactinfo__inner">
						<div class="st__cinfobox">
							<div class="st__cinfobox_icon">
								<i class="bi bi-geo-alt-fill"></i>
							</div>
							<div class="st__cinfobox_content">
								<h5> Address </h5>
								<span> 7515 Carriage Court, Coachella, CA, 92236 USA </span>
							</div>
						</div>
						<div class="st__cinfobox">
							<div class="st__cinfobox_icon">
								<i class="bi bi-phone-fill"></i>
							</div>
							<div class="st__cinfobox_content">
								<h5> Contact Number </h5>
								<span> (+6656) 1598596969 </span>
							</div>
						</div>
						<div class="st__cinfobox">
							<div class="st__cinfobox_icon">
								<i class="bi bi-chat-square-fill"></i>
							</div>
							<div class="st__cinfobox_content">
								<h5> Email Us </h5>
								<span> Example@gmail.com</span>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="col-lg-7">
				<div class="st__contact__right">
					<div class="st__contact__right__title">
						<h2> Get A Quote </h2>
					</div>
					<form action="https://formspree.io/f/maygbqwa" method="post">
						<div class="row">
							<div class="col-lg-6 wow fadeInUp">
								<div class="st__form__box">
									<input type="text" name="name" placeholder="Your Name">
								</div>
							</div>
							<div class="col-lg-6 wow fadeInUp">
								<div class="st__form__box">
									<input type="email" name="email" placeholder="Email Address">
								</div>
							</div>					
							<div class="col-lg-6 wow fadeInUp">
								<div class="st__form__box">
									<input type="text" name="text" placeholder="Phone Number">
								</div>
							</div>					
							<div class="col-lg-6 wow fadeInUp">
								<div class="st__form__box">
									<input type="text" name="text" placeholder="Subject">
								</div>
							</div>							
							<div class="col-lg-12 wow fadeInUp">
								<div class="st__form__box">
									<input type="text" name="text" placeholder="Your Company Name">
								</div>
							</div>							
							<div class="col-lg-12 wow fadeInUp">
								<div class="st__form__box">
									<textarea placeholder="Write Your Question Here" name="text" cols="30" rows="7"></textarea>
								</div>
							</div>					
							<div class="col-lg-12 wow fadeInUp">
								<div class="st__form__box">
									<button class="st__btn2" type="submit"> Request Quote <i class="bi bi-arrow-right"></i> </button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="st-map-area">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-lg-12">
				<div class="st__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29060.170457136694!2d90.76099906483333!3d24.432692478077946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3756918773180af5%3A0x530a9427210ef003!2sKishoreganj!5e0!3m2!1sen!2sbd!4v1710970051644!5m2!1sen!2sbd" width="400" height="745" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection