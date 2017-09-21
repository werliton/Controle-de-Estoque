@include('layout.header')
<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Caúra Materiais de Construção</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">

        <div class="profile_info">
            <span>Welcome,</span>
            <h2>John Doe</h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br/>
    <!-- sidebar menu -->
    @include('layout.menu-caixa')
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    @include('layout.menu-footer')
    <!-- /menu footer buttons -->
</div>
</div>

<!-- top navigation -->
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">

    <div class="row">
    @yield('content')
    </div>
</div>
<!-- /page content -->

<!-- footer content -->
@include('layout.footer')