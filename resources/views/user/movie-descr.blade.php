<x-guest-layout title="Movie Desription">
    <x-auth-card>

@include('layouts.menu')
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">{{$movie->movie_title}} Description</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="/">Back to Home</a></h4>
						</div>
					</div>
				</div>


				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16">
							<figure>
							<img src="/movies/{{ $movie->movie_img }}" class="card-img-to" width="300" height="200" alt="...">
							
							</figure>
							<div class="box-content">
								<h3 class="title">{{$movie->movie_title}}</h3>
								<h4> <span class="post"><span class="fa fa-clock-o"> </span>{{$movie->movie_hr}} Hr {{$movie->movie_mins}} min</span>
									<span class="post fa fa-heart text-right"></span>
								</h4>
							</div>
							<span class="fa fa-play video-icon" aria-hidden="true"></span>
						</div>
						<strong class="text-large text-bold text-white">&#8358 {{$movie->movie_price}}</strong>
						<div class="button-center text-center mt-4">
							<a href="{{route('getDetails', $movie->id)}}" class="btn watch-button">Watch now</a>
						</div>
					</div>
					<div class="text-descr">
					<p class="text-light">{{$movie->movie_descr}}</p> 
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//grids-sec1-->
	<!--grids-sec2-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Other Interesting Movies to Watch</h3>
						</div>
						<!--div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Show all</a></h4>
						</div-->
					</div>
				</div>
				<div class="owl-three owl-carousel owl-theme">
						@foreach($other_movies as $item)
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="{{ route('Descr', $item->id)}}">
								<figure>
									<img class="img-fluid" src="/movies/{{ $item->movie_img }}" alt="">
								</figure>
								<div class="box-content">
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> {{$item->movie_hr}} Hr {{$item->movie_mins}} min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="">{{$item->movie_title}} </a></h3>
						<p>{{$item->movie_descr}}</p>
						<div class="button-center text-center mt-4">
							<a href="genre.html" class="btn watch-button">Watch now</a>
						</div>
					</div>
					@endforeach
					<!---div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="{{asset('assets/images/n2.jpg')}}" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="genre.html">Mulan</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="genre.html" class="btn watch-button">Watch now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="assets/images/n3.jpg" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="genre.html">Free Guy</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="genre.html" class="btn watch-button">Watch now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="assets/images/n4.jpg" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="genre.html">My Spy</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="genre.html" class="btn watch-button">Watch now</a>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="assets/images/n5.jpg" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="genre.html">Scoob</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="genre.html" class="btn watch-button">Watch now</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="genre.html">
								<figure>
									<img class="img-fluid" src="assets/images/n6.jpg" alt="">
								</figure>
								<div class="box-content">

									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" href="genre.html">Downhill</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
						<div class="button-center text-center mt-4">
							<a href="genre.html" class="btn watch-button">Watch now</a>
						</div>
					</div-->
				</div>
			</div>

		</div>
	</section>
	<!--grids-sec2-->
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
									<a class="watch" href=""><span class="fa fa-play"
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
	</x-auth-card>
</x-guest-layout>