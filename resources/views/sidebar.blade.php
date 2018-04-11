<div class="sidebar" id="sidebar">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>


    <ul class="nav nav-list">
        <li class="active">
            <a href="{{ url('myadmin/') }}">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
        </li>

        {{--slider--}}
        <li class="item-red">
            <a href="#" class="dropdown-toggle">
                <i class="icon-desktop"></i>
                <span class="menu-text"> Manşet </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="{{ url('myadmin/slider/create') }}">
                        <i class="icon-double-angle-right"></i>
                        <span class="menu-text"> Yeni </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('myadmin/slider') }}">
                        <i class="icon-double-angle-right"></i>
                        <span class="menu-text"> Hamısı </span>
                    </a>
                </li>
            </ul>
        </li>
        {{--slider video--}}

        {{--gallery--}}
        <li class="item-green">
            <a href="#" class="dropdown-toggle">
                <i class="icon-picture"></i>
                <span class="menu-text"> Qalereya </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="{{ url('myadmin/galleries/create') }}">
                        <i class="icon-double-angle-right"></i>
                        <span class="menu-text"> Yeni </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('myadmin/galleries') }}">
                        <i class="icon-double-angle-right"></i>
                        <span class="menu-text"> Hamısı </span>
                    </a>
                </li>
            </ul>
        </li>
        {{--gallery end--}}

        {{--custom pages--}}
        <li class="item-orange">
            <a href="{{ url('myadmin/about-us') }}" class="dropdown-toggle">
                <i class="icon-info"></i>
                <span class="menu-text"> Haqqımızda </span>
            </a>
        </li>
        <li class="item-orange">
            <a href="{{ url('myadmin/property_detail') }}" class="dropdown-toggle">
                <i class="icon-info"></i>
                <span class="menu-text"> Ətraflı Məlumat </span>
            </a>
        </li>
        <li class="item-red2">
            <a href="{{ url('myadmin/map') }}" class="dropdown-toggle">
                <i class="icon-map-marker"></i>
                <span class="menu-text"> Xəritə </span>
            </a>
        </li>
        <li class="item-green2">
            <a href="{{ url('myadmin/contact_us') }}" class="dropdown-toggle">
                <i class="icon-envelope"></i>
                <span class="menu-text"> Bizimlə Əlaqə </span>
            </a>
        </li>
        <li class="item-blue2">
            <a href="{{ url('myadmin/our_agent') }}" class="dropdown-toggle">
                <i class="icon-user"></i>
                <span class="menu-text"> Satış Nümayəndəmiz </span>
            </a>
        </li>
        {{--end custom pages--}}

        {{--TESTI MONIALS--}}
        <li class="item-brown">
            <a href="#" class="dropdown-toggle">
                <i class="icon-comment"></i>
                <span class="menu-text"> Rəylər</span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="{{ url('myadmin/testimonials/create') }}">
                        <i class="icon-double-angle-right"></i>
                        <span class="menu-text"> Yeni </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('myadmin/testimonials') }}">
                        <i class="icon-double-angle-right"></i>
                        <span class="menu-text"> Bütün Rəylər</span>
                    </a>
                </li>
            </ul>
        </li>
        {{--end TESTI MONIALS--}}


        {{--category--}}
        {{--<li class="item-purple">--}}
            {{--<a href="{{ url('myadmin/categories') }}">--}}
                {{--<i class="icon-align-justify"></i>--}}
                {{--<span class="menu-text"> Kateqoriyalar </span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--end category--}}


        {{--Users--}}
        <li class="item-grey">
            <a href="{{ url('myadmin/users') }}">
                <i class="icon-user" aria-hidden="true"></i>
                <span class="menu-text"> İstifadəçilər </span>
            </a>
        </li>
        {{--end Users--}}

        {{--Settings--}}
        {{--<li>--}}
            {{--<a href="{{ url('myadmin/settings') }}">--}}
                {{--<i class="icon-cogs" aria-hidden="true"></i>--}}
                {{--<span class="menu-text"> Tənzimləmələr </span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--end Settings--}}

    </ul><!-- /.nav-list -->

    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>