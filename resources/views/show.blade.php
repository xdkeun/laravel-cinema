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
        <link href="{{asset('./magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
        <!-- Slick carousel -->
        <link href="{{asset('./slick/slick.css') }}" rel="stylesheet" type="text/css" />
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <!-- Theme styles -->
        <link href="{{asset('./css/dot-icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('./css/theme.css')}}" rel="stylesheet" type="text/css">
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
        <?
            $iname = $row->pic ? $row->pic : "";         
        ?>
        <section class="after-head d-flex section-text-white position-relative">
            <div class="d-background" data-image-src="https://image.cnet.co.kr/2022/01/28/f7a64a90860f712286775e86b7f09138-770xAAA.jpg" data-parallax="scroll"></div>
            <div class="d-background bg-black-80"></div>
            <div class="top-block top-inner container">
                <div class="top-block-content">
                    <h1 class="section-title">영화</h1>
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="#">시작 화면</a>
                        <span class="text-theme mx-2"><i class="fas fa-chevron-right"></i></span>
                        <span>영화</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="sidebar-container">
                <div class="content">
                    <section class="section-long">
                        <div class="section-line">
                            <div class="movie-info-entity">
                                <div class="entity-poster" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
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
                                    <h2 class="entity-title">{{$row->title}}</h2>
                                    <div class="entity-category">
                                        <a class="content-link" href="movies-blocks.html">{{$row->actor}}</a>
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
                                    <ul class="entity-list">
                                        <li>
                                            <span class="entity-list-title">개봉일:</span>{{$row->playdate}}</li>
                                        <li>
                                            <span class="entity-list-title">출연배우:</span>
                                            <a class="content-link" href="#">{{$row->actor}}</a>
                                        </li>
                                        <li>
                                            <span class="entity-list-title">감독:</span>
                                            <a class="content-link" href="#">홍길동</a>
                                        </li>
                                        <li>
                                            <span class="entity-list-title">상영관:</span>
                                            <a class="content-link" href="#">CGV노원</a>
                                        </li>
                                        <li>
                                            <span class="entity-list-title">상영시간:</span>
                                            <a class="content-link" href="#">13:00</a>,
                                            <a class="content-link" href="#">15:00</a>,
                                            <a class="content-link" href="#">17:00</a>
                                        </li>
                                        <li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="section-line">
                            <div class="section-head">
                                <h2 class="section-title text-uppercase">줄거리</h2>
                            </div>
                            <div class="section-description">
                                <h6 class="text-dark">{{$row->summary}}</h6>

                               
                            </div>
                            <div class="section-bottom">
                                <div class="row">
                                    <div class="mr-auto col-auto">
                                        <div class="entity-links">
                                            <div class="entity-list-title">Share:</div>
                                            <a class="content-link entity-share-link" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="content-link entity-share-link" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="content-link entity-share-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a class="content-link entity-share-link" href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a class="content-link entity-share-link" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="entity-links">
                                            <div class="entity-list-title">Tags:</div>
                                            <a class="content-link" href="#">최신영화</a>,&nbsp;
                                            <a class="content-link" href="#">요즘영화</a>,&nbsp;
                                            <a class="content-link" href="#">인기영화</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="section-line">
                            <div class="section-head">
                                <h2 class="section-title text-uppercase">리뷰</h2>
                            </div>
                            <div class="comment-entity">
                                <div class="entity-inner">
                                    <div class="entity-content">
                                        <h4 class="entity-title">김김김</h4>
                                        <p class="entity-subtext">07.08.2018, 14:33</p>
                                        <p class="entity-text">굉장히 재밌고, 시간 가는 줄 몰랐습니다!
                                        </p>
                                    </div>
                                    <div class="entity-extra">
                                        <div class="grid-md row">
                                            <div class="col-12 col-sm-auto">
                                                <div class="entity-rating">
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="ml-sm-auto col-auto">
                                                <a class="content-link" href="#"><i class="fas fa-reply"></i>&nbsp;&nbsp;수정</a>
                                            </div>
                                            <div class="col-auto">
                                                <a class="content-link" href="#"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;삭제</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-entity">
                                    <div class="entity-inner">
                                        <div class="entity-content">
                                            <h4 class="entity-title">박종원</h4>
                                            <p class="entity-subtext">09.08.2018, 11:33</p>
                                            <p class="entity-text">제가 느끼기에도 영화 시간이 긴 편인데도 불구하고 화장실 한번 안가고 계속 봤네요!
                                            </p>
                                        </div>
                                        <div class="entity-extra">
                                            <div class="grid-md row">
                                                <div class="ml-sm-auto col-auto">
                                                    <a class="content-link" href="#"><i class="fas fa-reply"></i>&nbsp;&nbsp;수정</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a class="content-link" href="#"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;삭제</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-entity">
                                <div class="entity-inner">
                                    <div class="entity-content">
                                        <h4 class="entity-title">촤촤촤</h4>
                                        <p class="entity-subtext">11.05.2018, 07:23</p>
                                        <p class="entity-text">스토리도 별로고, 사운드적인 부분을 기대했는데 많이 아쉽네요.
                                        </p>
                                    </div>
                                    <div class="entity-extra">
                                        <div class="grid-md row">
                                            <div class="col-12 col-sm-auto">
                                                <div class="entity-rating">
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon text-theme"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                    <span class="entity-rating-icon"><i class="fas fa-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="ml-sm-auto col-auto">
                                                <a class="content-link" href="#"><i class="fas fa-reply"></i>&nbsp;&nbsp;수정</a>
                                            </div>
                                            <div class="col-auto">
                                                <a class="content-link" href="#"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;삭제</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </section>
                </div>
                <div class="sidebar section-long order-lg-last">
                    <section class="section-sidebar">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">이전 영화</h2>
                        </div>
                        <div class="movie-short-line-entity">
                            <a class="entity-preview" href="movie-info-sidebar-right.html">
                                <span class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="http://ticketimage.interpark.com/Movie/still_image/V14/V1401521p_s01.gif" alt="" />
                                </span>
                            </a>
                            <div class="entity-content">
                                <h4 class="entity-title">
                                    <a class="content-link" href="movie-info-sidebar-right.html">명량</a>
                                </h4>
                                <p class="entity-subtext">2022년 11월 16일</p>
                            </div>
                        </div>
                        <div class="movie-short-line-entity">
                            <a class="entity-preview" href="movie-info-sidebar-right.html">
                                <span class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="https://an2-img.amz.wtchn.net/image/v2/8Z3JLFuVv4znX6RfU246kA.jpg?jwt=ZXlKaGJHY2lPaUpJVXpJMU5pSjkuZXlKdmNIUnpJanBiSW1SZk56STVlREV3T0RCeE9EQWlYU3dpY0NJNklpOTJNaTl6ZEc5eVpTOXBiV0ZuWlM4eE5qTTFPRFExTURJeU5EazVNVGN5TlRRekluMC4wQ05vUGJUWGxleFhoVzBXdFFtSjVFWmtfX3lRaWdlcGlGbnFmUTFlTkNN" alt="" />
                                </span>
                            </a>
                            <div class="entity-content">
                                <h4 class="entity-title">
                                    <a class="content-link" href="movie-info-sidebar-right.html">극한직업</a>
                                </h4>
                                <p class="entity-subtext">2021년 7월 4일</p>
                            </div>
                        </div>
                        <div class="movie-short-line-entity">
                            <a class="entity-preview" href="movie-info-sidebar-right.html">
                                <span class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="https://t1.daumcdn.net/movie/ae457b72c9a9ec2c8d2f44a893098ec060f0e598" alt="" />
                                </span>
                            </a>
                            <div class="entity-content">
                                <h4 class="entity-title">
                                    <a class="content-link" href="movie-info-sidebar-right.html">신과함께-죄와 벌</a>
                                </h4>
                                <p class="entity-subtext">2020년 6월 27일</p>
                            </div>
                        </div>
                    </section>
                    <section class="section-sidebar">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">월별 영화</h2>
                        </div>
                        <ul class="list-unstyled list-wider list-categories">
                            <li>
                                <a class="content-link text-uppercase" href="#">2022년 11월</a>
                            </li>
                            <li>
                                <a class="content-link text-uppercase" href="#">2022년 10월</a>
                            </li>
                            <li>
                                <a class="content-link text-uppercase" href="#">2022년 09월</a>
                            </li>
                            <li>
                                <a class="content-link text-uppercase" href="#">2022년 08월</a>
                            </li>
                        </ul>
                    </section>
                    <section class="section-sidebar">
                        <a class="d-block" href="#">
                            <img class="w-100" src="data:image/png;base64,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" alt="" />
                        </a>
                    </section>
                </div>
            </div>
        </div>
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