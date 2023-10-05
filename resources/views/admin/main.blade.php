<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TEAM 12 CINEMA 관리자</title>
        <link href="{{ asset('my/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('my/css/my.css') }}" rel="stylesheet">
    <script src="{{ asset('my/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('my/js/popper.js') }}"></script>
    <script src="{{ asset('my/js/bootstrap.min.js') }}"></script>
	
	<script src="{{ asset('my/js/moment-with-locales.min.js') }}"> </script>
	<script src="{{ asset('my/js/bootstrap5-datetimepicker.js') }}"> </script>
	<link href="{{ asset('my/css/bootstrap5-datetimepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('my/css/all.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('admin/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('/favicons/favicon-16x16.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="http://gamejigix.induk.ac.kr/~team12/cinema/public/adm1n">CINEMA 관리자</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    @if(!session()->exists("member_id"))
                    <a href="#" class="btn btn-sm btn-outline-secondary btn-dark" data-bs-toggle='modal' data-bs-target='#exampleModal'>
					로그인</a>
					@else
						<a href="{{ url('login/logout') }}" class="btn btn-sm btn-outline-secondary btn-dark">로그아웃</a>
					@endif
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">MAIN</div>
                            <a class="nav-link" href="http://gamejigix.induk.ac.kr/~team12/cinema/public/adm1n">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">영화</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                영화관 관련
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('cinema.index') }}">영화관 정보</a>
                                    <a class="nav-link" href="{{ route('seat.index') }}">영화관 좌석</a>
                                    <a class="nav-link" href="{{ route('screentime.index') }}">상영시간</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link" href="{{ route('movie.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                영화
                            </a>
                            
                            
                            <div class="sb-sidenav-menu-heading">기타</div>
                            <a class="nav-link" href="{{ route('director.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                영화 감독
                            </a>
                            <a class="nav-link" href="{{ route('genre.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                영화 장르
                            </a>

                            <a class="nav-link" href="{{ route('product.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                상품 정보
                            </a>

                            <a class="nav-link" href="{{ route('member.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                회원
                            </a>

                            <a class="nav-link" href="{{ route('news.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                뉴스
                            </a>

                            <a class="nav-link" href="{{ route('event.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                이벤트
                            </a>

                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        영화관 관리자 페이지
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                @yield('content')
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Team12 Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{asset('admin/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('admin/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

           <div class="modal-header mycolor1">
               <h5 class="modal-title" id="exampleModalLabel">로그인</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>

           <div class="modal-body bg-light">
              <form name="form_login" method="post" action="{{ url('login/check') }}">
              @csrf
              <table class="table table-borderless mymargin5">
                  <tr>
                      <td width="30%"><h6>아이디</h6></td>
                      <td width="70%"><input type="text" name="member_id" class="form-control"></td>
                  </tr>
                  <tr>
                      <td><h6>암&nbsp;호</h6></td>
                      <td><input type="password" name="password" class="form-control"></td>
                  </tr>
              </table>
              </form>
          </div>

          <div class="modal-footer alert-secondary">
              <button type="button" class="btn btn-sm btn-secondary" onclick="javascript:form_login.submit();">확인</button>
              <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">닫기</button>
          </div>
       </div>
   </div>
</div>