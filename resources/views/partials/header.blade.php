<header id="site-header" class="site-header" role="banner">
    <div class="container">
        <div class="site-logo-wrap">
            <hgroup>
                <h1 style ="align:center" class='site-title site-title-no-desc'> <a  style="color:#FFFFFF;" href='{{ route('home') }}' title='CariTempat' rel='home'>Cari Tempat</a></h1>
            </hgroup>
        </div>
        <nav id="primary-nav" class="primary-nav" role="navigation">
            <ul id="menu-gd-menu" class="menu">
                @guest
                    <li><a href="#">Cari tempat fun di jakarta </a></li>
                     <!--
                    <li class="gd-menu-item menu-item menu-item-type-post_type_archive"><a href="{{ route('register') }}">Register</a></li> -->
                @else
                    <li class="gd-menu-item menu-item menu-item-type-post_type_archive"><a href="{{ route('admin.shops.index') }}">Kelola Tempat</a></li>
                    <li class="gd-menu-item menu-item menu-item-type-post_type_archive"><a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">Logout</a></li>
                    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </ul>
        </nav>
        <div class="dt-nav-toggle  dt-mobile-nav-button-wrap"><a href="#primary-nav"><i class="fas fa-bars"></i></a></div>
    </div>
</header>
