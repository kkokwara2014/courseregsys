{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

@extends('frontend.layout.main')

@section('content')
    

<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h3>We Ensure better Course Registration <br />for easy learning</h3>
                <p>In the history of Learning, Course registration has never been this better!</p>
            <a class="main_btn" href="{{route('register')}}">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Finance Area =================-->
<section class="finance_area">
    <div class="container">
        <div class="finance_inner row">
            <div class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <div class="media-body">
                            <h5>Science & <br />Engineering</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-earth"></i>
                        </div>
                        <div class="media-body">
                            <h5>Business <br />Administration</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-smile"></i>
                        </div>
                        <div class="media-body">
                            <h5>Architecture <br /></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-tag"></i>
                        </div>
                        <div class="media-body">
                            <h5>Medicine & <br />Surgery</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Finance Area =================-->

<!--================Courses Area =================-->
<section class="courses_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Popular Courses</h2>
            <p>There is a moment in the life when learning new things are made easy and interesting.</p>
        </div>
        <div class="row courses_inner">
            <div class="col-lg-9">
                <div class="grid_inner">
                    <div class="grid_item wd55">
                        <div class="courses_item">
                            <img src="{{asset('bootstrap_assets/img/courses/course-1.jpg')}}" alt="">
                            <div class="hover_text">
                                <a class="cat" href="#">Major</a>
                                <a href="#"><h4>Engineering Course</h4></a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item">
                            <img src="{{asset('bootstrap_assets/img/courses/course-2.jpg')}}" alt="">
                            <div class="hover_text">
                                <a class="cat" href="#">Major</a>
                                <a href="#"><h4>Business Administration Course</h4></a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd44">
                        <div class="courses_item">
                            <img src="{{asset('bootstrap_assets/img/courses/course-4.jpg')}}" alt="">
                            <div class="hover_text">
                                <a class="cat" href="#">Major</a>
                                <a href="#"><h4>Architectural Courses</h4></a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid_item wd55">
                        <div class="courses_item">
                            <img src="{{asset('bootstrap_assets/img/courses/course-5.jpg')}}" alt="">
                            <div class="hover_text">
                                <a class="cat" href="#">Major</a>
                                <a href="#"><h4>Medical Courses</h4></a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                                    <li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="course_item">
                    <img src="{{asset('bootstrap_assets/img/courses/course-3.jpg')}}" alt="">
                    <div class="hover_text">
                        <a class="cat" href="#">Major</a>
                        <a href="#"><h4>Other Courses</h4></a>
                        <ul class="list">
                            <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                            <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                            <li><a href="#"><i class="lnr lnr-user"></i> T. Robert</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Courses Area =================-->

<!--================Team Area =================-->
<section class="team_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Meet Our Lecturers</h2>
            <p>Our well mannered, qualified and professional Lecturer are always available to help out in teaching.</p>
        </div>
        <div class="row team_inner">
            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="rounded-circle" src="{{asset('bootstrap_assets/img/team/team-1.jpg')}}" alt="">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            {{-- <a href="#"><i class="fa fa-linkedin"></i></a> --}}
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Ethel Davis</h4>
                        <p>Managing Director (Sales)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="rounded-circle" src="{{asset('bootstrap_assets/img/team/team-2.jpg')}}" alt="">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            {{-- <a href="#"><i class="fa fa-linkedin"></i></a> --}}
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Ethel Davis</h4>
                        <p>Managing Director (Sales)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="rounded-circle" src="{{asset('bootstrap_assets/img/team/team-3.jpg')}}" alt="">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            {{-- <a href="#"><i class="fa fa-linkedin"></i></a> --}}
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Ethel Davis</h4>
                        <p>Managing Director (Sales)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img class="rounded-circle" src="{{asset('bootstrap_assets/img/team/team-4.jpg')}}" alt="">
                        <div class="hover">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            {{-- <a href="#"><i class="fa fa-linkedin"></i></a> --}}
                        </div>
                    </div>
                    <div class="team_name">
                        <h4>Ethel Davis</h4>
                        <p>Managing Director (Sales)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Team Area =================-->


@endsection
 