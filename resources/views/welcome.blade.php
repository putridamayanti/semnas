<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Seminar Nasional 2016</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="/images/fav.ico"/>
    <!-- Font Awesome -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="/css/animate.css"/>
    <!-- Theme color -->
    <link id="switcher" href="/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Cabin for Title -->
    <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <!-- Pacifico for Logo   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!-- jQuery library -->
    <script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script type="text/javascript" src="/js/slick.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
    <!-- Wow animation -->
    <script type="text/javascript" src="/js/wow.js"></script>
    <!-- Off-canvas Menu -->
    <script type="text/javascript" src="/js/classie.js"></script>

    <!-- Custom js -->
    <script type="text/javascript" src="/js/custom.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

//            $(function () {
//                $('[data-toggle="popover"]').popover()
//            });

            $(function(){
                $('[data-toggle="popover"]').popover({
                    container: 'body',
                    placement: 'bottom',
                    html: true,
                    content: function () {
                        var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
                        return clone;
                    }
                }).click(function(e) {
                    e.preventDefault();
                });
            });
        });
    </script>
    <![endif]-->
</head>
<body>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->


<!-- Start menu area -->
<div class="nav-area">
    <a id="menu-btn" href="#"><i class="fa fa-bars"></i></a>
    <nav class="main-nav" id="main-menu">
        <span class="fa fa-remove" id="close"></span>
        <ul>
            <li><a href="#header"><i class="fa fa-home"></i><span>Login</span></a></li>
            <li><a href="#header"><i class="fa fa-home"></i><span>Daftar</span></a></li>
            <li><a href="#header"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="#features"><i class="fa fa-server"></i><span>Pemateri</span></a></li>
            <li><a href="#howit-works"><i class="fa fa-hourglass"></i><span>Jadwal</span></a></li>
            <li><a href="#pricing-table"><i class="fa fa-usd"></i><span>Alur Pendaftaran</span></a></li>
            <li><a href="#screenshot"><i class="fa fa-image"></i><span>Screenshots</span></a></li>
            <li><a href="#download-app"><i class="fa fa-download"></i><span>Download</span></a></li>
            <li><a href="#testimonial"><i class="fa fa-certificate"></i><span>Testimonials</span></a></li>
            <li><a href="#contact"><i class="fa fa-envelope-o"></i><span>Contact</span></a></li>
        </ul>
    </nav>
</div>
<!-- End menu area -->

<!-- Start header section -->
<header id="header">
    <div class="header-inner">
        <!-- Header image -->
        <img src="/images/bg.png" alt="img">
        <div class="overlay">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-top">
                                <!-- Start logo area -->
                                <div class="logo-area">
                                    <!-- Image based logo -->
                                    <a class="logo" href="index.html"><img style="margin-bottom: 35px" src="/images/logo.png" alt="logo"></a>
                                    <!-- Text based logo -->
                                    <!-- <a class="logo" href="index.html">App Landy.</a> -->
                                </div>
                                <!-- End logo area -->
                                <div class="auth-menu-area">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="popover" data-popover-content="#popovercontent" tabindex="0" >
                                                        Login
                                                    </a>
                                                    <div id="popovercontent" class="hide">
                                                        <form class="form-horizontal" method="post" action="/login">
                                                            {!! csrf_field() !!}

                                                            <div class="col-sm-12">
                                                                <div class="form-group auth">
                                                                    <i class="fa fa-user"></i>
                                                                    <input type="text"  placeholder="Username" name="email">
                                                                </div>
                                                                <div class="form-group auth">
                                                                    <i class="fa fa-lock"></i>
                                                                    <input type="password" placeholder="Password" name="password">
                                                                </div>
                                                                <div class="form-group auth">
                                                                    <input type="submit" value="Login">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a style="margin-right: 15px; background: #8c8c8c" href="/register">
                                                        Daftar
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="header-bottom">
                                <div class="row">
                                    <div class="col-md-7 col-sm-8">
                                        <div class="header-bottom-left">
                                            <h1>Seminar Nasional 2016</h1>
                                            <p>
                                                Seminar Nasional merupakan salah satu acara dalam BITS 2015 yang kali ini mengangkat tema Your Life Your Game dimana di
                                                dalamnya akan dikemas dengan dua pemateri. Pemateri pertama adalah perwakilan dari salah satu publisher Game Online
                                                terkemuka di Indonesia, Megaxus Infotech. Dengan mengusung konsep "Lifestyle Entertainment", Megaxus Infotech telah
                                                memiliki lebih dari 11 juta pengguna di seluruh Indonesia. Pemateri kedua yaitu seseorang yang mampu mengimplementasikan
                                                dari sebuah game ke dalam pembentukan karakter.
                                                Beliau merupakan co-founder dan CEO dari Dicoding Indonesia.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-4">
                                        <div class="header-bottom-right">
                                            <!-- <img src="assets/images/iphone-group1.png" alt="iphone grpup img"> -->
                                            <img src="assets/images/Nexus-6-MockUp-group.png" alt="iphone grpup img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->

<!-- Start Features -->
<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-area">
                    <h2 class="title">Jadwal Kegiatan  <span> dan Tempat</span></h2>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="features-area">
                    <div class="row">
                        <!-- Start features left -->
                        <div class="col-md-6">
                            <div class="features-left">
                                <ul class="features-list features-list-left">
                                    <li class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                        <i class="fa fa-calendar"></i>
                                        <div class="features-content">
                                            <h4>Pelaksanaan</h4>
                                            <p>-- Mei 2016</p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.75s">
                                        <i class="fa fa-bank"></i>
                                        <div class="features-content">
                                            <h4>Tempat</h4>
                                            <p>Gedung Rektorat Universitas Jember Lt. 3</p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                        <i class="fa fa-clock-o"></i>
                                        <div class="features-content">
                                            <h4>Creative Design</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                        <i class="fa fa-flask"></i>
                                        <div class="features-content">
                                            <h4>Easy to Use</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End features left -->
                        <!-- Start features right -->
                        <div class="col-md-6">
                            <div class="features-right">
                                <ul class="features-list features-list-right">
                                    <li class="wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                        <i class="fa fa-rocket"></i>
                                        <div class="features-content">
                                            <h4>Premium Quality</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInRight" data-wow-duration="0.75s" data-wow-delay="0.75s">
                                        <i class="fa fa-cogs"></i>
                                        <div class="features-content">
                                            <h4>Different Colors</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                        <i class="fa fa-heart"></i>
                                        <div class="features-content">
                                            <h4>User Friendly</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                        <i class="fa fa-support"></i>
                                        <div class="features-content">
                                            <h4>24/7 Support</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End features right -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features -->


</body>
</html>