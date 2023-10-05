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
            <div class="d-background" data-image-src="https://media-cdn.tripadvisor.com/media/photo-s/1b/79/11/1f/new-village-snack-bar.jpg" data-parallax="scroll"></div>
            <div class="d-background bg-black-80"></div>
            <div class="top-block top-inner container">
                <div class="top-block-content">
                    <h1 class="section-title">음식</h1>
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="#">시작 화면</a>
                        <span class="text-theme mx-2"><i class="fas fa-chevron-right"></i></span>
                        <span>음식</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-long">
            <div class="container">
                <div class="grid row">
                @foreach ($list  as  $row)
                <?
                    $iname = $row->pic ? $row->pic : "";
                ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="gallery-entity">
                            <div class="entity-preview" data-role="hover-wrap">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img class="embed-responsive-item" src="{{asset('/storage/product_img/' . $iname) }}" alt="" />
                                </div>
                                <div class="d-over bg-black-40 collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                    <div class="entity-view-popup">
                                        <a class="content-link action-icon-bordered rounded-circle" href="{{asset('/storage/product_img/' . $iname) }}" data-magnific-popup="image">
                                            <span class="icon-content"><i class="fas fa-search"></i></span>
                                        </a>
                                    </div>
                                    <h4 class="entity-title" style="font-size:30px">{{$row->name}} &nbsp; {{$row->price}}</h4>
                                </div>
                            </div>
                            <p align="center" style="font-size:20px">{{$row->name}} &nbsp;{{$row->price}}원</p>
                        </div>
                    </div>
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