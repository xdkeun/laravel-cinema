<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>TEAM 12 CINEMA</title>
        <!-- Bootstrap -->
        <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Animate.css -->
        <link href="./animate.css/animate.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome iconic font -->
        <link href="./fontawesome/css/fontawesome-all.css" rel="stylesheet" type="text/css" />
        <!-- Magnific Popup -->
        <link href="./magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- Slick carousel -->
        <link href="./slick/slick.css" rel="stylesheet" type="text/css" />
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <!-- Theme styles -->
        <link href="./css/dot-icons.css" rel="stylesheet" type="text/css">
        <link href="./css/theme.css" rel="stylesheet" type="text/css">
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
        <section class="after-head d-flex section-text-white position-relative">
            <div class="d-background" data-image-src="http://news.kbs.co.kr/news/kbs24_thumb.jpg" data-parallax="scroll"></div>
            <div class="d-background bg-black-80"></div>
            <div class="top-block top-inner container">
                <div class="top-block-content">
                    <h1 class="section-title">뉴스</h1>
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="#">시작 화면</a>
                        <span class="text-theme mx-2"><i class="fas fa-chevron-right"></i></span>
                        <span>뉴스</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="sidebar-container">
                <div class="content">
                    <section class="section-long">
                    @foreach ($list  as  $row)
                    <?
                        $iname = $row->pic ? $row->pic : "";
                    ?>
                        <article class="article-tape-entity">
                            <a class="entity-preview" href="#" data-role="hover-wrap">
                                <span class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="{{asset('/storage/product_img/' . $iname) }}" alt="" />
                                </span>
                                <span class="entity-date">
                                    <span class="tape-block tape-horizontal tape-single bg-theme text-white">
                                        <span class="tape-dots"></span>
                                        <span class="tape-content m-auto" align="center">{{$row->date}}</span>
                                        <span class="tape-dots"></span>
                                    </span>
                                </span>
                                <span class="d-over bg-black-80 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                    <span class="m-auto"><i class="fas fa-search"></i></span>
                                </span>
                            </a>
                            <div class="entity-content">
                                <h4 class="entity-title">
                                    <a class="content-link" href="#">{{$row->title}}</a>
                                </h4>
                                <div class="entity-category">
                                    <a class="content-link" href="#">{{$row->writer}}</a>

                                </div>
                                <p class="text-short entity-text">{{$row->content}}
                                </p>
                                <div class="entity-actions">
                                    <a class="text-uppercase" href="#">더 보기</a>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </section>
                </div>
                <div class="sidebar section-long order-lg-last">
                    <section class="section-sidebar">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">이전 뉴스</h2>
                        </div>
                        <div class="article-short-line-entity">
                            <a class="entity-preview" href="article-sidebar-right.html">
                                <span class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="data:image/jpeg;base64,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" alt="" />
                                </span>
                            </a>
                            <div class="entity-content">
                                <h4 class="entity-title">
                                    <a class="content-link" href="article-sidebar-right.html">뉴스 제목</a>
                                </h4>
                                <p class="entity-subtext">2022년 12월 18일</p>
                            </div>
                        </div>
                        <div class="article-short-line-entity">
                            <a class="entity-preview" href="article-sidebar-right.html">
                                <span class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="data:image/jpeg;base64,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" alt="" />
                                </span>
                            </a>
                            <div class="entity-content">
                                <h4 class="entity-title">
                                    <a class="content-link" href="article-sidebar-right.html">종강 뉴스</a>
                                </h4>
                                <p class="entity-subtext">2022년 12월 15일</p>
                            </div>
                        </div>
                        <div class="article-short-line-entity">
                            <a class="entity-preview" href="article-sidebar-right.html">
                                <span class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="https://streaming.hcn.co.kr/uccm_thumbnail/CO01/030211.mp4.05.jpg" alt="" />
                                </span>
                            </a>
                            <div class="entity-content">
                                <h4 class="entity-title">
                                    <a class="content-link" href="article-sidebar-right.html">'신종 코로나' <br>주춤해진 단속</a>
                                </h4>
                                <p class="entity-subtext">2022년 12월 13일</p>
                            </div>
                        </div>
                    </section>
                    <section class="section-sidebar">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">월별 뉴스</h2>
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
                            <img class="w-100" src="https://play-lh.googleusercontent.com/gGmIE5gtfniYCiDjomvILsTw1ix7_XZ3HDYoH9W1x3xjklu7_XrIYri2U1XSBGjErbs" alt="" />
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
            </div>
        </footer>
        <!-- jQuery library -->
        <script src="./js/jquery-3.3.1.js"></script>
        <!-- Bootstrap -->
        <script src="./bootstrap/js/bootstrap.js"></script>
        <!-- Paralax.js -->
        <script src="./parallax.js/parallax.js"></script>
        <!-- Waypoints -->
        <script src="./waypoints/jquery.waypoints.min.js"></script>
        <!-- Slick carousel -->
        <script src="./slick/slick.min.js"></script>
        <!-- Magnific Popup -->
        <script src="./magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Inits product scripts -->
        <script src="./js/script.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ4Qy67ZAILavdLyYV2ZwlShd0VAqzRXA&callback=initMap"></script>
        <script async defer src="https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/js/rating.js"></script>
    </body>
</html>