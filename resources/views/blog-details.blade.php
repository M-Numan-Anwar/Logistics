@extends('layouts.app')

@section('content')
    <!-- ST Blog Details Area -->
<div class="blog-details-area pt-120 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-xxl-8 col-lg-8 col-md-12 col-sm-12">
				<div class="st__blog__details__all__content">
					<img src="assets/images/blog/blog-details-page.jpg" alt="">
					<div class="blog__details__meta__all">
						<div class="blog__details__meta">
							<a href="#"> <i class="bi bi-person"></i> By Admin </a>
							<a href="#"> <i class="bi bi-chat"></i> {6}Comments </a>
						</div>
						<div class="blog__details__social">
							<a href="#"><i class="bi bi-share-fill"></i></a>
						</div>
					</div>
					<h2 class="heading-one">Delivering the best web design agency</h2>
					<p class="details__desc__one">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo <br>
						pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae <br>
						odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae
					</p>					
					<p class="details__desc__two">
						Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo <br>
						pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae <br>
						interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque <br>
						vitae et nunc. Sed vitae leo vitae nisl pellentesque semper euismod justo 
					</p>
					<div class="blog__tags">
						<span>Tags:</span>
						<a href="#"> Logistics </a>
						<a href="#"> Cargo </a>
						<a href="#"> Blog </a>
					</div>
					<div class="blog__details__meta__box">
						<div class="blogdetails__meta__thumb">
							<img src="assets/images/blog/blog-details3.jpg" alt="">
						</div>
						<div class="blogdetails__meta__content">
							<h5> Kevin Martin </h5>
							<p>Lacinia amet nisi ullamcorper eu suspendisse. Mattis nisl dignissim accumsan consectetur suspendisse amet.</p>
							<div class="blogdetails__meta__social">
								<span>Share:</span>
								<a href="#"> <i class="bi bi-facebook"></i> </a>
								<a href="#"> <i class="bi bi-instagram"></i> </a>
								<a href="#"> <i class="bi bi-twitter-x"></i> </a>
								<a href="#"> <i class="bi bi-pinterest"></i> </a>
							</div>
						</div>
					</div>
					<div class="blogdetails__items">
						<div class="blogdetails__items__box">
							<a href="#"> <i class="bi bi-chevron-double-left"></i> </a>
							<h5> Cargo flow through better <br>
								supply in UK </h5>
						</div>						
						<div class="blogdetails__items__box">
							<h5> Why is supply chain visibility <br>
								so important? </h5>
							<a href="#"> <i class="bi bi-chevron-double-right"></i> </a>
						</div>
					</div>
					<div class="blogdetails__comments">
						<div class="blogdetails__title">
							<h2> Recent Comments </h2>
						</div>
						<div class="blogdetails__comment__reply d-flex">
							<div class="blogdetails__comment__reply_thumb">
								<img src="assets/images/blog/reply1.png" alt="">
							</div>
							<div class="blogdetails__comment__reply__inner d-flex">
								<div class="blogdetails__comment__reply_content">
									<h2> Saima Shirin </h2>
									<span> March 25, 2024 </span>
									<p> Perspiciatis unde omnis iste natus error sit voluptatem accusant laudantium, totam rem <br> aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae <br> dicta sunt explicabo. Nemo enim ipsam voluptatem quia </p>
								</div>
								<div class="blogdetails__reply__text">
									<a href="#"> Reply </a>
								</div>
							</div>
						</div>						
						<div class="blogdetails__comment__reply ml d-flex">
							<div class="blogdetails__comment__reply_thumb">
								<img src="assets/images/blog/reply2.png" alt="">
							</div>
							<div class="blogdetails__comment__reply__inner d-flex">
								<div class="blogdetails__comment__reply_content">
									<h2> Humaira Shirin </h2>
									<span> March 25, 2024 </span>
									<p> Perspiciatis unde omnis iste natus error sit voluptatem accusant laudantium, totam rem <br> aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae <br> dicta sunt explicabo. Nemo enim ipsam voluptatem quia </p>
								</div>
								<div class="blogdetails__reply__text">
									<a href="#"> Reply </a>
								</div>
							</div>
						</div>
					</div>
					<div class="blog__leave__comment">
						<div class="blogdetails__title">
							<h2> Leave A Comment </h2>
						</div>
						<form class="blog__comment__form" action="https://formspree.io/f/maygbqwa" method="post">
							<div class="row">
								<div class="col-lg-6 wow fadeInUp">
									<div class="st__form__box">
										<input type="text" name="name" placeholder="Name*">
									</div>
								</div>
								<div class="col-lg-6 wow fadeInUp">
									<div class="st__form__box">
										<input type="email" name="email" placeholder="Email*">
									</div>
								</div>												
								<div class="col-lg-12 wow fadeInUp">
									<div class="st__form__box">
										<textarea placeholder="Your Comments*" name="text" cols="30" rows="7"></textarea>
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
			<div class="col-xxl-4 col-lg-4 col-md-12 col-sm-12">
				<div class="blogdetails__sidebar">
					<div class="blogdetails__sidebar_search">
						<input placeholder="Search Keyword" type="text">
						<i class="bi bi-search"></i>
					</div>
					<div class="sidebar__box">
						<div class="sidebar__title">
							<h2> Latest Post </h2>
						</div>
						<div class="sidebar__blog__box d-flex">
							<div class="sidebar__blog__thumb">
								<img src="assets/images/blog/bs1.jpg" alt="">
							</div>
							<div class="sidebar__blog__content">
								<i class="bi bi-calendar-fill"></i>
								<span>Feb 25, 2024</span>
								<h5> <a href="#"> Top crypto exchange <br> influencers </a> </h5>
							</div>
						</div>						
						<div class="sidebar__blog__box d-flex">
							<div class="sidebar__blog__thumb">
								<img src="assets/images/blog/bs2.jpg" alt="">
							</div>
							<div class="sidebar__blog__content">
								<i class="bi bi-calendar-fill"></i>
								<span>Feb 25, 2024</span>
								<h5> <a href="#"> Top crypto exchange <br> influencers </a> </h5>
							</div>
						</div>						
						<div class="sidebar__blog__box d-flex">
							<div class="sidebar__blog__thumb">
								<img src="assets/images/blog/bs3.jpg" alt="">
							</div>
							<div class="sidebar__blog__content">
								<i class="bi bi-calendar-fill"></i>
								<span>Feb 25, 2024</span>
								<h5> <a href="#"> Top crypto exchange <br> influencers </a> </h5>
							</div>
						</div>
					</div>					
					<div class="sidebar__box">
						<div class="sidebar__title">
							<h2> Categories </h2>
						</div>
						<ul>
							<li> New Technologies <span>(07)</span> </li>
							<li> Construction Introductions <span>(05)</span> </li>
							<li> Financial Investment <span>(03)</span> </li>
							<li> Parallax Effects <span>(07)</span> </li>
							<li> Payment Processing <span>(08)</span> </li>
							<li> Quality Meterials <span>(04)</span> </li>
						</ul>
					</div>
					<div class="sidebar__query" style="background: url(assets/images/blog/query.jpg) no-repeat;background-position: center center;background-size: cover;">
						<div class="sidebar__query__content text-center">
							<h2>Have Any <br> Query?</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit, sed do eiusmod tempor</p>
							<a href="#"> Send Message </a>
						</div>
					</div>
					<div class="sidebar__box">
						<div class="sidebar__title">
							<h2> Tags Post </h2>
						</div>
						<div class="tagcloud">
							<a href="#"> Warehouses </a>
							<a href="#"> Transport </a>
							<a href="#"> Business </a>
							<a href="#"> Logistic </a>
							<a href="#"> Cargo </a>
							<a href="#"> Maintenance </a>
							<a href="#"> Consulting </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection