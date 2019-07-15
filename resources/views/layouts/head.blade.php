<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/custom-bootstrap-rtl.css')}}">
    <!-- chartist CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/chartist-init.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/css-chart.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- You can change the theme colors from here -->
    <link rel="stylesheet" href="{{asset('assets/css/blue.css')}}s" id="theme">
    <!-- Scripts -->
   {{-- <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

</head>

