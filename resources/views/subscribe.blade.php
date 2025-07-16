@extends('layouts.app')

@section('content')
    <!-- ST Subscribe Area -->
<div class="st-subscribe-area wow fadeInUp pb-100">
	<div class="container">
		<div class="row sub__bg align-items-center">
			<div class="col-lg-8">
				<div class="st__subscribe__content">
					<h2>Coverage That Protect Your World!</h2>
					<span>Not sure which policy suits you the best?</span>
					<form action="https://formspree.io/f/maygbqwa" method="post">
						<div class="st__subscribe__form">
							<input type="email" name="email" placeholder="Type Your Email">
							<button type="submit"> Subscribe </button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="st__subscribe__thumb">
					<img src="assets/images/call-do-action/call2.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection