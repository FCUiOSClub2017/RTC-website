{{--
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">{{config('app.name', 'Laravel')}}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                        <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                        <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                        <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other Pages</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="full-width.html">Full Width Page</a>
                        <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404</a>
                        <a class="dropdown-item" href="pricing.html">Pricing Table</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
    <div class="container">
        <a class="navbar-brand" data-href="{{URL::secure('home')}}" href="{{ route('home')}}"><img src="img/rtclogo.png" alt="RTC" height="39px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">移動應用創新賽</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="https://rtc-2021.fcu.edu.tw">2021 移動應用創新賽</a>
                        <a class="dropdown-item" href="https://rtc-2020.fcu.edu.tw">2020 移動應用創新賽</a> 
                        <a class="dropdown-item" href="https://rtc-2019.fcu.edu.tw">2019 移動應用創新賽</a> 
                        <a class="dropdown-item" href="https://rtc-2018.fcu.edu.tw">2018 移動應用創新賽</a>
                        <a class="dropdown-item" href="https://rtc-2017.fcu.edu.tw">2017 移動應用創新賽</a>
                    </div>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" data-href="{{URL::secure('home')}}" onclick="Load_with_axios(this)" href="{{ route('home')}}">首頁</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" data-href="{{URL::secure('intro')}}" onclick="Load_with_axios(this)" href="#intro">介绍</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" data-href="{{URL::secure('intro')}}" href="{{ route('intro')}}">關於RTC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-href="{{URL::secure('teacher')}}" onclick="Load_with_axios(this)" href="#teacher">教學團隊</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-href="{{URL::secure('rule')}}" onclick="Load_with_axios(this)" href="#rule">空間使用須知</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-href="{{URL::secure('contact')}}" onclick="Load_with_axios(this)" href="#contact">聯絡辦公室</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lesson.index')}}">Apple系列課程</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/FCURTC/" onclick="window.open(this.href);return false;">Facebook粉絲專頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bold" href="https://iosclub.tw/" onclick="window.open(this.href);return false;">iOS Club</a>
                </li>
                {{--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">More</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" onclick="Load_with_axios(this)" href="#about" data-href="{{URL::secure('about')}}">About</a>
                        <a class="dropdown-item" onclick="Load_with_axios(this)" href="#contact" data-href="{{URL::secure('contact')}}">Contact</a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
