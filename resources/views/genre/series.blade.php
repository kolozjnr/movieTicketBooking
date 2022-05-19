<x-guest-layout title="Family Movie">
    <x-auth-card>

	@include('layouts.menu')
	<!-- main-slider -->
	
	@include('layouts.header')
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Tv Series Movies</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="/">Back Home</a></h4>
						</div>
					</div>
				</div>
				@if($items->isEmpty())
					<marquee behavior="" direction=""><h4 class="text-muted text-center" style="color:red">{{ __('No Tv Series Movies Uploaded Yet Kindly Check Back') }}</h4></marquee>
				@endif
				<div class="w3l-populohny-grids">
				@foreach($items as $item)
					<div class="item vhny-grid">
						<div class="box16">
							<a href="{{ route('Descr', $item->id)}}">
								<figure>
									<img class="img-fluid" src="/movies/{{ $item->movie_img }}" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">{{$item->movie_title}}</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> {{$item->movie_hr}} Hr {{$item->movie_mins}} min</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
									<!--div class="about-btn">
										<form action="" method="post">
										@csrf
										<button class="btn btn-warning ml-auto">About</button>
										</form>
									</div---->
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!--//grids-sec1-->
	<!--mid-slider -->
	<section class="w3l-mid-slider position-relative">
		<div class="companies20-content">
			<div class="owl-mid owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info mid-view bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Comedy</span>
									<h3>Jumanji: The Next Level</h3>
									<p>2019 ‧ Comedy/Action ‧ 2h 3m</p>
									<a class="watch" href="genre.html"><span class="fa fa-play"
											aria-hidden="true"></span>
										Watch Trailer</a>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top1 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Adventure</span>
									<h3>Dolittle</h3>
									<p>2020 ‧ Family/Adventure ‧ 1h 41m</p>
									<a class="watch" href="genre.html"><span class="fa fa-play"
											aria-hidden="true"></span>
										Watch Trailer</a>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top2 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text">Action</span>
									<h3>Bad Boys for Life</h3>
									<p>2020 ‧ Comedy/Action ‧ 2h 4m</p>
									<a class="watch" href="genre.html"><span class="fa fa-play"
											aria-hidden="true"></span>
										Watch Trailer</a>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- //mid-slider-->
	<!--/tabs-->
	<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li>Recent Movies</li>
							<li>Popular Movies</li>
							<li>Trend Movies</li>
							<div class="clear"></div>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div class="albums-content">
								<div class="row">
									<!--/set1-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html">

													<img src="assets/images/m6.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Long Shot</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m5.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Jumanji</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m4.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Little Women</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set1-->
									<!--/set1-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m1.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Rocketman</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m2.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Doctor Sleep</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m3.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Knives Out</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set1-->
									<!--/set1-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/n1.jpg" class="img-fluid"
														alt="author image">
													<span class="fa fa-play video-icon" aria-hidden="true"></span>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">No Time to Die</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/n2.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Mulan</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/n3.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Free Guy</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set1-->
								</div>
							</div>
							<div class="albums-content">
								<div class="row">
									<!--/set1-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m1.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Rocketman</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m2.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Doctor Sleep</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m3.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Knives Out</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set1-->
									<!--/set2-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m7.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Frozen 2</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m8.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Toy Story 4</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m9.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Joker</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set2-->
								</div>
							</div>
							<div class="albums-content">
								<div class="row">
									<!--/set3-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m7.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Frozen 2</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m8.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Toy Story 4</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m9.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Joker</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set3-->
									<!--/set3-->
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m10.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">Alita</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m11.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">The Lego</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="genre.html"><img src="assets/images/m12.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="genre.html">The Hustle</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<!--//set3-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //tabs-->
	</x-auth-card>
</x-guest-layout>