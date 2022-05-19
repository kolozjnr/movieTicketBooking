<x-guest-layout title="User Details">
    <x-auth-card>

@include('layouts.menu')
<section class="w3l-grids bg-light datainfo pt-20">
	<div class="container">
		<div class="col-12">
			<div class="row pt-20">
				<div class="col-6">
				<x-slot name="logo">
					<a href="/">
						<x-application-logo class="w-20 h-20 fill-current text-gray-500" />
					</a>
				</x-slot>
						
					<!-- Validation Errors -->
					<x-auth-validation-errors class="mb-4" :errors="$errors" />
					<h5 class="userdetails">Kindly Fill this form and click on pay to reserve a {{$movieUpload['movie_title']}} space</h5>
					<form method="POST" action="{{ route('register') }}">
					@csrf

						<!-- Name -->
						<div>
							<x-label for="name" :value="__('Name')" />

							<x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
						</div>

						<!-- Email Address -->
						<div class="mt-4">
							<x-label for="email" :value="__('Email')" />

							<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
						</div>

						<!-- Password -->
						<div class="mt-4">
							<x-label for="Phone Number" :value="__('Phone Number')" />

							<x-input id="tel" class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')" required />
						</div>

						<!-- Confirm Password -->
						<div class="mt-4">
							
						</div>

						<div class="flex items-center justify-end mt-4 mb-5">
							
							<x-button class="ml-4">
								{{ __('Pay') }}
							</x-button>
						</div>
					</div>
					<div class="col-6">
						<div class="row">
							<div class="col-6">
								<input type="checkbox" name="" id="">
								<input type="checkbox" name="" id="">
								<input type="checkbox" name="" id="">
								<input type="checkbox" name="" id="">
								<input type="checkbox" name="" id="">
								<input type="checkbox" name="" id="">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
	
	<!--//grids-sec1-->
	<!--grids-sec2-->
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
	</x-auth-card>
</x-guest-layout>