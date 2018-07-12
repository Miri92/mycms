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

        {{--posts--}}
        <li class="item-red">
            <a href="#" class="dropdown-toggle">
                <i class="icon-desktop"></i>
                <span class="menu-text"> Posts </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="{{ url('myadmin/posts/create') }}">
                        <i class="icon-double-angle-right"></i>
                        <span class="menu-text"> Yeni </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('myadmin/posts') }}">
                        <i class="icon-double-angle-right"></i>
                        <span class="menu-text"> Hamısı </span>
                    </a>
                </li>
            </ul>
        </li>
        {{--posts video--}}



        {{--category--}}
        {{--<li class="item-purple">--}}
            {{--<a href="{{ url('myadmin/categories') }}">--}}
                {{--<i class="icon-align-justify"></i>--}}
                {{--<span class="menu-text"> Kateqoriyalar </span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--end category--}}

        {{--menus--}}
        <li class="item-purple">
        <a href="{{ url('myadmin/menus') }}">
        <i class="icon-align-justify"></i>
        <span class="menu-text"> Menus </span>
        </a>
        </li>
        {{--end menus--}}


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