@extends('layouts.app')

@section('content')
    <!-- ST Blog Area -->
<div class="st-blog-area pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="st__section__title mb-50 text-center wow fadeInUp">
					<h5> Our News from Blog </h5>
					<span class="circle"></span>
					<h1>The latest News & Best Blog</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="st__blog__single__box wow fadeInUp">
					<div class="st__blog__thumb">
						<img src="assets/images/blog/b1.jpg" alt="">
					</div>
					<div class="st__blog__content">
						<div class="st__meta__top">
							<div class="st__blog__meta">
								<div class="st__blog__meta__inner d-flex align-items-center">
									<div class="st__meta__thumb">
										<img src="assets/images/blog/meta.png" alt="">
									</div>
									<div class="st__blog__meta__content">
										<span><a href="blog-details.html">By Admin</a></span>
									</div>
								</div>
							</div>
							<div class="st__blog__cmt">
								<i class="bi bi-chat"></i>
								<span>{6}Comments</span>
							</div>
						</div>
						<h2><a href="blog-details.html"> New Additions to our great Metro trucks. </a></h2>
						<a class="st_blog_btn" href="#"> Read More <i class="bi bi-arrow-up-short"></i></a>
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="st__blog__single__box wow fadeInUp">
					<div class="st__blog__content">
						<div class="st__meta__top">
							<div class="st__blog__meta">
								<div class="st__blog__meta__inner d-flex align-items-center">
									<div class="st__meta__thumb">
										<img src="assets/images/blog/meta.png" alt="">
									</div>
									<div class="st__blog__meta__content">
										<span><a href="blog-details.html">By Admin</a></span>
									</div>
								</div>
							</div>
							<div class="st__blog__cmt">
								<i class="bi bi-chat"></i>
								<span>{6}Comments</span>
							</div>
						</div>
						<h2><a href="blog-details.html"> New Additions to our great Metro trucks. </a></h2>
						<a class="st_blog_btn" href="#"> Read More <i class="bi bi-arrow-up-short"></i></a>
					</div>
					<div class="st__blog__thumb style2">
						<img src="assets/images/blog/b2.jpg" alt="">
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-6">
				<div class="st__blog__single__box wow fadeInUp">
					<div class="st__blog__thumb">
						<img src="assets/images/blog/b3.jpg" alt="">
					</div>
					<div class="st__blog__content">
						<div class="st__meta__top">
							<div class="st__blog__meta">
								<div class="st__blog__meta__inner d-flex align-items-center">
									<div class="st__meta__thumb">
										<img src="assets/images/blog/meta.png" alt="">
									</div>
									<div class="st__blog__meta__content">
										<span><a href="blog-details.html">By Admin</a></span>
									</div>
								</div>
							</div>
							<div class="st__blog__cmt">
								<i class="bi bi-chat"></i>
								<span>{6}Comments</span>
							</div>
						</div>
						<h2><a href="blog-details.html"> New Additions to our great Metro trucks. </a></h2>
						<a class="st_blog_btn" href="#"> Read More <i class="bi bi-arrow-up-short"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection