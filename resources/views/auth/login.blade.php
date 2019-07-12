<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('plugins/bootstrap-rtl/css/rtl/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register" style="background-image:url({{asset('images/background/login-register.jpg')}});">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform"  method="POST" action="{{ route('login') }}" >
                    <h3 class="box-title mb-3">ورود</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name='mobile_no' type="text" {{ old('mobile_no') }}  placeholder="شماره همراه" autofocus> </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary float-left pt-0">
                                <input id="checkbox-remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-signup"> مرا به خاطر بسپار </label>
                            </div> </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">بررسی شماره</button>
                        </div>
                    </div>
                    @csrf

                </form>
                <form class="form-horizontal" id="passform"  method="POST" action="{{ route('login') }}" style="display:none">
                    @csrf
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>رمز عبور</h3>
                            <p class="text-muted">رمز عبور به تلفن همراه شما پیامک شد</p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="password"> </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('plugins/jquery/jquery.min.js')  }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('plugins/bootstrap/js/popper.min.js')  }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')  }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js')  }}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js')  }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('js/sidebarmenu.js')  }}"></script>
<!--stickey kit -->
<script src="{{ asset('plugins/sticky-kit-master/dist/sticky-kit.min.js')  }}"></script>
<script src="{{ asset('plugins/validate/jquery.validate.js')  }}"></script>
<script src="{{ asset('plugins/validate/additional-methods.js')  }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('js/custom.min.js')  }}"></script>
<script src="{{ asset('js/pages/login.js')  }}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ asset('plugins/styleswitcher/jQuery.style.switcher.js')  }}"></script>
</body>



</html>
