<header class="header menu_fixed">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
    <ul id="top_menu">
        @if (session("user_id"))
        <li><a href=""><i class="fa-regular fa-user" style="margin-top: 8px;font-size: 22px;color: white;font-weight: bold"></i></a></li>
        <li><a href="/logout"><i class="fa-solid fa-arrow-right-from-bracket" style="margin-top: 8px;font-size: 22px;color: white;"></i></a></li>
        @else
        <li><a href="{{route('login_index')}}" ><i class="fa-solid fa-arrow-right-to-bracket" style="margin-top: 8px;font-size: 22px;color: white;"></i></a></li>
        @endif
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="#0">Home</a></span>
            </li>
            <li><span><a href="#0">Events</a></span>
            </li>
        </ul>
    </nav>
</header>
