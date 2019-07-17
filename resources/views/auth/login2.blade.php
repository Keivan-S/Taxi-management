<!DOCTYPE html>
<html lang="en">


<head>
    <title>ورود</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap/css/bootstrap.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
   {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/icon-font.min.css')}}">--}}
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/login/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/login/util.css')}}">
    <!--===============================================================================================-->
</head>


<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url({{url('assets/images/background/bg1.jpg')}});">
        <div class="wrap-login100 p-t-190 p-b-30">


            <form  class="login100-form validate-form" id="loginform"  method="POST" action="{{ route('login') }}">
                @csrf

                <div class="login100-form-avatar">
                    <img src="{{asset('assets/images/admin.png')}}" alt="AVATAR">
                </div>

                <span class="login100-form-title p-t-20 p-b-45">
						ورود مدیر
                </span>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "وارد کردن شماره همراه الزامی است">
                    <input class="input100" name='mobile_no' type="text" {{ old('mobile_no') }}  placeholder="شماره همراه" autofocus>
                    <span class="focus-input100"></span>

                    <span class="symbol-input100">
							<i class="fa fa-mobile" ></i>
                    </span>
                </div>

                <div class="container-login100-form-btn p-t-10">
                    <button id="btn_check_no" type="submit" class="login100-form-btn">
                        چک کردن شماره
                    </button>
                </div>

            </form>



            <form class="login100-form validate-form" id="passform"  method="POST" action="{{ route('login') }}" style="display:none">
                @csrf

                <div class="login100-form-avatar">
                    <img src="{{asset('assets/images/login/admin.png')}}" alt="AVATAR">
                </div>

                <span class="login100-form-title p-t-20 p-b-45">
						ورود مدیر
                </span>

                <div class="wrap-input100 validate-input m-b-10">
                    <div class="col-xs-12">
                        <h3>رمز عبور</h3>
                        <p class="text-muted">رمز عبور به تلفن همراه شما پیامک شد</p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" required="" placeholder="رمز عبور"> </div>
                </div>
                <div class="form-group text-center mt-3">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">ارسال مجدد</button>
                    </div>
                </div>

            </form>




        </div>
    </div>
</div>




    <!--===============================================================================================-->
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/js/login/proper.js')}}"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/js/login/main.js')}}"></script>

</body>
</html>
