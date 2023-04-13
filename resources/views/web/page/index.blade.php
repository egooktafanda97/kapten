@extends('web.layout.layouts')
@section('hero')
    <!-- HERO -->
    <div class="lexal_tm_home_hero" id="home">
        <div class="image" data-img-url="{{ asset('public/img/user/ego.jpg') }}"></div>
        <div class="overlay"></div>
        <div class="overlay_texts">
            <h3 class="name">Ego Oktafanda</h3>
            <p class="subtitle">web developer and data science</p>
            <a class="button blog-btn button--rounded" href="{{ url('blog') }}">
                Blog
            </a>
        </div>
        <div class="lexal_tm_down anchor">
            <div class="down-icon white top_120">
                <a href="#about">
                    <svg height="100%"
                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;"
                        version="1.1" viewBox="0 0 247 390" width="26px" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M123.359,79.775l0,72.843" id="wheel"
                            style="fill:none;stroke:#fff;stroke-width:20px;" />
                        <path
                            d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                            id="mouse" style="fill:none;stroke:#fff;stroke-width:20px;" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- /HERO -->
@endsection
@section('contents')
    <!-- ABOUT -->
    <div class="lexal_tm_section" id="about">
        <div class="container">
            <div class="lexal_tm_about_wrap lexal_tm_waypoint_effect2">
                <div class="img_box">
                    <div class="author_img">
                        <img alt="ego oktafanda" src="{{ asset('public/img/user/me.jpg') }}" style="width: 100%;" />
                        <div class="main_image" style="border: 1px solid #fff;"></div>
                    </div>
                </div>
                <div class="description_box">
                    <div class="lexal_tm_main_title hero">
                        <span>About my carrer</span>
                        <h3>My name is Ego Oktafanda M.Kom</h3>
                    </div>
                    <div class="main_info">
                        <p>
                            I'm a web developer. I hold a master's degree in Informatics Engineering from Putra Indonesia
                            University "YPTK" Padang. Over the last few years, I have worked on several projects, ranging
                            from Information Systems, Management Systems & Geographic Information Systems.
                        </p>
                        <p>
                            I have acquired the necessary skills and knowledge to make your project a success. I enjoy every
                            step of the process in building a system.
                        </p>
                        <p>
                            Experience gives me insight on how to build well structured systems. I also focus on web-based
                            applications, systems design analysis & distributed technologies.
                        </p>
                        <div class="sign">
                            <img alt="" src="{{ asset('public/img/sign/dark.png') }}" />
                        </div>
                        <div class="lexal_tm_button">
                            <a href="https://egooktafanda97.github.io/files/cv-ego-oktafanda.pdf"><span>Download
                                    CV</span></a>
                        </div>
                        <div
                            style="width: 100%;display: flex;align-content: center;flex-direction: row;justify-content: flex-start;">
                            <a class="icon-circle" href="https://github.com/egooktafanda97"
                                style="border: 1px solid #fff; color: #fff" target="_blank">
                                <i class="lab la-github"></i>
                            </a>
                            <a class="icon-circle" href="https://wa.me/+6282284733404"
                                style="border: 1px solid green; color: green" target="_blank">
                                <i class="lab la-whatsapp"></i>
                            </a>
                            <a class="icon-circle"
                                href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=egooktafanda1097@gmail.com"
                                style="border: 1px solid #872f38; color: #872f38" target="_blank">
                                <i class="las la-envelope-open-text"></i>
                            </a>
                            <a class="icon-circle" href="https://www.instagram.com/ego_oktafanda/"
                                style="border: 1px solid #f50202; color: #f50202" target="_blank">
                                <i class="lab la-instagram"></i>
                            </a>
                            <a class="icon-circle" href="https://www.facebook.com/rigo.seilangsat/"
                                style="border: 1px solid #0054e6; color: #0054e6" target="_blank">
                                <i class="lab la-facebook-f"></i>
                            </a>
                            <a class="icon-circle" href="https://www.linkedin.com/in/ego-oktafanda-350555170/"
                                style="border: 1px solid #0054e6; color: #0054e6" target="_blank">
                                <i class="lab la-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /ABOUT -->

    <!-- SERVICES -->
    <div class="lexal_tm_section" id="services">
        <div class="container">
            <div class="lexal_tm_main_title">
                <span>Awesome services</span>
                <h3>I recommend you high quality services</h3>
            </div>
            <div class="lexal_tm_services lexal_tm_waypoint_effect">
                <ul>
                    <li>
                        <div class="inner">
                            <h3>Web Development</h3>
                            <p>
                                Starting to work in the web developer world in 2018, since 2020 he has been working in the
                                startup industry
                            </p>
                            <div style="display: flex">
                                <span class="icon-circle" style="border: 1px solid #434bff;color: #9498e7;">
                                    <i class="lab la-php"></i>
                                </span>
                                <span class="icon-circle" style="border: 1px solid #ad982b; color: #ad982b">
                                    <i class="lab la-js-square"></i>
                                </span>
                                <span class="icon-circle" style="border: 1px solid #c40f02; color: #c40f02">
                                    <i class="lab la-laravel"></i>
                                </span>
                                <span class="icon-circle" style="border: 1px solid #027dc4; color: #027dc4">
                                    <i class="lab la-react"></i>
                                </span>
                                <span class="icon-circle" style="border: 1px solid #b102c4; color: #b102c4">
                                    <i class="lab la-sass"></i>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            {{-- <img alt="" class="svg" src="img/svg/adobe-illustrator.svg" /> --}}
                            <h3>Arduino microcontroller</h3>
                            <p>Armed with electrical knowledge when I was in high school, I was able to use the Arduino
                                Microcontroller for certain cases..</p>
                            <div style="display: flex">
                                <span class="icon-circle" style="border: 1px solid #076305; color: #076305">
                                    <i class="las la-microchip"></i>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <h3>Artificial intelligence</h3>
                            <p>
                                Armed with my master's studies, I can take advantage of several artificial intelligence
                                algorithms, especially in Convolutional Neural Networks
                            </p>
                            <div style="display: flex">
                                <span class="icon-circle" style="border: 1px solid #38fc93; color: #38fc93">
                                    <i class="las la-brain"></i>
                                </span>
                                <span class="icon-circle" style="border: 1px solid #918f01; color: #918f01">
                                    <i class="lab la-python"></i>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /SERVICES -->

    <!-- PROJECTS -->
    <div class="lexal_tm_section" id="portfolio">
        <div class="container">
            <div class="lexal_tm_main_title">
                <span>Creative Projects</span>
                <h3>Some of the projects I've worked on</h3>
            </div>
            <div class="lexal_tm_projects_wrap lexal_tm_waypoint_effect">
                <ul class="lexal_tm_portfolio_list">
                    @foreach ($project as $item)
                        <li>
                            <div class="list_inner">
                                <div class="image_wrap">
                                    <img alt="{{ $item->judul }}" src="{{ asset('public/project/' . $item->gambar) }}"
                                        style="width: 100%; height: 200px;" />
                                    <div class="main_image" data-img-url="img/portfolio/1.jpg">
                                    </div>
                                </div>
                                <div class="overlay"></div>
                                <div class="overlay_text">
                                    <h3>{{ $item->judul }}</h3>
                                    <span>{{ $item->kategori }}</span>
                                </div>
                                <a class="full_link" href="{{ url('porto/' . $item->id) }}"></a>
                            </div>
                        </li>
                    @endforeach

                </ul>
                {{-- <div class="lexal_tm_load_more">
                    <div class="inner">
                        <a href="#"><span>Load More</span><img alt="" class="svg"
                                src="img/svg/spinner.svg" /></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- /PROJECTS -->

    <!-- pengalaman -->
    <div class="lexal_tm_services lexal_tm_waypoint_effect load">
        <div class="container">
            <div class="lexal_tm_main_title">
                <span>PROGRAMMING</span>
                <h3>programming language that I have ever used</h3>
            </div>
            <ul>
                <li>
                    <div class="inner">
                        <strong style="color: #fff">BAHASA PEMOGRAMAN</strong>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #474a8a; color: #474a8a">
                                    <i class="lab la-php"></i>
                                </span>
                            </div>
                            <strong>Bahsa Pemogrman PHP</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #ad982b; color: #ad982b">
                                    <i class="devicons devicons-javascript_badge"></i>
                                </span>
                            </div>
                            <strong>Bahsa Pemogrman Javascript</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #013491; color: #013491">
                                    <i class="lab la-python"></i>
                                </span>
                            </div>
                            <strong>Bahsa Pemogrman python</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #910125; color: #910125">
                                    <i class="lab la-java"></i>
                                </span>
                            </div>
                            <strong>Bahsa Pemogrman Java</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid blue; color: blue">
                                    C
                                </span>
                            </div>
                            <strong>BAHASA C</strong>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <strong style="color: #fff">FRAMEWORK</strong>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #c40f02; color: #c40f02">
                                    <i class="lab la-laravel"></i>
                                </span>
                            </div>
                            <strong>LARAVEL</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #912501; color: #912501">
                                    <i class="devicons devicons-codeigniter"></i>
                                </span>
                            </div>
                            <strong>CODEIGNITHER</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #027dc4; color: #027dc4">
                                    <i class="lab la-react"></i>
                                </span>
                            </div>
                            <strong>REACT JS</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #015a91; color: #015a91">
                                    <i class="lab la-react"></i>
                                </span>
                            </div>
                            <strong>REACT NATIVE</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #015a91; color: #015a91">
                                    <i class="lab la-react"></i>
                                </span>
                            </div>
                            <strong>ELECTRON JS</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid green; color: green">
                                    <i class="lab la-vuejs"></i>
                                </span>
                            </div>
                            <strong>VUE JS</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #2c0191; color: #2c0191">
                                    <i class="devicons devicons-bootstrap"></i>
                                </span>
                            </div>
                            <strong>BOOTSTRAP</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid black; color: black">
                                    <i class="las la-flask"></i>
                                </span>
                            </div>
                            <strong>FLASK PYTHON</strong>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner">
                        <strong style="color: #fff">LAIN NYA</strong>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #c40f02; color: #c40f02">
                                    <i class="devicons devicons-html5"></i>
                                </span>
                            </div>
                            <strong>HTML</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid blue; color: blue">
                                    <i class="devicons devicons-css3"></i>
                                </span>
                            </div>
                            <strong>CSS</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid pink; color: pink">
                                    <i class="devicons devicons-sass"></i>
                                </span>
                            </div>
                            <strong>SCSS</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #915501; color: #915501">
                                    <i class="devicons devicons-mysql"></i>
                                </span>
                            </div>
                            <strong>MySql</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid #f50202; color: #f50202">
                                    <i class="lab la-git"></i>
                                </span>
                            </div>
                            <strong>GIT</strong>
                        </div>
                        <div class="card-list-item">
                            <div>
                                <span class="icon-circle" style="border: 1px solid gray; color: gray">
                                    {}
                                </span>
                            </div>
                            <strong>JSON</strong>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /pengalaman -->

        <!-- NEWS -->
        {{-- <div class="lexal_tm_section" id="news">
        <div class="container">
            <div class="lexal_tm_main_title">
                <span>Latest News</span>
                <h3>Check out my latest news</h3>
            </div>
            <div class="lexal_tm_news_wrap lexal_tm_waypoint_effect">
                <ul>
                    <li>
                        <div class="inner">
                            <div class="image_wrap">
                                <img alt="" src="img/news/1000x600.jpg" />
                                <div class="main_image" data-img-url="img/news/1.jpg"></div>
                                <a class="full_link" href="news-single.html"></a>
                            </div>
                            <div class="descriptions_wrap">
                                <div class="date_wrap">
                                    <span>January 22, 2019 in <a href="#">Lifestyle</a></span>
                                </div>
                                <div class="title">
                                    <a href="news-single.html">
                                        <h3>Most Photographer 2019</h3>
                                    </a>
                                </div>
                                <div class="text">
                                    <p>If you are reading this, you probably plan to start a small business or a
                                        side hustle...</p>
                                </div>
                                <div class="lexal_tm_button">
                                    <a href="news-single.html"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <div class="image_wrap">
                                <img alt="" src="img/news/1000x600.jpg" />
                                <div class="main_image" data-img-url="img/news/2.jpg"></div>
                                <a class="full_link" href="news-single-2.html"></a>
                            </div>
                            <div class="descriptions_wrap">
                                <div class="date_wrap">
                                    <span>February 15, 2019 in <a href="#">Photography</a></span>
                                </div>
                                <div class="title">
                                    <a href="news-single-2.html">
                                        <h3>Autistic Photographer</h3>
                                    </a>
                                </div>
                                <div class="text">
                                    <p>If you are reading this, you probably plan to start a small business or a
                                        side hustle...</p>
                                </div>
                                <div class="lexal_tm_button">
                                    <a href="news-single-2.html"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <div class="image_wrap">
                                <img alt="" src="img/news/1000x600.jpg" />
                                <div class="main_image" data-img-url="img/news/3.jpg"></div>
                                <a class="full_link" href="news-single-3.html"></a>
                            </div>
                            <div class="descriptions_wrap">
                                <div class="date_wrap">
                                    <span>April 01, 2019 in <a href="#">Branding</a></span>
                                </div>
                                <div class="title">
                                    <a href="news-single-3.html">
                                        <h3>Alian's Photo Story</h3>
                                    </a>
                                </div>
                                <div class="text">
                                    <p>If you are reading this, you probably plan to start a small business or a
                                        side hustle...</p>
                                </div>
                                <div class="lexal_tm_button">
                                    <a href="news-single-3.html"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
        <!-- /NEWS -->

        <!-- CONTACT -->
        <div class="lexal_tm_section" id="contact">
            <div class="container">
                <div class="lexal_tm_main_title contact ">
                    <span>Contact me</span>
                    <h3>Get in touch with me</h3>
                </div>
                <div class="lexal_tm_contact_wrap lexal_tm_waypoint_effect load">
                    <div class="leftpart">
                        <ul>
                            <li>
                                <div class="inner" style="padding:0">
                                    <span>Kuantan singingi, Riau Indonesia</span>
                                </div>
                            </li>
                            <li>
                                <div class="inner" style="padding:0">
                                    <span>+6282284733404</span>
                                </div>
                            </li>
                            <li>
                                <div class="inner" style="padding:0">
                                    <span><a href="#">egooktafanda1097@gmail.com</a></span>
                                </div>
                            </li>
                            <li>
                                <div class="inner" style="padding:0">
                                    <span><a href="#">@ego_oktafanda</a></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="rightpart">
                        <div class="contact_list_wrap">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /CONTACT -->
    @endsection
