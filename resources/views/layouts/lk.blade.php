<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('/images/favicon-32x32.png') }}" type="image/png"/>
    <!--plugins-->
    <link href="{{ asset('/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet"/>
    <!-- loader-->
    <link href="{{ asset('/css/pace.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('/css/dark-theme.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/semi-dark.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/header-colors.css') }}"/>

    <link href="{{ asset('/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />

    <title>@yield('page-title') | SystemADS</title>
</head>

<body>
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Rukada</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('home') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Панель</div>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-wallet"></i>
                    </div>
                    <div class="menu-title">Финансы</div>
                </a>
                <ul>
                    <li><a href="{{ route('finance-history') }}"><i class="bx bx-right-arrow-alt"></i>История</a>
                    </li>
                    <li><a href="{{ route('finance-withdraw') }}"><i class="bx bx-right-arrow-alt"></i>Вывести</a>
                    </li>
                    <li><a href="{{ route('finance-pay') }}"><i class="bx bx-right-arrow-alt"></i>Пополнить</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-trending-up"></i>
                    </div>
                    <div class="menu-title">Рекламодателям</div>
                </a>
                <ul>
                    <li><a href="{{ route('offer-add') }}"><i class="bx bx-right-arrow-alt"></i>Добавить оффер</a>
                    </li>
                    <li><a href="{{ route('offer-my') }}"><i class="bx bx-right-arrow-alt"></i>Мои офферы</a>
                    </li>
                    <li><a href="{{ route('offer-api') }}"><i class="bx bx-right-arrow-alt"></i>Интеграция</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-dollar"></i>
                    </div>
                    <div class="menu-title">Вебмастерам</div>
                </a>
                <ul>
                    <li><a href="{{ route('offers-links') }}"><i class="bx bx-right-arrow-alt"></i>Ссылки</a>
                    </li>
                    <li><a href="{{ route('offers-catalog') }}"><i class="bx bx-right-arrow-alt"></i>Каталог офферов</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-group"></i>
                    </div>
                    <div class="menu-title">Партнерская <br> система</div>
                </a>
                <ul>
                    <li><a href="{{ route('partners') }}"><i class="bx bx-right-arrow-alt"></i>Данные по партнерам</a>
                    </li>
                    <li><a href="{{ route('offers-catalog') }}"><i class="bx bx-right-arrow-alt"></i>Привлечение Рекламодателей</a>
                    </li>
                    <li><a href="{{ route('offers-catalog') }}"><i class="bx bx-right-arrow-alt"></i>Привлечение Веб-мастеров</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('support') }}">
                    <div class="parent-icon"><i class='bx bx-support'></i>
                    </div>
                    <div class="menu-title">Тех. Поддержка</div>
                </a>
            </li>

            <li>
                <a href="{{ route('faq') }}">
                    <div class="parent-icon"><i class='bx bx-question-mark'></i>
                    </div>
                    <div class="menu-title">FAQ</div>
                </a>
            </li>

            <li>
                <a href="{{ route('knowledge') }}">
                    <div class="parent-icon"><i class='bx bx-book-open'></i>
                    </div>
                    <div class="menu-title">База знаний</div>
                </a>
            </li>

            <li>
                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="parent-icon">
                        <i class='bx bx-log-out-circle'></i>
                    </div>
                    <div class="menu-title">Выход</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <!--div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">
                        <input type="text" class="form-control search-control" placeholder="Type to search..."> <span
                            class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                        <span class="position-absolute top-50 search-close translate-middle-y"><i
                                class='bx bx-x'></i></span>
                    </div>
                </div-->
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-icon">
                            <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                            </a>
                        </li>
                        <!--li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="row row-cols-3 g-3 p-3">
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-cosmic text-white"><i
                                                class='bx bx-group'></i>
                                        </div>
                                        <div class="app-title">Teams</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-burning text-white"><i
                                                class='bx bx-atom'></i>
                                        </div>
                                        <div class="app-title">Projects</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-lush text-white"><i
                                                class='bx bx-shield'></i>
                                        </div>
                                        <div class="app-title">Tasks</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i
                                                class='bx bx-notification'></i>
                                        </div>
                                        <div class="app-title">Feeds</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-blues text-dark"><i
                                                class='bx bx-file'></i>
                                        </div>
                                        <div class="app-title">Files</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                                class='bx bx-filter-alt'></i>
                                        </div>
                                        <div class="app-title">Alerts</div>
                                    </div>
                                </div>
                            </div>
                        </li-->
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                               role="button" data-bs-toggle="dropdown" aria-expanded="false"> <!--span class="alert-count">7</span-->
                                <i class='bx bx-bell'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Уведомления</p>
                                        <p class="msg-header-clear ms-auto">Отметить все прочитанными</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <!--a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i
                                                    class="bx bx-group"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Добро пожаловать!<span class="msg-time float-end">14 Sec
												ago</span></h6>
                                                <p class="msg-info">Здесь будут появлятся важные <br> уведомления</p>
                                            </div>
                                        </div>
                                    </a-->
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">Все уведомления</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                               role="button" data-bs-toggle="dropdown" aria-expanded="false"> <!--span class="alert-count">0</span-->
                                <i class='bx bx-comment'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Сообщения</p>
                                        <p class="msg-header-clear ms-auto">Отметить все прочитанными</p>
                                    </div>
                                </a>
                                <div class="header-message-list">
                                    <!--a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="/images/avatars/avatar-1.png" class="msg-avatar"
                                                     alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
												ago</span></h6>
                                                <p class="msg-info">The standard chunk of lorem</p>
                                            </div>
                                        </div>
                                    </a-->
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">Все сообщения</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://e7.pngegg.com/pngimages/165/652/png-clipart-businessperson-computer-icons-avatar-avatar-heroes-public-relations.png" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                            <p class="designattion mb-0">{{ Auth::user()->balance }}₽</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ url('/settings') }}"><i class="bx bx-cog"></i><span>Настройки</span></a>
                        </li>
{{--                        <li><a class="dropdown-item" href="javascript:;"><i--}}
{{--                                    class='bx bx-download'></i><span>Downloads</span></a>--}}
{{--                        </li>--}}
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class='bx bx-log-out-circle'></i>
                                <span>Выход</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->

    @yield('content')

    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
</div>

<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }} </form>

<!--end wrapper-->
<!--start switcher-->
{{--<div class="switcher-wrapper">--}}
{{--    <div class="switcher-btn"><i class='bx bx-cog bx-spin'></i>--}}
{{--    </div>--}}
{{--    <div class="switcher-body">--}}
{{--        <div class="d-flex align-items-center">--}}
{{--            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>--}}
{{--            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>--}}
{{--        </div>--}}
{{--        <hr/>--}}
{{--        <h6 class="mb-0">Theme Styles</h6>--}}
{{--        <hr/>--}}
{{--        <div class="d-flex align-items-center justify-content-between">--}}
{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>--}}
{{--                <label class="form-check-label" for="lightmode">Light</label>--}}
{{--            </div>--}}
{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">--}}
{{--                <label class="form-check-label" for="darkmode">Dark</label>--}}
{{--            </div>--}}
{{--            <div class="form-check">--}}
{{--                <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">--}}
{{--                <label class="form-check-label" for="semidark">Semi Dark</label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <hr/>--}}
{{--        <div class="form-check">--}}
{{--            <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">--}}
{{--            <label class="form-check-label" for="minimaltheme">Minimal Theme</label>--}}
{{--        </div>--}}
{{--        <hr/>--}}
{{--        <h6 class="mb-0">Header Colors</h6>--}}
{{--        <hr/>--}}
{{--        <div class="header-colors-indigators">--}}
{{--            <div class="row row-cols-auto g-3">--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor1" id="headercolor1"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor2" id="headercolor2"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor3" id="headercolor3"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor4" id="headercolor4"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor5" id="headercolor5"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor6" id="headercolor6"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor7" id="headercolor7"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator headercolor8" id="headercolor8"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <hr/>--}}
{{--        <h6 class="mb-0">Sidebar Backgrounds</h6>--}}
{{--        <hr/>--}}
{{--        <div class="header-colors-indigators">--}}
{{--            <div class="row row-cols-auto g-3">--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}
<!--end switcher-->
<!-- Bootstrap JS -->
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('/plugins/jquery-knob/excanvas.js') }}"></script>
<script src="{{ asset('/plugins/jquery-knob/jquery.knob.js') }}"></script>
<script src="{{ asset('/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script>
    $(function () {
        $(".knob").knob();
    });
</script>
<script src="{{ asset('/js/index.js') }}"></script>
<!--app JS-->
<script src="{{ asset('/js/app.js') }}"></script>

@yield('post-upload')
</body>

</html>
