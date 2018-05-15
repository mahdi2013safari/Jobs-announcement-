@include('land_page.header')
@include('land_page.menu')
@include('land_page.slide')

<div class="section">
    <div class="container">
        @yield('content_page')
    </div>
</div>

@include('land_page.widget')
@include('land_page.footer')