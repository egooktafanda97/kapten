@extends('web.layout.layouts')
@section('hero')
    <!-- HERO -->
    <div class="lexal_tm_home_hero" id="home">
        <div class="image" data-img-url="{{ asset('img/user/ego.jpg') }}"></div>
        <div class="overlay"></div>
        <div class="overlay_texts">
            <h3 class="name">{{ $project->judul }}</h3>
        </div>
        <div class="lexal_tm_down anchor">
            <div class="down-icon white top_120">
                <a href="#single">
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
    <div class="lexal_tm_section" id="single">
        <div class="container">
            <div class="lexal_tm_portfolio_single_wrap">
                <div class="single_inner">
                    <div class="single_descriptions_wrap">
                        <div class="leftbox">
                            <h3>{{ $project->judul }}</h3>
                            <p><strong>{{ $project->sub_judul }}</strong></p>
                            <p>
                                {{ $project->deskripsi ?? '' }}
                            </p>
                        </div>
                        <div class="rightbox">
                            <h3 class="detail">Project Details</h3>
                            <ul>
                                <li>
                                    <p>
                                        <span class="first">Category:</span>
                                        <span class="second">{{ $project->kategori ?? '' }}</span>
                                    </p>
                                    <img alt="" class="svg" src="img/svg/menu.svg" />
                                </li>
                                <li>
                                    <p>
                                        <span class="first">Develop:</span>
                                        <span class="second">{{ $project->develop ?? '' }}</span>
                                    </p>
                                    <img alt="" class="svg" src="img/svg/menu.svg" />
                                </li>
                                {{-- <li>
                                    <p><span class="first">Client:</span><span
                                            class="second">{{ $project->develop ?? '' }}</span></p>
                                    <img alt="" class="svg" src="img/svg/comment.svg" />
                                </li> --}}
                                <li>
                                    <p><span class="first">Date:</span><span
                                            class="second">{{ $project->tahun ?? '' }}</span></p>
                                    <img alt="" class="svg" src="img/svg/calendar.svg" />
                                </li>
                                <li>
                                    <p><span class="first">Technology:</span><span class="second">
                                            @php
                                                $ti = json_decode($project->teknologi, true);
                                                $colors = [
                                                    'laravel' => 'red',
                                                    'react js' => '#2cb3f2',
                                                    'codeignither 3' => 'orange',
                                                ];
                                                $in = 0;
                                            @endphp
                                            @foreach ($ti as $item)
                                                <strong
                                                    style="color:{{ $colors[$item] ?? '#fff' }}; padding:3px; border:1px solid #fff; ">{{ $item }}</strong>
                                                @php
                                                    $in++;
                                                @endphp
                                            @endforeach
                                        </span></p>
                                    <img alt="" class="svg" src="img/svg/add-contact.svg" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="extra_images_list">
                        <ul>
                            <li>
                                <img alt="{{ $project->judul }}" src="{{ asset('project/' . $project->gambar) }}"
                                    style="border-radius: 10px;border:2px solid #fff" />
                                {{-- <div class="overlay"></div> --}}
                            </li>
                        </ul>
                    </div>
                    <div class="lexal_tm_pagination_wrap">
                        <div class="prev">
                            <a href="portfolio-single.html">Prev Project</a>
                        </div>
                        <div class="next">
                            <a href="portfolio-single-3.html">Next Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
