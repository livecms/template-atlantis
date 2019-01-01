<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ LC_Asset() }}/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{ LC_Asset() }}/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ LC_Asset() }}/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ LC_Asset() }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ LC_Asset() }}/css/atlantis.min.css">
    <style type="text/css">
        .login {
            background: #efefee
        }

        .login .wrapper.wrapper-login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: unset;
            padding: 15px
        }

        .login .wrapper.wrapper-login-full {
            justify-content: unset;
            align-items: unset;
            padding: 0!important;
        }

        .login .wrapper.wrapper-login .container-login,.login .wrapper.wrapper-login .container-signup {
            width: 400px;
            padding: 60px 25px;
            border-radius: 5px
        }

        .login .wrapper.wrapper-login .container-login:not(.container-transparent),.login .wrapper.wrapper-login .container-signup:not(.container-transparent) {
            background: #fff;
            -webkit-box-shadow: 0 .75rem 1.5rem rgba(18,38,63,.03);
            -moz-box-shadow: 0 .75rem 1.5rem rgba(18,38,63,.03);
            box-shadow: 0 .75rem 1.5rem rgba(18,38,63,.03);
            border: 1px solid #ebecec
        }

        .login .wrapper.wrapper-login .container-login h3,.login .wrapper.wrapper-login .container-signup h3 {
            font-size: 19px;
            font-weight: 600;
            margin-bottom: 25px
        }

        .login .wrapper.wrapper-login .container-login .form-sub,.login .wrapper.wrapper-login .container-signup .form-sub {
            align-items: center;
            justify-content: space-between;
            padding: 8px 10px
        }

        .login .wrapper.wrapper-login .container-login .btn-login,.login .wrapper.wrapper-login .container-signup .btn-login {
            padding: 15px 0;
            width: 135px
        }

        .login .wrapper.wrapper-login .container-login .form-action,.login .wrapper.wrapper-login .container-signup .form-action {
            text-align: center;
            padding: 25px 10px 0
        }

        .login .wrapper.wrapper-login .container-login .form-action-d-flex,.login .wrapper.wrapper-login .container-signup .form-action-d-flex {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .login .wrapper.wrapper-login .container-login .login-account,.login .wrapper.wrapper-login .container-signup .login-account {
            padding-top: 10px;
            text-align: center
        }

        .login .wrapper.wrapper-login .container-signup .form-action {
            display: flex;
            justify-content: center
        }

        .login .wrapper.wrapper-login-full {
            justify-content: unset;
            align-items: unset;
            padding: 0!important
        }

        .login .login-aside {
            padding: 25px
        }

        .login .login-aside .title {
            font-size: 36px
        }

        .login .login-aside .subtitle {
            font-size: 18px
        }

        .login .show-password {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            cursor: pointer
        }

        .login .custom-control-label {
            white-space: nowrap
        }
        @media screen and (max-width: 576px) {
            .login .wrapper-login-full {
                flex-direction: column;
            }
        }
        @media screen and (max-width: 399px) {
            .wrapper-login {
                padding: 15px!important;
            }
        }
        @media screen and (max-width: 576px) {
            .login .login-aside {
                width: 100%!important;
            }
        }
    </style>
    @if ($action ?? null)
    <script>
      window.location.hash = '{{$action}}';
    </script>
    @endif
</head>
<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <form action="{{LC_Route('password.email')}}#reset" method="POST">
                {!! csrf_field()!!}
                <h3 class="text-center">Forget Password</h3>
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="email" class="form-control input-border-bottom" value="{{old('email')}}" required autofocus>
                        <label for="email" class="placeholder">{{ __('Email') }}</label>
                        @if ($errors->has('email'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-action mb-3">
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">Reset</button>
                    </div>
                    <div class="login-account">
                        <span class="msg">Back to </span>
                        <a href="{{ LC_Route('login') }}#login" id="show-signup" class="link">Login</a>
                    </div>
                    @if (LC_CurrentConfig('allow_register', false))
                    <div class="login-account">
                        <span class="msg">Don't have an account yet ?</span>
                        <a href="{{ LC_Route('register') }}#register" id="show-signup" class="link">Register</a>
                    </div>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <script src="{{ LC_Asset() }}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{ LC_Asset() }}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{ LC_Asset() }}/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="{{ LC_Asset() }}/js/core/popper.min.js"></script>
    <script src="{{ LC_Asset() }}/js/core/bootstrap.min.js"></script>
    <script src="{{ LC_Asset() }}/js/atlantis.min.js"></script>
    <script type="text/javascript">
        @if ($errors->count())
        swal('', '{!! addslashes($errors->first()) !!}', 'error');
        @endif
        @if ($status = session('status'))
        swal('', '{!! $status !!}');
        @endif
        @if ($success = session('success'))
        swal('', '{!! $success !!}');
        @endif
        var hash = window.location.hash;
        if (hash == '#login') {
            showSignUp = false;
            showSignIn = true;
            changeContainer();
            $('.container-signup .help-block').remove();
        } else if (hash == '#register') {
            showSignUp = true;
            showSignIn = false;
            changeContainer();
            $('.container-login .help-block').remove();
        }
    </script>
</body>
</html>