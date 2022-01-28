<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Blogs</title>
    
    <link rel="shortcut icon" href="{{ asset('images/icons/journal.png') }}" type="image/png">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/LineIcons.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
    
    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    
    
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo">
                        </a> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="{{ route('posts.create') }}">Create Post</a>
                                </li>
                            </ul> 
                        </div>
                    </nav> 
                </div>
            </div> 
        </div> 
    </header>
    
    {{-- <section id="team" class="blog-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">Our Expert Team</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div> 
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="assets/images/team/t-1.jpg" alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Celina Gomez</a></h4>
                            <span>FOUNDER</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="assets/images/team/t-2.jpg" alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Patric Green</a></h4>
                            <span>Consultant</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="assets/images/team/t-3.jpg" alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Mark Parker</a></h4>
                            <span>Business Manager</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="team-image">
                            <img src="assets/images/team/t-4.jpg" alt="Team">
                        </div>
                        <div class="team-content mt-30">
                            <h4 class="title mb-10"><a href="#">Daryl Dixon</a></h4>
                            <span>Marketing Manager</span>
                            <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section> --}}
    
    @yield('content')
        
    <!-- include success message-->
    <div class="container col-lg-6 d-flex justify-content-center">
        @include('incs.messages')
    </div>
    
    <section id="footer" class="footer-area">
        <div class="container">
            <div class="footer-widget pt-75 pb-120">
            </div> 
            <div class="footer-copyright pt-15 pb-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>Crafted by <a href="#" rel="nofollow">Bek</a></p>
                        </div> 
                    </div>
                </div> 
            </div> 
        </div> 
    </section>
    
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nav.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-number.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>