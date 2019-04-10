<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Connective Login Form a Responsive Widget Template :: w3layouts</title>
    <!-- meta_tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="connective login form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta_tag_Keywords -->
    <link href="layout/register/css/style.css" rel="stylesheet" type="text/css" media="all"><!--style_sheet-->
    <link href="layout/register/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"><!--font_awesome_icons-->
    <!--web_fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
    <!--//web_fonts-->
</head>
<body>
<div class="form">
    <h1>Connective Login Form</h1>
    <div class="form-content">
        <form action="{{route('login')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-info">
                <h2>Login</h2>
            </div>
{{--            @if(Session::has('notification'))--}}
{{--                <div class="alert alert-danger {{Session::get('flag')}}">{{Session::get('notification')}}</div>--}}
{{--            @endif--}}
            <div class="email-w3l {{ $errors->has('email') ? 'has-error' : '' }}">
                <span class="i1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                <input class="email" type="email" name="email" placeholder="Email" required="">
                @if ($errors->has('email'))

                    <span class="alert alert-danger">{{ $errors->first('email') }}</span>

                @endif
            </div>
            <div class="pass-w3l {{ $errors->has('pass') ? 'has-error' : '' }}">
                <!---728x90--->
                <span class="i2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                <input class="pass" type="password" name="pass" placeholder="Password" required="">
                @if ($errors->has('pass'))

                    <span class="alert alert-danger">{{ $errors->first('pass') }}</span>

                @endif
            </div>
            <div class="form-check">
                <div class="left">
                    <input type="checkbox" value="Remember me">Remember me
                </div>
                <div class="right">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="submit-agileits">
                <input class="login" type="submit" value="login">
            </div>
        </form>
    </div>
</div>
<!---728x90--->
<footer>&copy; 2018 Connective login form. All rights reserved | Design by <a href="#">W3layouts</a></footer>
<!---728x90--->
</body>
</html>