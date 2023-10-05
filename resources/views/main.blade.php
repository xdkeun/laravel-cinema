<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>TEAM 12 CINEMA</title>
        <!-- Bootstrap -->
        <link href="{{asset('./bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <!-- Animate.css -->
        <link href="{{asset('./animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome iconic font -->
        <link href="{{asset('./fontawesome/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css" />
        <!-- Magnific Popup -->
        <link href="{{asset('./magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
        <!-- Slick carousel -->
        <link href="{{asset('./slick/slick.css')}}" rel="stylesheet" type="text/css" />
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <!-- Theme styles -->
        <link href="{{asset('./css/dot-icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('./css/theme.css')}}" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('/favicons/favicon-16x16.png')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        
    </head>
    <body class="body">
        <header class="header header-horizontal header-view-pannel">
            <div class="container">
                <nav class="navbar">
                    <a class="navbar-brand" href="./">
                        <span class="logo-element">
                            <span class="logo-tape">
                                <span class="svg-content svg-fill-theme" data-svg="./images/svg/logo-part.svg"></span>
                            </span>
                            <span class="logo-text text-uppercase">
                                <span>12</span> team 12 CINEMA</span>
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="th-dots-active-close th-dots th-bars">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav">
                            
                            
                            <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                <a class="nav-link" href="{{ route('usermovie.index') }}">영화</a>
                                
                            </li>
                            <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                <a class="nav-link" href="{{ route('userproduct.index') }}">음식</a>
                            </li>
                            <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                <a class="nav-link" href="{{ route('userevent.index') }}">이벤트</a>
                            </li>
                            <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                <a class="nav-link" href="{{ route('usernews.index') }}">뉴스</a>
                            </li>
                            
                            
                            <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                                <a class="nav-link" href="{{ route('usersignup.index') }}">회원가입</a>
                            </li>
							    &emsp;  &emsp;  &emsp;  &emsp;  &emsp; &emsp; &emsp; &emsp; 
                                <a class="nav-link" href="{{ route('userlogin.index') }}"><h2 class="display-4">LO<span class="text-theme">GIN</span></h2></a>
								
                        </ul>
                        
                    </div>
                </nav>
            </div>
        </header>
        <section class="section-text-white position-relative">
            <div class="d-background" data-image-src="http://via.placeholder.com/1920x1080" data-parallax="scroll"></div>
            <div class="d-background bg-theme-blacked"></div>
            <div class="mt-auto container position-relative">
                <div class="top-block-head text-uppercase">
                    <h2 class="display-4">현재
                        <span class="text-theme">인기 영화</span>
                    </h2>
                </div>
                <div class="top-block-footer">
                    <div class="slick-spaced slick-carousel" data-slick-view="navigation responsive-4">
                        <div class="slick-slides">
                            <div class="slick-slide">
                                <article class="poster-entity" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <img class="embed-responsive-item" src="https://img.megabox.co.kr/SharedImg/2022/12/15/TzqCP0BfnKOhfAnEVNSXeYa56C0cABrs_420.jpg" alt="" />
                                    </div>
                                    <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                    <div class="d-over bg-highlight-bottom">
                                        <div class="collapse animated faster entity-play" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="//youtu.be/6_-6g9pKK9g" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <h4 class="entity-title">
                                            <a class="content-link" href="movie-info-sidebar-right.html">아바타: 물의 길</a>
                                        </h4>
                                        <div class="entity-category">
                                            <a class="content-link" href="movies-blocks.html">SF</a>,
                                            <a class="content-link" href="movies-blocks.html">adventure</a>
                                        </div>
                                        <div class="entity-info">
                                            <div class="info-lines">
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                                    <span class="info-text">9,3</span>
                                                    <span class="info-rest">/10</span>
                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                    <span class="info-text">192</span>
                                                    <span class="info-rest">&nbsp;min</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="slick-slide">
                                <article class="poster-entity" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <img class="embed-responsive-item" src="https://img.megabox.co.kr/SharedImg/2022/11/24/xFO8r2xbXzxoMD9iXbuKC1n5Bo79InhQ_420.jpg" alt="" />
                                    </div>
                                    <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                    <div class="d-over bg-highlight-bottom">
                                        <div class="collapse animated faster entity-play" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="//www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <h4 class="entity-title">
                                            <a class="content-link" href="movie-info-sidebar-right.html">올빼미</a>
                                        </h4>
                                        <div class="entity-category">
                                            <a class="content-link" href="movies-blocks.html">thriller</a>
                                        </div>
                                        <div class="entity-info">
                                            <div class="info-lines">
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                                    <span class="info-text">9,2</span>
                                                    <span class="info-rest">/10</span>
                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                    <span class="info-text">118</span>
                                                    <span class="info-rest">&nbsp;min</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="slick-slide">
                                <article class="poster-entity" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <img class="embed-responsive-item" src="https://img.megabox.co.kr/SharedImg/2022/10/27/ORrjuLOGuWgyZzrWIKug9X61ykfxBNov_420.jpg" alt="" />
                                    </div>
                                    <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                    <div class="d-over bg-highlight-bottom">
                                        <div class="collapse animated faster entity-play" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <h4 class="entity-title">
                                            <a class="content-link" href="movie-info-sidebar-right.html">영웅</a>
                                        </h4>
                                        <div class="entity-category">
                                            <a class="content-link" href="movies-blocks.html">drama</a>
                                        </div>
                                        <div class="entity-info">
                                            <div class="info-lines">
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                                    <span class="info-text">--</span>
                                                    <span class="info-rest">/--</span>
                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                    <span class="info-text">120</span>
                                                    <span class="info-rest">&nbsp;min</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="slick-slide">
                                <article class="poster-entity" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <img class="embed-responsive-item" src="https://img.megabox.co.kr/SharedImg/2022/11/18/Qqn5UpS4Fq5gKADZeXG4MZfvldzqdl4J_420.jpg" alt="" />
                                    </div>
                                    <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                    <div class="d-over bg-highlight-bottom">
                                        <div class="collapse animated faster entity-play" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <h4 class="entity-title">
                                            <a class="content-link" href="movie-info-sidebar-right.html">신비아파트 극장판 차원도깨비와 7개의 세계</a>
                                        </h4>
                                        <div class="entity-category">
                                            <a class="content-link" href="movies-blocks.html">animation</a>
                                        </div>
                                        <div class="entity-info">
                                            <div class="info-lines">
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                                    <span class="info-text">9,4</span>
                                                    <span class="info-rest">/10</span>
                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                    <span class="info-text">103</span>
                                                    <span class="info-rest">&nbsp;min</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="slick-slide">
                                <article class="poster-entity" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <img class="embed-responsive-item" src="https://img.megabox.co.kr/SharedImg/2022/11/04/vRDxzQ7BT5UZJSCxjBXTtxdbKA7eYktj_420.jpg" alt="" />
                                    </div>
                                    <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                    <div class="d-over bg-highlight-bottom">
                                        <div class="collapse animated faster entity-play" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <h4 class="entity-title">
                                            <a class="content-link" href="movie-info-sidebar-right.html">오늘 밤, 세계에서 이 사랑이 사라진다 해도</a>
                                        </h4>
                                        <div class="entity-category">
                                            <a class="content-link" href="movies-blocks.html">romance</a>
                                        </div>
                                        <div class="entity-info">
                                            <div class="info-lines">
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                                    <span class="info-text">8,7</span>
                                                    <span class="info-rest">/10</span>
                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                    <span class="info-text">121</span>
                                                    <span class="info-rest">&nbsp;min</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="slick-slide">
                                <article class="poster-entity" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <img class="embed-responsive-item" src="https://img.megabox.co.kr/SharedImg/2022/11/30/CuAQqy1IbdxVtahcyVB7obOvDksEdAyb_420.jpg" alt="" />
                                    </div>
                                    <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                    <div class="d-over bg-highlight-bottom">
                                        <div class="collapse animated faster entity-play" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <h4 class="entity-title">
                                            <a class="content-link" href="movie-info-sidebar-right.html">탄생</a>
                                        </h4>
                                        <div class="entity-category">
                                            <a class="content-link" href="movies-blocks.html">drama</a>
                                        </div>
                                        <div class="entity-info">
                                            <div class="info-lines">
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                                    <span class="info-text">8,6</span>
                                                    <span class="info-rest">/10</span>
                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                    <span class="info-text">150</span>
                                                    <span class="info-rest">&nbsp;min</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="slick-slide">
                                <article class="poster-entity" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <img class="embed-responsive-item" src="https://img.megabox.co.kr/SharedImg/2022/10/27/KyM9M62zht16gWm8cArDqiD8oXWNByTz_420.jpg" alt="" />
                                    </div>
                                    <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                    <div class="d-over bg-highlight-bottom">
                                        <div class="collapse animated faster entity-play" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <h4 class="entity-title">
                                            <a class="content-link" href="movie-info-sidebar-right.html">원피스 필름 레드</a>
                                        </h4>
                                        <div class="entity-category">
                                            <a class="content-link" href="movies-blocks.html">animation</a>
                                        </div>
                                        <div class="entity-info">
                                            <div class="info-lines">
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                                    <span class="info-text">8,5</span>
                                                    <span class="info-rest">/10</span>
                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                    <span class="info-text">115</span>
                                                    <span class="info-rest">&nbsp;min</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="slick-slide">
                                <article class="poster-entity" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        <img class="embed-responsive-item" src="https://img.megabox.co.kr/SharedImg/2022/12/06/S7Q15dzyYFKqHRxxc1zzYb1LQJiyz1AB_420.jpg" alt="" />
                                    </div>
                                    <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                    <div class="d-over bg-highlight-bottom">
                                        <div class="collapse animated faster entity-play" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        <h4 class="entity-title">
                                            <a class="content-link" href="movie-info-sidebar-right.html">극장판 가면라이더: 세이버X젠카이저 슈퍼히어로 전기</a>
                                        </h4>
                                        <div class="entity-category">
                                            <a class="content-link" href="movies-blocks.html">animation</a>,
                                            <a class="content-link" href="movies-blocks.html">adventure</a>
                                        </div>
                                        <div class="entity-info">
                                            <div class="info-lines">
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                                    <span class="info-text">7,8</span>
                                                    <span class="info-rest">/10</span>
                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                    <span class="info-text">76</span>
                                                    <span class="info-rest">&nbsp;min</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="slick-arrows">
                            <div class="slick-arrow-prev">
                                <span class="th-dots th-arrow-left th-dots-animated">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>
                            <div class="slick-arrow-next">
                                <span class="th-dots th-arrow-right th-dots-animated">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-long">
            <div class="container">
                <div class="section-head">
                    <h2 class="section-title text-uppercase" id="usermovielist">현재 상영중인 영화</h2>
                    <p class="section-text">2022년 12월 상영중인 영화
                    </p>
                </div>

                @foreach ($list  as  $row)
                
                <article class="movie-line-entity">
                    <div class="entity-poster" data-role="hover-wrap">
                        <div class="embed-responsive embed-responsive-poster">
                        <?
                            $iname = $row->pic ? $row->pic : "";
                        
                        ?>
                            <img class="embed-responsive-item" src="{{asset('/storage/product_img/' . $iname) }}" alt="" />
                        </div>
                        <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                            <div class="entity-play">
                                <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                    <span class="icon-content"><i class="fas fa-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link" href="{{ route('usermovie.show', $row->id) }}{{ $tmp }}">{{$row->title}}</a>
                        </h4>
                        <div class="entity-category">
                            <a class="content-link" href="movies-blocks.html">{{$row->genre}}</a>
                        </div>
                        <div class="entity-info">
                            <div class="info-lines">
                                <div class="info info-short">
                                    <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                    <span class="info-text">{{$row->grade}}</span>
                                    <span class="info-rest">/10</span>
                                </div>
                                <div class="info info-short">
                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                    <span class="info-text">개봉일</span>
                                    <span class="info-rest">&nbsp;{{$row->playdate}}</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-short entity-text">{{$row->summary}}
                        </p>
                    </div>
                    <div class="entity-extra">
					
                        <div class="text-uppercase entity-extra-title">상영시간</div>
                        <div class="entity-showtime">
						
						
                            <div class="showtime-wrap">
                                <div class="showtime-item">
                                    <a href="{{ route('ticketing.index') }}" class="abled btn-time btn"  aria-disabled="true">13 : 00</a>
                                </div>
                                <div class="showtime-item">
                                    <a href="{{ route('ticketing.index') }}" class="abled btn-time btn" aria-disabled="true">15 : 00</a>
                                </div>
                                <div class="showtime-item">
                                    <a href="{{ route('ticketing.index') }}" class="abled btn-time btn" aria-disabled="true">17 : 00</a>
                                </div>

                            </div>
							
							
							<hr>
							<div class="navbar-extra">
                            <a class="btn-theme btn" href="#"><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;시간대를 선택해주세요</a>
							
                        </div>
							
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </section>
        
		

        <a class="scroll-top disabled" href="#"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
        <footer class="section-text-white footer footer-links bg-darken">
            <div class="footer-body container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <a class="footer-logo" href="./">
                            <span class="logo-element">
                                <span class="logo-tape">
                                    <span class="svg-content svg-fill-theme" data-svg="./images/svg/logo-part.svg"></span>
                                </span>
                                <span class="logo-text text-uppercase">
                                    <span>T</span>EAM12</span>
                            </span>
                        </a>
                        <div class="footer-content">
                            <p class="footer-text">인덕대학교
                                <br/>TEAM12</p>
                            <p class="footer-text">영화관 프로젝트</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h5 class="footer-title text-uppercase">관리자</h5>
                        <ul class="list-unstyled list-wide footer-content">
                            <li>
                                <a class="content-link" href="#">영화관 정보</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">영화관 좌석</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">상영 시간</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">영화</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">영화 감독</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">영화 장르</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">상품 정보</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">회원</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">뉴스</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">이벤트</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h5 class="footer-title text-uppercase">유저</h5>
                        <ul class="list-unstyled list-wide footer-content">
                            <li>
                                <a class="content-link" href="#">현재 인기 영화</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">현재 상영중인 영화</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">음식</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">이벤트</a>
                            </li>
                            <li>
                                <a class="content-link" href="#">뉴스</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h5 class="footer-title text-uppercase">Follow</h5>
                        <ul class="list-wide footer-content list-inline">
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-slack-hash"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-dribbble"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="container">Copyright 2022 &copy; TEAM12. All rights reserved.</div>
				<div class="container">TEAM12. 민용근, 장도연, 최동선, 최효원</div>
            </div>
        </footer>
        <!-- jQuery library -->
        <script src="{{asset('./js/jquery-3.3.1.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('./bootstrap/js/bootstrap.js')}}"></script>
        <!-- Paralax.js -->
        <script src="{{asset('./parallax.js/parallax.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('./waypoints/jquery.waypoints.min.js')}}"></script>
        <!-- Slick carousel -->
        <script src="{{asset('./slick/slick.min.js')}}"></script>
        <!-- Magnific Popup -->
        <script src="{{asset('./magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <!-- Inits product scripts -->
        <script src="{{asset('./js/script.js')}}"></script>
		
       <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ4Qy67ZAILavdLyYV2ZwlShd0VAqzRXA&callback=initMap"></script>
		-->
        <script async defer src="https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/js/rating.js"></script>
    </body>
</html>