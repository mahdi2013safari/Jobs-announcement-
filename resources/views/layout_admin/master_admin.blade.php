
@include('layout_admin.header');
@include('layout_admin.nav_side');
@include('layout_admin.rib_bar');

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            @yield('content');
        </div><!-- .row -->
    </div><!-- .animated -->
</div><!-- .content -->

@include('layout_admin.footer');





