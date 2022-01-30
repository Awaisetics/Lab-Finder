<!-- Website Home Page -->

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include('layouts.partials.meta')
    <title>Homepage</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
    @include('layouts.partials.styles')
</head>

<body>

    <div class="text-center mb-0" style="background-color: #410c91;">
        <p class="text-white text-lighten-5 py-1">Need A Covid Test ? <button class=" ml-2 btn btn-warning btn-sm">Take It Now</button></p>
    </div>

    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-dark mt-n1" style="background-color: white;">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile-3">
                    <ul class="nav navbar-nav left-menu mr-auto float-left">
                        <li class="nav-item mobile-menu d-lg-none mr-auto">
                            <a class="nav-link nav-menu-main hidden-xs menu-toggle is-active" href="javascript:void(0);">
                                <i class="ficon bx bx-menu"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link navbar-brand" href="javascript:void(0);">
                                <span>
                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 458.46 85.94" class=" uk-svg" width="107" height="20">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #523193;
                                                }
                                            </style>
                                        </defs>
                                        <path id="Path_4806" data-name="Path 4806" class="cls-1" d="M13.76,10.81h15a2.05,2.05,0,0,1,2,2.06V54.59a5.11,5.11,0,0,1-.27,2.09,4.88,4.88,0,0,1,2.08-.27h23a2.05,2.05,0,0,1,2.06,2.05V69.22a2.05,2.05,0,0,1-2.06,2H13.76a2.05,2.05,0,0,1-2.06-2V12.87A2.06,2.06,0,0,1,13.76,10.81Z"></path>
                                        <path id="Path_4807" data-name="Path 4807" class="cls-1" d="M92.66,69.1a7.27,7.27,0,0,1-.27-2.45,16.7,16.7,0,0,0-1.64,1.27,30.89,30.89,0,0,1-3.84,2.8,1.87,1.87,0,0,1-.31.17,19.17,19.17,0,0,1-8.17,1.74c-10.88,0-16.32-4.44-16.32-13.41,0-4.81,1.54-8.43,4.44-10.61a15.38,15.38,0,0,1,5.35-2.44,99.13,99.13,0,0,1,11.6-1.92C87.13,43.9,90.3,43,91.3,42a1.94,1.94,0,0,0,.64-1.63c0-2.81-2.09-4.26-5.81-4.26-3.57,0-5.21.86-6,3.51a2,2,0,0,1-1.91,1.48h-12a2.07,2.07,0,0,1-2-2.45,12.92,12.92,0,0,1,3.17-6.53c3.53-4,11.6-6.62,20.3-6.62,9.15,0,15.95,2.81,18.76,7.8a16.52,16.52,0,0,1,1.9,7.79V64.83a8.57,8.57,0,0,0,.42,3.67,2.06,2.06,0,0,1-1.92,2.76H94.76a2,2,0,0,1-2-1.71ZM91.58,52.51a5,5,0,0,1,.18-1.72l-6.53,1.36c-4.62.73-6.25,2.09-6.25,5.08a4.73,4.73,0,0,0,4.8,4.62,8.3,8.3,0,0,0,6.73-3.31,2.87,2.87,0,0,0,.28-.48,9.83,9.83,0,0,0,.79-4Z"></path>
                                        <path id="Path_4808" data-name="Path 4808" class="cls-1" d="M117,10.81h13.12a2,2,0,0,1,2.05,2.06v8.64a68,68,0,0,1-.45,9.88l.27.09c4.36-4.53,7.16-5.89,12.33-5.89,11.69,0,19.31,9.24,19.31,23.75,0,14-7.71,23.2-19.41,23.2-5.71,0-8.7-1.54-13.68-6.62l-.18.1a10.87,10.87,0,0,1,.36,2.9v.3a2.05,2.05,0,0,1-2.06,2H117a2.05,2.05,0,0,1-2-2V12.87A2.05,2.05,0,0,1,117,10.81Zm14.9,38.44c0,6.43,2.81,10.42,7.25,10.42s7-3.63,7-10.33S143.61,39,139.17,39s-7.25,3.8-7.25,10.24Z"></path>
                                        <path id="Path_4809" data-name="Path 4809" class="cls-1" d="M171.24,10.81h42.94a2.05,2.05,0,0,1,2,2.06V23.08a2,2,0,0,1-2,2.05H190.4a5.74,5.74,0,0,1-2.18-.27,3.86,3.86,0,0,1,.37,2.09v6.61a3.64,3.64,0,0,1-.37,2,8.43,8.43,0,0,1,2.18-.19H210a2.05,2.05,0,0,1,2.05,2.06V47.55A2.05,2.05,0,0,1,210,49.61H190.22a8.43,8.43,0,0,1-2.18-.19,4.7,4.7,0,0,1,.28,2v17.8a2.05,2.05,0,0,1-2.06,2h-15a2.05,2.05,0,0,1-2.05-2V12.87A2.05,2.05,0,0,1,171.24,10.81Z"></path>
                                        <path id="Path_4810" data-name="Path 4810" class="cls-1" d="M222.11,10.81h13.11a2.06,2.06,0,0,1,2.06,2.06v7.58a2.06,2.06,0,0,1-2.06,2.06H222.11a2.06,2.06,0,0,1-2.06-2.06V12.87A2.06,2.06,0,0,1,222.11,10.81Zm0,16.59h13.11a2.05,2.05,0,0,1,2.06,2.05V69.22a2.05,2.05,0,0,1-2.06,2H222.11a2.05,2.05,0,0,1-2.06-2V29.45A2.05,2.05,0,0,1,222.11,27.4Z"></path>
                                        <path id="Path_4811" data-name="Path 4811" class="cls-1" d="M245.86,27.4h11.66a2.06,2.06,0,0,1,2.06,2.06V30a12,12,0,0,1-.45,3.26l.27.18C262.75,28,266.83,26,273.54,26c11.6,0,17.68,6.16,17.68,18V69.22a2.05,2.05,0,0,1-2.06,2H276a2.05,2.05,0,0,1-2.05-2V48c0-5.44-2-8.07-6.16-8.07-4,0-6.8,3.26-6.8,8.07V69.22a2.05,2.05,0,0,1-2.06,2h-13.1a2.05,2.05,0,0,1-2.06-2V29.46A2.05,2.05,0,0,1,245.86,27.4Z"></path>
                                        <path id="Path_4812" data-name="Path 4812" class="cls-1" d="M328.93,65.92c-5.07,5.26-7.7,6.53-13.59,6.53-11.79,0-19.41-9.06-19.41-23,0-14.42,7.53-23.75,19.13-23.75,5.26,0,7.44,1.08,12.51,5.8l.27-.09a81.78,81.78,0,0,1-.45-9.52v-9a2.05,2.05,0,0,1,2.05-2.06h13a2.05,2.05,0,0,1,2,2.06V69.22a2.05,2.05,0,0,1-2,2H330.81a2.05,2.05,0,0,1-2.06-2v-.31a7.71,7.71,0,0,1,.46-2.81ZM313.34,49.15c0,6.89,2.36,10.53,7.07,10.53,4.44,0,7.25-4,7.25-10.34s-2.72-10.42-7.25-10.42-7.07,3.89-7.07,10.23Z"></path>
                                        <path id="Path_4813" data-name="Path 4813" class="cls-1" d="M395.22,58.22a2.06,2.06,0,0,1,1.84,3c-4.18,8.24-11.11,11.6-23.16,11.6-7.52,0-14.41-2.36-18.31-6.44s-6.07-10.14-6.07-16.85c0-14.42,9.61-23.84,24.38-23.84,9.7,0,18,4.26,21.94,11.42a29.92,29.92,0,0,1,3.35,14.41v1.64H368.81a2.08,2.08,0,0,0-2,2.43c.9,4.58,3.54,6.54,8.46,6.54a6.63,6.63,0,0,0,5.26-2,10,10,0,0,0,1.21-1.22,2,2,0,0,1,1.54-.68ZM379.89,44.35h.34a2,2,0,0,0,1.94-2.55Q380.54,36,374.54,36a7.52,7.52,0,0,0-7.72,5.61,2.07,2.07,0,0,0,1.91,2.72h11.16Z"></path>
                                        <path id="Path_4814" data-name="Path 4814" class="cls-1" d="M405.88,27.4h11.66a2,2,0,0,1,2,2.05V31a18,18,0,0,1-.54,4.62l.27.09A30.38,30.38,0,0,1,423.13,30a11.39,11.39,0,0,1,8.06-3.54c1,0,2.05.13,3.07.26a2.08,2.08,0,0,1,1.83,2.05V41.32a2.06,2.06,0,0,1-2.24,2c-.64,0-1.29-.09-1.93-.1Q421,43.26,421,53.87V69.22a2.05,2.05,0,0,1-2.05,2H405.88a2.05,2.05,0,0,1-2.06-2V29.45A2.05,2.05,0,0,1,405.88,27.4Z"></path>
                                        <path class="cls-1" d="M447.89,27.07A6.13,6.13,0,1,1,454,20.94,6.13,6.13,0,0,1,447.89,27.07Zm0-11.26A5.13,5.13,0,1,0,453,20.94,5.13,5.13,0,0,0,447.89,15.81Z"></path>
                                        <path class="cls-1" d="M445.57,18.26h3a2.2,2.2,0,0,1,1.41.37,1.42,1.42,0,0,1,.52,1.19,1.31,1.31,0,0,1-.92,1.36v0a1.61,1.61,0,0,1,.67.41,1.4,1.4,0,0,1,.28.92v.88a.74.74,0,0,0,.15.4H449a1.13,1.13,0,0,1-.1-.49v-.74a.78.78,0,0,0-.22-.52,1.07,1.07,0,0,0-.67-.18h-.48a.62.62,0,0,1-.19,0,.55.55,0,0,1,0,.19v1.76h-1.75Zm1.94,1.31a.68.68,0,0,1-.2,0,.3.3,0,0,1,0,.19v.74a.3.3,0,0,1,0,.19.68.68,0,0,1,.2,0h.59c.56,0,.78-.15.78-.53a.54.54,0,0,0-.22-.47,1.19,1.19,0,0,0-.51-.08Z"></path>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block" style="color: #410c91;padding-top: 10px;font-size: 15px;">
                                <span>Get Tested. Live Healthy.</span>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right right-menu align-items-center">
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">
                                <span>Default Color</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                                <div class="btn btn-icon btn-sm">
                                    <a href="/register">
                                        <span style="color: #410c91;" class="d-none d-sm-block">Register</span>
                                    </a>
                                </div>
                                <div class="btn btn-icon btn-sm pr-3">
                                    <a href="/login">
                                        <span style="color: #410c91;" class="d-none d-sm-block">Log In</span>
                                    </a>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- END: Content-->
    <div class="row pt-2" style="height: 400px; width:auto; background-color: #f6f6f6; ">
        <div class="col-md-12 pl-5">
            <h1 class=" pt-4" style="font-size: 50px; color: #222222">
                Find lab & radiology centers for your medical test.
            </h1>
            <p class="mt-2" style="font-size: 30px; color:#552e90">
                Access your results, make better decisions
            </p>
        </div>
        <div class="col-md-12 mt-0 pt-0 pl-5">
            <!-- Dropdown -->
            <div class="btn-group">
                <button type="button btn" class="btn btn-outline-dark btn-lg">Select Your Test Here</button>
                <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Logos -->
    <div class="row pt-3 pb-3 text-center" style="background-color: white;">
        <div class="col-md-4">
            <i class="fa fa-wheelchair fa-2x" style="color: #532b9f;" aria-hidden="true">
                <span style="display: inline; font-size:25px"><b>Get Tested.</b> Live Healthy.</span>
            </i>
        </div>
        <div class="col-md-4">
            <i class="fa fa-medkit fa-2x" style="color: #532b9f;" aria-hidden="true">
                <span style="display: inline; font-size:25px"><b>Receive test</b> results quickly.</span>
            </i>
        </div>
        <div class="col-md-4">
            <i class="fa fa-heart fa-2x" style="color: #532b9f;" aria-hidden="true">
                <span style="display: inline; font-size:25px"><b>Health </b>Awareness.</span>
            </i>
        </div>
    </div>


    <div class="row pt-3" style="background-color: #f6f6f6;">
        <div class="col-md-7 pl-5">
            <span>Mens Health Awareness Month</span>
            <h3 class="mt-3" style="color: #532b9f;">Early detection is paramount to prevention.</h3>
            <p class="mt-3">November is meant to bring awareness to men's health and the importance of getting
                the proper testing for various conditions. The PSA test is a blood test used to screen
                for prostate cancer. Elevated PSA levels may indicate prostate cancer,
                a noncancerous condition such as prostatitis, or an enlarged prostate.</p>
        </div>
        <div class="col-md-5">
            <img style="padding-bottom: 47px;" class="pl-5" src="/assets/images/doctor.png" height="300px" width="auto" alt="Doctor Sticker">
        </div>
    </div>

    <div class="row pt-3" style="background-color: white;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 style="color:#000000"><b>Benefits of using LabFinder </b>based on research.</h3>
            <div class="card mt-3" style="width: 39rem;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-size: 40px; color: #532b9f;">70%</h5>
                            <p class="card-text"><b>of medical decisions</b> are based on test results.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text"><b style="color: #532b9f;">We provide access to your results</b> quickly and securely where you can share and make informed decisions with your medical provider.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-size: 40px; color: #532b9f;">2/3</h5>
                            <p class="card-text"><b>of adults</b> say they worry about unexpected medical bills**</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text pt-3"><b style="color: #532b9f;">We provide</b> an easy way to take control of your health.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-size: 30px; color: #532b9f;">Every 30 Sec</h5>
                            <p class="card-text"><b>a new cancer</b> is diagnosed in the United States.***</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text"><b style="color: #532b9f;">We provide an easy way to take control of your health.</b> one test at a time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    <!-- Carousel -->
    <div class="container-xl">
        <div class="row pt-3">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center">What they say about us</h2> <br><br>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="img-box"><img src="/assets/images/tutorAvatar.png" alt=""></div>
                            <p class="testimonial" style="font-size: 20px;">
                                From start to finish, this process was simple and efficient.
                            </p>

                        </div>
                        <div class="carousel-item">
                            <div class="img-box"><img src="/assets/images/face.png" alt=""></div>
                            <p class="testimonial" style="font-size: 20px;">
                                I was easily able to find a location for COVID testing for myself and my two kids.
                            </p>

                        </div>
                        <div class="carousel-item">
                            <div class="img-box"><img src="/assets/images/muslim.png" alt=""></div>
                            <p class="testimonial" style="font-size: 20px;">
                             I just really appreciate you all for making such a stressful situation easier for us.
                            </p>
                        </div>
                    </div>
                    <!-- Carousel controls --> <br><br>
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer style="margin-top: 50px; background-color:#410c91; height:80px">
    <div class="row" style="color: white;">
        <div class="col-md-1 pt-2" style="text-align: right;">
            <i class="fa fa-wheelchair fa-2x" aria-hidden="true"></i>
        </div>
        <div class="col-md-5" style="    padding-top: 29px; padding-left: 21px;">
            <p>© 2021 LabFinder, LLC. All Rights Reserved.</p>
        </div>
        <div class="col-md-2 pl-0"></div>
        <div class="col-md-4"></div>
    </div>
    </footer>
    @include('layouts.partials.scripts')

</body>

</html>