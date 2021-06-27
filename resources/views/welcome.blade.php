<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AnnDaata</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link href="asset2/css/bootstrap.css" rel="stylesheet">
    <link href="asset2/css/fontawesome-all.css" rel="stylesheet">
    <link href="asset2/css/swiper.css" rel="stylesheet">
	<link href="asset2/css/magnific-popup.css" rel="stylesheet">
	<link href="asset2/css/styles.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> --}}
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="" class="text-sm text-gray-700 underline">Log in</a>

                            <a href="" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endauth
                </div>
            @endif --}}

               <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">
            
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Kora</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand " href="index.html"><img src="asset2/images/logo3.jpeg" height="100px"  alt="alternative"></a> 

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#intro">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">Details</a>
                    </li>
                   
                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm page-scroll" href="{{ route('login') }}">Start selling</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h1 class="">Famers + Companies - Join you hands together!</h1><br>
                        <h4 class="">No Middlemen!</h4>
                        <h4 class="">No intermediary! </h4>
                        <h4 class="">No Loss!</h4>
     
                        <a class="btn-solid-lg page-scroll" href="#intro">Discover</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="asset2/images/handshake.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->




    <!-- Introduction -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <img class="img-fluid" src="asset2/images/transport.jpeg" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>AnnDaata is here to connect both "Farmers" and "Companies"</h2>
                        <p>We believe in sustainable and trustful ecommerce which offers opportunities for both Farmers and Companies. The middlemen who took all the profit and sell high are removed! You are invited to use it for your business</p>
                        <a class="btn-solid-reg" href="{{ route('registeration') }}">Sign up</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of introduction -->


    <!-- Features -->
    <div id="features" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Check out all the features</h2>
                    <p class="p-heading">The features built into AnnDaata were designed to help farmers online to present their products on right price and find more customers</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon-wrapper">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt green"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Verify your account, <br> No middlemen allowed</h4>
                            <p>Famers and Companies have to verify their idenity via aadhar card or any identity proof. So that we can confirm that you are not the middlemen or intermediary, that could take a lot of profit.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon-wrapper">
                            <div class="card-icon">
                                <span class="far fa-clipboard blue"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Product Marketing On Social Platforms</h4>
                            <p>Famers have to make an account on our portal where they market their product and help the companies and farmer to select the best for them, benefiting them both.</p>
                        
                             </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon-wrapper">
                            <div class="card-icon">
                                <span class="far fa-comments purple"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Select the best according to your will  </h4>
                            <p>Then both the parties will be able to choose the best price and product for them. This can be inter-state as well as intra-state. So no restriction on where to sell!</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->


    <!-- Details 1 -->
    
    <!-- Testimonials -->
    <div class="slider-2" id="details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">What all information you'll get</h2>
                    <p class="p-heading">You can read below a few testimonials from satisfied shop owners. Of course there are also some unhappy ones but they're not here</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Get the details about all your deals done and in pending!</p>
                                            
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">See get notification which companies or farmers want to connect with you!</p>
                                            
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">Which company provides the best deals and which farmer has how much stocks! </p>
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-text">No middlemen and intermediary in between so more profit for both the parties!</p>
                                        
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                
        
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- Newsletter -->
	<div class="form-1">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Subscribe And Follow Us</h2>
                    <p class="p-heading">Be part of the story and subscribe to the newsletter for news and updates about our latest services.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Newsletter Form -->
                    <form>
                        <div class="form-group mail">
                            <input type="email" class="form-control-input" id="nemail" required>
                            <label class="label-control" for="nemail">Email address</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Subscribe</button>
                        </div>
                        <div class="form-message">
                            <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of newsletter form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of newsletter -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About AnnDaata</h6>
                        <p class="p-small"><b>AnnDaata</b> is a online website which is there to reduce the impact of the middlemen and intermediary who dominates the society and make huge profit. </p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second center">
                      
                        <a class="navbar-brand " href="index.html"><img src="asset2/images/logo3.jpeg" height="200px"  alt="alternative"></a> 

                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">We would love to hear from you <a href=""><strong>annadaata@food.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">AnnDaata</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	

    <!-- Scripts -->
    <script src="asset2/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="asset2/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="asset2/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="asset2/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="asset2/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="asset2/js/scripts.js"></script> <!-- Custom scripts -->
      
    </body>
</html>
