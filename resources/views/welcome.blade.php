<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Seminar Nasional 2016</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="/semnas/images/fav.ico"/>
    <!-- Font Awesome -->
    <link href="/semnas/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/semnas/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="/semnas/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="/semnas/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="/semnas/css/animate.css"/>
    <!-- Theme color -->
    <link id="switcher" href="/semnas/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="/semnas/css/style.css" rel="stylesheet">

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
    <script type="text/javascript" src="/semnas/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script type="text/javascript" src="/semnas/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script type="text/javascript" src="/semnas/js/slick.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="/semnas/js/jquery.fancybox.pack.js"></script>
    <!-- Wow animation -->
    <script type="text/javascript" src="/semnas/js/wow.js"></script>
    <!-- Off-canvas Menu -->
    <script type="text/javascript" src="/semnas/js/classie.js"></script>

    <!-- Custom js -->
    <script type="text/javascript" src="/semnas/js/custom.js"></script>
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
    <a id="menu-btn" href="#"><i style="color: #414042" class="fa fa-bars"></i></a>
    <nav class="main-nav" id="main-menu">
        <span class="fa fa-remove" id="close"></span>
        <ul>
            <li><a href="#header"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="#testimonial"><i class="fa fa-user"></i><span>Pemateri</span></a></li>
            <li><a href="#howit-works"><i class="fa fa-list"></i><span>Alur Pendaftaran</span></a></li>
            <li><a href="#features"><i class="fa fa-clock-o"></i><span>Jadwal</span></a></li>
            <li><a href="#contact"><i class="fa fa-phone"></i><span>Kontak</span></a></li>
        </ul>
    </nav>
</div>
<!-- End menu area -->

<!-- Start header section -->
<header id="header">
    <div class="header-inner">
        <!-- Header image -->
        <img src="/semnas/images/bg2.png" alt="img">
        <div class="overlay">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-top">
                                <!-- Start logo area -->
                                <div class="logo-area">
                                    <!-- Image based logo -->
                                    <a class="logo" href="index.html"><img style="margin-bottom: 35px" src="/semnas/images/logo.png" alt="logo"></a>
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
                                                        <form class="form-horizontal" method="post" action="/semnas/login">
                                                            {!! csrf_field() !!}

                                                            <div class="col-sm-12">
                                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} auth">
                                                                    <i class="fa fa-user"></i>
                                                                    <input type="text"  placeholder="Username" name="name">

                                                                    @if ($errors->has('name'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('name') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} auth">
                                                                    <i class="fa fa-lock"></i>
                                                                    <input type="password" placeholder="Password" name="password">

                                                                    @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group auth">
                                                                    <input type="submit" value="Login">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a style="margin-right: 15px; background: #414042" href="/semnas/register">
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
                                    {{--<div class="col-md-5 col-sm-4">--}}
                                        {{--<div class="header-bottom-right">--}}
                                            {{--<!-- <img src="assets/images/iphone-group1.png" alt="iphone grpup img"> -->--}}
                                            {{--<img src="/images/image-home.png" alt="iphone grpup img">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-md-10 col-sm-offset-1">
                                        <div class="header-bottom-left">
                                            <h1>Seminar Nasional 2016</h1>
                                            <h2 style="text-align: center">Technopreneurship</h2>
                                            <p>
                                                Seminar Nasional merupakan salah satu acara dalam rangkaian BITS 2016
                                                yang kali ini mengangkat tema Technopreneurship, Topik ini sangat sesuai dengan
                                                karakter anak muda yang dekat dengan teknologi yang dapat dikembangkan kedalam sebuah bisnis,
                                                Seminar Nasional ini akan dikemas secara menarik dengan menghadirkan dua pemateri. Pemateri pertama adalah Ceo dan
                                                Founder Generasi Digital Internasional. Pemateri kedua yaitu Ceo dan
                                                Founder Herosoft Media.
                                            </p>
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

<!-- Start testimonial -->
<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-area wow fadeInLeft">
                    <h2 style="margin-bottom: 40px" class="title">Pemateri</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-slider">
                    <!-- single slide -->
                    <div class="testimonial-single-slide">
                        <img class="testi-avatar" src="/semnas/images/Yopie.png" alt="testimonial img">
                        <p class="testi-name">YOPIE SURYADI</p>
                        <p class="testi-company">CEO & FOUNDER GDI LAB (GENERASI DIGITAL INTERNASIONAL)</p>
                        <img style="width: 350px" src="/semnas/images/logo-gdi.png">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-slider">
                    <!-- single slide -->
                    <div class="testimonial-single-slide">
                        <img class="testi-avatar" src="/semnas/images/hero.jpg" alt="testimonial img">
                        <p class="testi-name">HERO WIJAYADI</p>
                        <p class="testi-company">CEO & FOUNDER HEROSOFT MEDIA</p>
                        <img style="width: 400px; margin-top: 24px; margin-bottom: 34px" src="/semnas/images/logo-herosoft.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial -->

<!-- Start how it works -->
<section id="howit-works">
    <div class="howit-works-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area wow fadeInLeft">
                        <h2 class="title">Alur <span>Pendaftaran</span></h2>
                        <div class="alur-content">
                            <ul>
                                <li>Calon peserta mendaftar pada website resmi bits.cs.unej.ac.id</li>
                                <li>Calon peserta melakukan pendaftaran pembayaran ke bank melalui Teller atau ATM ke nomor rekening Mandiri <strong>1430015021056 a/n Elviera Enggarwati</strong></li>
                                <li>Calon peserta melakukan konfirmasi kepada panitia via SMS sesuai format.
                                    <ul style="padding-left: 30px" class="alur-subcontent">
                                        <li>Format konfirmasi peserta Seminar Nasional kepada panitia bahwa peserta telah melakukan pembayaran, konfirmasi dilakukan melalui sms:</li>
                                        <span style="font-size: 18px;"><strong>[Nama/sesuai atasnama pembayar di bank] [spasi] [nama peserta]</strong></span>
                                        <li>Jika calon peserta tidak melakukan konfirmasi pada panitia melalui sms dalam kurun waktu 3hari
                                        pasca pendaftaran, maka panitia yang akan melakukan konfirmasi kepada calon peserta melalui sms.
                                        </li>
                                    </ul>
                                </li>
                                <li>Panitia melakukan verifikasi(mengaktifkan) dan mengkonfirmasi bahwa peserta telah terdaftar.
                                    <ul style="padding-left: 30px" class="alur-subcontent">
                                        <li>Jika dalam kurun waktu1 hari pasca konfirmasi peserta kepada panitia dan panitia
                                        belum mengaktifkan status peserta maka peserta berhak melakukan konfirmasi ulang kepada panitia melalui sms.</li></ul>
                                </li>
                                <li>Peserta dapat membuka website untuk mengecek konfimasi status dari panitia.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End how it works -->

<!-- Start Jadwal -->
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
                                            <p>29 Mei 2016</p>
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
                                            <h4>Waktu</h4>
                                            <p>08.00  -  selesai</p>
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
                                        <i class="fa fa-edit"></i>
                                        <div class="features-content">
                                            <h4>Pendaftaran</h4>
                                            <p style="padding-right:148px;">20 April 2016 - 25 Mei 2016</p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInRight" data-wow-duration="0.75s" data-wow-delay="0.75s">
                                        <i class="fa fa-map-marker"></i>
                                        <div class="features-content">
                                            <h4>Lokasi</h4>
                                            <p style="padding-right:57px;">Jl. Kalimantan No. 37 Sumbersari Jember</p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                        <i class="fa fa-pencil"></i>
                                        <div class="features-content">
                                            <h4>Fasilitas</h4>
                                            <p>Seminar Kit, Snack, Makan Siang, Sertifikat, dan Sticker</p>
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

<!-- Start contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-area">
                    <h2 class="title">Contact <span>Person</span></h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-area">
                    <form action="/semnas/message" class="contact-form">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="3" placeholder="Your Message"></textarea>
                        </div>
                        <div class="send-area">
                            <button type="submit" class="send-btn">Send Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-area">
                    <div class="contact-phone">
                        <p><i class="fa fa-home"></i> Program Studi Sistem Informasi</p>
                        <p><i class="fa fa-map-marker"></i> Jl. Kalimantan No. 37, Jember 68121</p>
                        <p><i class="fa fa-phone"></i> Nila : 083856409337</p>
                        <p><i class="fa fa-phone"></i> Elviera : 081230487780</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact -->

</body>
</html>