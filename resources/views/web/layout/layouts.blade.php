<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<meta content="portfolio ego oktafanda" name="title">
<meta content="web developer ego oktafanda" name="description">
<meta content="web ,web developer, laravel,ci3, react" name="keywords">
<meta content="index, follow" name="robots">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
{{-- <meta content="English" name="language"> --}}
<meta content=" days" name="revisit-after">
<meta content="ego oktafanda" name="author">

<head>

    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

    <meta content="Name of your web site" name="description">
    <meta content="Marketify" name="author">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <title>EGO OKTAFANDA</title>

    <!-- STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Saira:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">
    <link href="{{ asset('site/html') }}/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('site/html') }}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
        rel="stylesheet" />
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

    <!--[if lt IE 9]> <blade ___scripts_0___/> <![endif]-->
    <!-- /STYLES -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');

        /** ADD YOUR AWESOME CODES HERE **/
        .icon-circle {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            font-size: 2em;
            border-radius: 100%;
            margin: 3px;
        }

        .card-list-item {
            width: 100%;
            display: flex;
            padding: 10px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            border-radius: 10px;
            margin-bottom: 5px;
            align-items: center;

        }

        .card-list-item strong {
            font-size: 1em;
            color: gray;
        }

        .icon-circle {
            border-bottom: none !important;
        }
    </style>

</head>

<body>


    {{-- <div class="lexal_tm_loader-wrapper">
        <div class="loader"></div>
    </div> --}}

    <!-- WRAPPER ALL -->
    <div class="lexal_tm_all_wrap">
        <div class="lexal_tm_border left"></div>
        <div class="lexal_tm_border right"></div>

        <div class="lexal_tm_border top">
            <div class="header_wrap">
                <div class="logo anchor">
                    <div class="logo_image">
                        <a href="#home" style="font-family: 'Ubuntu', sans-serif;">EGO OKTAFANDA</a>
                    </div>
                </div>
                <div class="trigger">
                    <a href="#">
                        <span class="one"></span>
                        <span class="two"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="lexal_tm_border bottom">
            <div class="footer_wrap">
                <div class="copyright">
                    <p>Copyright &copy; {{ date('Y') }}. ego oktafanda</p>
                </div>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="xcon-facebook"></i></a></li>
                        <li><a href="#"><i class="xcon-twitter"></i></a></li>
                        <li><a href="#"><i class="xcon-linkedin"></i></a></li>
                        <li><a href="#"><i class="xcon-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="lexal_tm_menu">
            <div class="nav_list">
                <ul class="anchor_nav">
                    <li><a href="{{ url('') }}#home">Home</a></li>
                    <li><a href="{{ url('') }}#about">About</a></li>
                    <li><a href="{{ url('') }}#services">Services</a></li>
                    <li><a href="{{ url('') }}#portfolio">Portfolio</a></li>
                    <li><a href="{{ url('') }}#contact">Contact</a></li>
                </ul>
            </div>
        </div>

        @yield('hero')

        <div class="lexal_tm_wrap_inner">
            @yield('contents')
        </div>
    </div>
    <!-- / WRAPPER ALL -->

    <!-- SCRIPTS -->
    <script src="{{ asset('site/html') }}/js/jquery.js"></script>
    <!--[if lt IE 10]> <blade ___scripts_2___/> <![endif]-->
    <script src="{{ asset('site/html') }}/js/plugins.js"></script>
    <script src="{{ asset('site/html') }}/js/init.js"></script>
    <!-- /SCRIPTS -->
</body>

</html>
