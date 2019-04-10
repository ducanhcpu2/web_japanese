<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<>
<title>Classic Register Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8"/>
<meta name="keywords"
      content="Classic Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
/>
<style>
    a.orange {
        color: white;
        border: 1px solid #FB8F3D;
        background: -webkit-linear-gradient(top, #FDA251, #FB8F3D);
        background: -moz-linear-gradient(top, #FDA251, #FB8F3D);
        background: -ms-linear-gradient(top, #FDA251, #FB8F3D);
    }

    a.orange:hover {
        border: 1px solid #EB5200;
        background: -webkit-linear-gradient(top, #FD924C, #F9760B);
        background: -moz-linear-gradient(top, #FD924C, #F9760B);
        background: -ms-linear-gradient(top, #FD924C, #F9760B);
        box-shadow: 0 1px #EFEFEF;
    }

    a.orange:active {
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.3);
    }
</style>
<script>
    addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="layout/login/css/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="layout/css/bootstrap.css">
<!-- Style-CSS -->
<link rel="stylesheet" href="layout/login/css/font-awesome.css">
<!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
      rel="stylesheet">
<!-- //web-fonts -->
</head>

<body>
<!--header-->
<h1>
    <span>C</span>lassic
    <span>R</span>egister
    <span>F</span>orm</h1>
<!--//header-->
<!-- content -->
<div class="main-content-agile">
    <div class="sub-main-w3">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
                <a href="{{route('index')}}"  class="orange" >Comeback Home</a>
            </div>
        @else
            <form action="{{route('register')}}" method="post">
                {{ csrf_field() }}
                <div class="form-style-agile {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label>Your Name</label>
                    <div class="pom-agile">
                        <input placeholder="Your Name" name="name" type="text" required="">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                    </div>
                    @if ($errors->has('name'))

                        <span class="text-danger">{{ $errors->first('name') }}</span>

                    @endif
                </div>
                <div class="form-style-agile {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label>Email</label>
                    <div class="pom-agile">
                        <input placeholder="Email" name="email" type="email" required="">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                    </div>
                    @if ($errors->has('email'))

                        <span class="text-danger">{{ $errors->first('email') }}</span>

                    @endif
                </div>
                <div class="form-style-agile {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label>Password</label>
                    <div class="pom-agile">
                        <input placeholder="Password" name="password" type="password" id="password1" required="">
                        <span class="fa fa-key" aria-hidden="true"></span>
                    </div>
                    @if ($errors->has('password'))

                        <span class="text-danger">{{ $errors->first('password') }}</span>

                    @endif
                </div>
                <div class="form-style-agile {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                    <label>Confirm Password</label>
                    <div class="pom-agile">
                        <input placeholder="Confirm Password" name="confirm_password" type="password" id="password2"
                               required="">
                        <span class="fa fa-key" aria-hidden="true"></span>
                    </div>
                    @if ($errors->has('confirm_password'))

                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>

                    @endif
                </div>
                <div class="sub-agile">
                    <input type="checkbox" id="brand1" value="">
                    <label for="brand1">
                        <span></span>I Accept to the Terms & Conditions</label>
                </div>
                <div class="clear"></div>
                <input type="submit" value="Register">
            </form>
        @endif

    </div>
</div>
<!-- //content -->
<!--footer-->
<div class="footer">
    <h2>&copy; 2018 Classic Register Form. All rights reserved | Design by
        <a href="http://w3layouts.com">W3layouts</a>
    </h2>
</div>
<!--//footer-->


<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    };

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

</body>

</html>
