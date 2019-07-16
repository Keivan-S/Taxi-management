<!DOCTYPE html>
<html lang="en" dir="rtl">

@include('layouts.head')

<body class="fix-header fix-sidebar card-no-border">

<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>

<div id="main-wrapper">

    @include('layouts.header')

    @include('layouts.sidebar')

    <div class="page-wrapper">

        @yield('content')

        @include('layouts.footer')

    </div>

</div>

@include('layouts.script')
@yield('script')

</body>

</html>
