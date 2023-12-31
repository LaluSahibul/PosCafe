<!doctype html>
<html lang="en">

<head>
    <title>Login</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <style>
        body {
            padding-top: 60px;
        }
    </style>

    <link href="loginassets/css/bootstrap.css" rel="stylesheet" />

    <link href="loginassets/css/login-register.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <script src="loginassets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="loginassets/js/bootstrap.js" type="text/javascript"></script>
    <script src="loginassets/js/login-register.js" type="text/javascript"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-12"></div>
            <div class="col-lg-12"> --}}
            <div class="col-lg-12 text-center" style="margin-top: 150px;">
                <a class="btn big-login" id="loginButton" data-toggle="modal" href="javascript:void(0)"
                    onclick="openLoginModal();">Log
                    in</a>
            </div>
        </div>
        {{-- <div class="col-sm-4"></div> --}}
    </div>


    <div class="modal fade login" id="loginModal">
        <div class="modal-dialog login animated">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    {{-- <h4 class="modal-title">Login with</h4> --}}
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content">
                            {{-- <div class="social">
                                    <a class="circle github" href="#">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="#">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="#">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div> --}}
                            <div class="division">
                                <div class="line l"></div>
                                <span>Login Form</span>
                                <div class="line r"></div>
                            </div>
                            <div class="error"></div>
                            <div class="form loginBox">
                                <form action="/login" method="POST" accept-charset="UTF-8">
                                    @csrf
                                    <input class="form-control" type="text" placeholder="username" id="username"
                                        name="username">
                                    <input id="password" class="form-control" type="password" placeholder="Password"
                                        name="password"><br>
                                    <button class="btn btn-default btn-login" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="content registerBox" style="display:none;">
                            <div class="form">
                                <form method="" html="{:multipart=>true}" data-remote="true" action=""
                                    accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email"
                                        name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password"
                                        name="password">
                                    <input id="password_confirmation" class="form-control" type="password"
                                        placeholder="Repeat Password" name="password_confirmation">
                                    <input class="btn btn-default btn-register" type="button" value="Create account"
                                        name="commit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                                <a href="javascript: showRegisterForm();">create an account</a>
                                ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                            <span>Already have an account?</span>
                            <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            openLoginModal();

            $('#loginModal').on('shown.bs.modal', function() {
                document.getElementById("username").focus();
            });
        });
        document.getElementById("loginButton").focus();
    </script>


</body>

</html>
