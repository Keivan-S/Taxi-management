<!DOCTYPE html>
<html lang="fa">


@include('layouts.head')


<body class="fix-header fix-sidebar card-no-border">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        @include('layouts.header')

        @include('layouts.rightSideBar')

        <div class="page-wrapper">

            @yield('content')

            @include('layouts.footer')

        </div>

    </div>

@include('layouts.script')
</body>

</html>
