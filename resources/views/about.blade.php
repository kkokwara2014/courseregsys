
@extends('frontend.layout.main')

@section('content')
   
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>About Us</h2>
						<div class="page_link">
							<a href="{{route('index')}}">Home</a>
							<a href="{{route('about')}}">About Us</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <!--================About Area =================-->
        <section class="about_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Goals to Achieve for the leadership</h2>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        		</div>
        		<div class="row about_inner">
        			<div class="col-lg-6">
						<div class="accordion" id="accordionExample">
							<div class="card">
								<div class="card-header" id="headingOne">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Success
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Info
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Danger
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingfour">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
									Warning
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>
								<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
									</div>
								</div>
							</div>
						</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="video_area" id="video">
                            <img class="img-fluid" src="{{asset('bootstrap_assets/img/video-1.jpg')}}" alt="">
                            {{-- href="https://www.youtube.com/watch?v=VufDd-QL1c0" --}}
							<a class="popup-youtube" href="#">
								<img src="{{asset('bootstrap_assets/img/icon/video-icon-1.png')}}" alt="">
							</a>
						</div>
        			</div>
        		</div>
        		<div class="about_details">
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
        		</div>
        	</div>
        </section>
        <!--================End About Area =================-->

@endsection


    
 