<x-guest-layout title="User Details">
    <x-auth-card>

@include('layouts.menu')
<script>
	function totalIt() {
  var input = document.getElementsByClassName("sitNo");
  var amount = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
		amount += parseFloat(input[i].value);
    }
  }
  document.getElementById("amount").value = amount.toFixed(2);
}


</script>

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
					<form id="paymentForm">
					@csrf

						<!-- Name -->
						<div>
						<x-input id="name" class="block mt-1 w-full" type="hidden" name="movie_title" value="{{$movieUpload['movie_title']}}" required autofocus />
						<x-input id="name" class="block mt-1 w-full" type="hidden" name="movie_id" value="{{$movieUpload['id']}}" required autofocus />

						 <!-----Add Movie Date and Price field once Available---->


							<x-label for="name" :value="__('Name')" />

							<x-input id="last-name" class="block mt-1 w-full" type="text" name="user_name" :value="old('name')" required autofocus />
						</div>

						<!-- Email Address -->
						<div class="mt-4">
							<x-label for="email" :value="__('Email')" />

							<x-input id="email-address" class="block mt-1 w-full" type="email" name="user_email" :value="old('email')" required />
						</div>

						<!-- Password -->
						<div class="mt-4">
							<x-label for="Phone Number" :value="__('Phone Number')" />

							<x-input id="tel" class="block mt-1 w-full" type="tel" name="user_tel" :value="old('tel')" required />
						</div>

						<!-- Confirm Password -->
						<div class="mt-4">
							
						</div>

						
					</div>
					<div class="col-6">
						<div class="row">
							<div class="col-4">
								<input type="checkbox" class="mr-2" name="R1" value="{{$movieUpload['movie_price']}}" id="r1" onclick="totalIt()" disabled>
								<input type="checkbox" class="sitNo mr-2" value="{{$movieUpload['movie_price']}}" name="R2" onclick="totalIt()" id="r2">
								<input type="checkbox" class="sitNo mr-2" value="{{$movieUpload['movie_price']}}" name="R3" onclick="totalIt()" id="r3">
								<input type="checkbox" class="sitNo mr-2" name="R4" value="{{$movieUpload['movie_price']}}" onclick="totalIt()" id="">
								<input type="checkbox" class="sitNo mr-2" name="R5" value="{{$movieUpload['movie_price']}}" onclick="totalIt()" id="">
							</div>
							<div class="col-4">
								<input type="checkbox" class="sitNo mr-2" name="R6" value="{{$movieUpload['movie_price']}}" onclick="totalIt()" id="" disabled>
								<input type="checkbox" class="sitNo mr-2" name="R7" value="{{$movieUpload['movie_price']}}" onclick="totalIt()" id="">
								<input type="checkbox" class="sitNo mr-2" name="R8" value="{{$movieUpload['movie_price']}}" onclick="totalIt()" id="">
								<input type="checkbox" class="sitNo mr-2" name="R9" value="{{$movieUpload['movie_price']}}" onclick="totalIt()" id="">
								<input type="checkbox" class="sitNo mr-2" name="10" value="{{$movieUpload['movie_price']}}" onclick="totalIt()" id="">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-4">
								<input type="checkbox" class="mr-2" name="R11" id="" disabled>
								<input type="checkbox" class="mr-2" name="R12" id="">
								<input type="checkbox" class="mr-2" name="R13" id="">
								<input type="checkbox" class="mr-2" name="R14" id="">
								<input type="checkbox" class="mr-2" name="R15" id="">
							</div>
							<div class="col-4">
								<input type="checkbox" class="mr-2" name="" id="" disabled>
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-4">
								<input type="checkbox" class="mr-2" name="" id="" disabled>
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
							</div>
							<div class="col-4">
								<input type="checkbox" class="mr-2" name="" id="" disabled>
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-4">
								<input type="checkbox" class="mr-2" name="" id="" disabled>
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
							</div>
							<div class="col-4">
								<input type="checkbox" class="mr-2" name="" id="" disabled>
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-4">
								<input type="checkbox" class="mr-2" name="" id="" disabled>
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
							</div>
							<div class="col-4">
								<input type="checkbox" class="mr-2" name="" id="" disabled>
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
								<input type="checkbox" class="mr-2" name="" id="">
							</div>
						</div>
						<label for="" class="pt-8"><strong>Total:</strong></label>
						<strong>&#8358</strong> <input type="tel" id="amount" readonly required />
						<div class="form-submit flex items-center justify-end mt-4">
							<button type="submit" class="btn btn-success ml-3 mb-5" onclick="payWithPaystack()"> Pay </button>
						</div>
					</div>
					
					
				</form>
				<script src="https://js.paystack.co/v1/inline.js"></script> 
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