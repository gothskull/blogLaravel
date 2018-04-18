<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            Blog con laravel
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="/metronic/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="/metronic/assets/demo/default/media/img/logo/favicon.ico" />
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
                <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
                    <div class="m-stack m-stack--hor m-stack--desktop">
                        <div class="m-stack__item m-stack__item--fluid">
                            <div class="m-login__wrapper">
                                <div class="m-login__logo">
                                    <a href="#">
                                        <img src="/metronic/assets/app/media/img//logos/logo-2.png">
                                    </a>
                                </div>
                                <div class="m-login__signin">
                                    <div class="m-login__head">
                                        <h3 class="m-login__title">
                                            Formulario de Ingreso
                                        </h3>
                                    </div>
                                    <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        <div class="m-form__group form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                                            <input class="form-control m-input" type="text" placeholder="Correo" name="email" autocomplete="off" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <div id="email-error" class="form-control-feedback">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                        <div class="m-form__group form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Contraseña" name="password" required>
                                            @if ($errors->has('password'))
                                                 <div id="email-error" class="form-control-feedback">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>
                                        <div class="row m-login__form-sub">
                                            <div class="col m--align-left">
                                                <label class="m-checkbox m-checkbox--focus">
                                                    <input type="checkbox" name="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    Recuerdame
                                                    <span></span>
                                                </label>
                                            </div>
                                            <div class="col m--align-right">
                                                <a href="{{ route('password.request') }}" id="m_login_forget_password" class="m-link">
                                                    Olvide mi contraseña
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-login__form-action">
                                            <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                                Ingresar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                           
                                <div class="m-login__forget-password">
                                    <div class="m-login__head">
                                        <h3 class="m-login__title">
                                            Olvidaste tu contraseña? ?
                                        </h3>
                                        <div class="m-login__desc">
                                            Ingresa tu correo para recuperarla:
                                        </div>
                                    </div>
                                    <form class="m-login__form m-form" action="">
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Correo" name="email" id="m_email" autocomplete="off">
                                        </div>
                                        <div class="m-login__form-action">
                                            <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                                Recuperar
                                            </button>
                                            <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                                                Cancelar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1  m-login__content" style="background-image: url(/metronic/assets/app/media/img//bg/bg-4.jpg)">
                    <div class="m-grid__item m-grid__item--middle">
                        <h3 class="m-login__welcome">
                            Join Our Community
                        </h3>
                        <p class="m-login__msg">
                            Lorem ipsum dolor sit amet, coectetuer adipiscing
                            <br>
                            elit sed diam nonummy et nibh euismod
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="/metronic/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="/metronic/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
        {{-- <script src="/metronic/assets/snippets/pages/user/login.js" type="text/javascript"></script> --}}
        <!--end::Page Snippets -->
    </body>
    <!-- end::Body -->
</html>



