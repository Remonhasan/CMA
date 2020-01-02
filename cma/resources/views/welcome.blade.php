<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from inovatik.com/argo-training-course-landing-page/04-background-slider/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2019 19:50:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Website Title -->
    <title>CMA</title>
    
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Training course HTML landing page template built with Bootstrap featuring countdown timer and 3 registration form versions.">
    <meta name="keywords" content="training, course, online, tutorial, learn, company, instructor, coaching, startup, school, registration, contact form, html template, landing page, bootstrap">
    
    <!-- Styles -->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,500,700" rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/material-design-iconic-font.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    
    <!-- Favicon  -->
    <link rel="icon" href="{{asset('frontend/images/favicon.png')}}">
    
 
    
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
    
  


    
    
    <!-- NAVIGATION -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="header.html"><img src="{{asset('frontend/images/uap.png')}}" alt="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="page-scroll" href="#header">HOME</a></li>
                        <li><a class="page-scroll" href="#instructors">REGISTERED STUDENTS</a></li>
                        <li><a class="page-scroll" href="#footer">CONTACT</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div> <!-- end of navigation -->
    

    <!--- HEADER -->
    <header id="header" class="header">
        <div class="flex-container-wrapper"> <!-- IE fix for vertical alignment in flex box -->
            <div class="header-content">
            
                <!-- Swiper -->
                <div class="swiper-container-header">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide first">
                            <div class="slider-background">
                            </div>
                        </div>
                        <div class="swiper-slide second">
                            <div class="slider-background">
                            </div>
                        </div>
                        <div class="swiper-slide third">
                            <div class="slider-background">
                            </div>
                        </div>
                    </div>
                </div> <!-- end of swiper container header -->
                
                <div class="content-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="header-content-wrapper">
                                 @include('layouts.partial.msg')
                                <div class="col-md-6">
                                    <h1>Course Registration</h1>
                                    <p>Complete your course registration!</p>
                                    
                                </div>
                                <div class="col-md-6">
                                    <form id="RegistrationForm" data-toggle="validator"  method="post" action="{{route('registration.reserve')}}">
                                        @csrf
                                         <p><strong>Course Name *</strong></p>
                                        <div class="form-group">
                                            <input type="text" class="form-control-input" name="course_name" id="name" placeholder="enter course name with course code" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <p><strong>Name *</strong></p>
                                        <div class="form-group">
                                            <input type="text" class="form-control-input" name="name" id="name" placeholder="Name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <p><strong>Registration ID *</strong></p>
                                        <div class="form-group">
                                            <input type="text" class="form-control-input" name="registration_id" id="lastname" placeholder="registration id" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <p><strong>Instructor *</strong></p>
                                        <div class="form-group">
                                            <input type="text" class="form-control-input" name="instructor" id="phone" placeholder="instructor name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                        <p><strong>Semester *</strong></p>
                                        <div class="form-group">
                                            <input type="text" class="form-control-input" name="semester" id="email" placeholder="semester" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <p><strong>Section *</strong></p>
                                        <div class="form-group">
                                            <input type="text" class="form-control-input" name="section" id="email" placeholder="section" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                   <button type="submit" class="form-control-submit-button">REGISTER NOW</button>
                                        <div class="form-message">
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        </div>
                                    </form>
                                </div> <!-- end of col-md-6 -->
                            </div> <!-- end of header-content-wrapper -->

                            
                        </div>
                    </div>
                </div>
                            
            </div> <!-- end of header-content -->
        </div> <!-- end of IE vertical alignment fix -->
    </header> <!-- end of header -->
    

  

    
    
   
    
    
    
    
    
   
    
    
   
    
    
   
    
    <!-- Registered Students-->
    <div id="instructors" class="instructors">
        <div class="container text-center">
            <h2 class="text-center">Registered Students</h2>
            <img class="decorative-line" src="{{asset('frontend/images/decorative-line.svg')}}" alt="decorative line">
            <div class="row">
                @foreach($students as $student)
                <div class="instructor-pane">
                    <a class="popup-with-move-anim" href="#instructor-1">
                        <div class="instructor-image">
                            
                            <img class="img-responsive img-rounded" src="{{ asset('uploads/student/'.$student->image) }}" alt="instructor">
                            <div class="hover-overlay">
                                
                            </div>
                            
                        </div>
                    </a>
                    <div class="instructor-info text-center">
                        <a class="popup-with-move-anim" href="#instructor-1">
                            <h5><b>Course : </b>{{ $student->course->name}}</h5>
                            <p><b>Name : </b> {{ $student->name }}</p>
                            <p><b>ID : </b> {{ $student->registration_id }}</p>
                            <p><b>Instructor : </b> {{ $student->instructor }}</p>
                            <p><b>Semester : </b> {{ $student->semester }}</p>
                            <p><b>Section : </b> {{ $student->section }}</p>
                        </a>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of Registered Students -->
    
    

    

    <!-- STATISTICS -->
    <div class="statistics">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="number-container">
                    <p><span class="counter">750</span></p>
                    <p class="big-numbers-heading">Registered Students</p>
                    </div>
                    <div class="number-container">
                    <p><span class="counter">480</span></p>
                    <p class="big-numbers-heading">Delivered Projects</p>
                    </div>
                    <div class="number-container">
                    <p><span class="counter">642</span></p>
                    <p class="big-numbers-heading">Online Learning Course</p>
                    </div>
                    <div class="number-container">
                    <p><span class="counter">120</span></p>
                    <p class="big-numbers-heading">Staff Members</p>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of statistics -->

    
    
    
    
    <!-- FOOTER -->
    <div id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-pane">
                        <h4>Contact Details</h4>
                        <div class="footer-details">
                            <p>University Of Asia Pacific</p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> 74/A , Greed Road , Dhaka - 1205 , Bangladesh</p>
                            <p><i class="fa fa-phone" aria-hidden="true"><a class="phone-number" href="tel:003024630820">+30 2463 0820</a></i>&nbsp;&nbsp;<i class="fa fa-mobile" aria-hidden="true"><a class="phone-number" href="tel:003071630231">+30 7163 0231</a></i>
                            <i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:contact@argo.com">contact@uap-bd.edu</a></i>&nbsp;&nbsp;<i class="fa fa-chrome" aria-hidden="true"><a href="#your-link">www.uap-bd.com</a></i></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-pane">
                        <h4>Social Networks</h4>
                        <!-- Social Icons Container -->
                        <div class="social-icons-container">
                            <span class="fa-stack fa-lg">
                                <a href="#your-link-here">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </a>
                            </span>
                            <span class="fa-stack fa-lg">
                                <a href="#your-link-here">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </a>
                            </span>
                            <span class="fa-stack fa-lg">
                                <a href="#your-link-here">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                                </a>
                            </span>
                            <span class="fa-stack fa-lg">
                                <a href="#your-link-here">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </a>
                            </span>
                            <span class="fa-stack fa-lg">
                                <a href="#your-link-here">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </a>
                            </span>
                            <span class="fa-stack fa-lg">
                                <a href="#your-link-here">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                                </a>
                            </span>
                        </div> <!-- end of social icons container -->
                        <h4>Official Partners</h4>
                        <p>Delivery Services: <a>www.fastcompany.com</a> <br> Music Media Streaming: <a>www.musicstream.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-pane">
                        <!-- Contact Form -->
                        <form id="ContactForm" data-toggle="validator">
                            <div class="form-group first">
                                <input type="text" class="form-control-input" id="cname" placeholder="Name" required>
                            </div>
                            <div class="form-group second">
                                <input type="email" class="form-control-input" id="cemail" placeholder="Email" required>
                            </div>
                            <div class="form-group third">
                                <textarea class="form-control-textarea" id="cmessage" placeholder="Write your message here" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="form-control-submit-button">SUBMIT</button>
                            <div class="form-message">
                                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    
    
    <!-- COPYRIGHT -->
    <div class="copyright">
        <div class="container text-center">
            <span>Copyright © CMS by</span> <a class="inverse" href="http://www.inovatik.com/">Remon Hasan</a>
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
            
    
    <!-- SCRIPTS -->
    <script src="{{asset('frontend/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script> <!-- jQuery v2.2.4 - necessary for Bootstrap's JavaScript plugins -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}" type="text/javascript"></script> <!-- Bootstrap v3.3.7 -->
    <script src="{{asset('frontend/js/jquery.easing.min.js')}}" type="text/javascript"></script> <!-- jQuery Easing v1.3 for smooth scrolling between anchors -->
    <!-- The Final Countdown v2.2.0 plugin for jQuery -->
    <script src="{{asset('frontend/js/swiper.min.js')}}" type="text/javascript"></script> <!-- Swiper v3.4.2 for image gallery swiper -->
    <script src="{{asset('frontend/js/jquery.magnific-popup.js')}}" type="text/javascript"></script> <!-- Magnific Popup v1.1.0 for lightboxes -->
    <script src="{{asset('frontend/js/waypoints.min.js')}}" type="text/javascript"></script> <!-- jQuery Waypoints v2.0.3 required by Counter-Up -->
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}" type="text/javascript"></script> <!-- Counter-Up v1.0 for statistics -->
    <script src="{{asset('frontend/js/validator.min.js')}}" type="text/javascript"></script> <!--  Validator.js v0.11.8 Bootstrap plugin that validates the registration form -->
    <script src="{{asset('frontend/js/scripts.js')}}" type="text/javascript"></script> <!-- Custom scripts -->
    
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> <
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
       <script>
        toastr.error('{{ $error }}');
       </script>
    @endforeach
@endif
</body>

<!-- Mirrored from inovatik.com/argo-training-course-landing-page/04-background-slider/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2019 19:50:22 GMT -->
</html>