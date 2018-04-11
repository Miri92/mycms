<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>ObaVilla</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="csrf-token" content="{{ Session::token() }}">
    <!-- basic styles -->

    <link href="{{ asset('/ace/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/ace/css/font-awesome.min.css') }}" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="{{ asset('/ace/css/font-awesome-ie7.min.css') }}" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel="stylesheet" href="{{ asset('/ace/css/ace-fonts.css') }}" />

    <!-- ace styles -->

    <link rel="stylesheet" href="{{ asset('/ace/css/ace.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/ace/css/ace-rtl.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/ace/css/ace-skins.min.css') }}" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="{{ asset('/ace/css/ace-ie.min.css') }}" />
    <![endif]-->

@stack('css')

<!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="{{ asset('/ace/js/ace-extra.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="{{ asset('/ace/js/html5shiv.js') }}"></script>
    <script src="{{ asset('/ace/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="{{url('/')}}" class="navbar-brand">
                {{--<img src="{{ asset(config('app.app_logo')) }}" alt="logo" class="img-responsive">--}}
                <span style="margin-top:10px;display: block;">ObaVilla</span>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a href="{{ url('/') }}" target="_blank" class="dropdown-toggle">
                        <i class="icon-home" aria-hidden="true"></i>
                        Sayta Bax
                    </a>
                </li>

                @if(Auth::user())
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">

                        {{ Auth::user()->name }}

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                        <li>
                            <a href="{{ route('admin.users.edit',['id'=>Auth::user()->id]) }}">
                                <i class="icon-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="icon-off"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>
{{-- end #navbar--}}

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>
        @include('mycms::sidebar')
        <div class="main-content">
            @yield('content')
        </div><!-- /.main-content -->
        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Seç Skin</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        Inside
                        <b>.container</b>
                    </label>
                </div>
            </div>
        </div><!-- /#ace-settings-container -->
    </div><!-- /.main-container-inner -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='{{ asset('/ace/js/jquery-2.0.3.min.js')}}'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{ asset('/ace/js/jquery-1.10.2.min.js')}}'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='{{ asset('/ace/js/jquery.mobile.custom.min.js')}}') }}">+"<"+"/script>");
</script>

<script src="{{ asset('/ace/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/ace/js/typeahead-bs2.min.js') }}"></script>

<!-- page specific plugin scripts -->



<!-- ace scripts -->

<script src="{{ asset('/ace/js/ace-elements.min.js') }}"></script>
<script src="{{ asset('/ace/js/ace.min.js') }}"></script>

<!-- inline scripts related to this page -->
@stack('script-links')

@stack('scripts')

</body>
</html>