<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

             /* Shared */
            .loginBtn {
                box-sizing: border-box;
                position: relative;
                width: 13em;  /*apply for fixed size*/
                margin: 0.2em;
                padding: 0 15px 0 46px;
                border: none;
                text-align: left;
                line-height: 34px;
                white-space: nowrap;
                border-radius: 0.2em;
                font-size: 16px;
                color: #FFF;
                display: inline-block;
                margin-bottom: 10px;
                text-decoration: none; /*隱藏底線*/
            }
            .loginBtn:before {
                content: "";
                box-sizing: border-box;
                position: absolute;
                top: 0;
                left: 0;
                width: 34px;
                height: 100%;
            }
            .loginBtn:focus {
                outline: none;
            }
            .loginBtn:active {
                box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
            }


            /* Facebook */
            .loginBtn--facebook {
                background-color: #4C69BA;
                background-image: linear-gradient(#4C69BA, #3B55A0);
                /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
                text-shadow: 0 -1px 0 #354C8C;
            }
            .loginBtn--facebook:before {
                border-right: #364e92 1px solid;
                background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
            }
            .loginBtn--facebook:hover,
            .loginBtn--facebook:focus {
                background-color: #5B7BD5;
                background-image: linear-gradient(#5B7BD5, #4864B1);
            }


            /* Google */
            .loginBtn--google {
                /*font-family: "Roboto", Roboto, arial, sans-serif;*/
                background: #DD4B39;
            }
            .loginBtn--google:before {
                border-right: #BB3F30 1px solid;
                background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
            }
            .loginBtn--google:hover,
            .loginBtn--google:focus {
                background: #E74B37;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <!--<div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->

                <a href="{{ url('auth/facebook') }}" class="loginBtn loginBtn--facebook">
                    Login with Facebook
                </a>
                <br>
                <a href="{{ url('auth/google') }}" class="loginBtn loginBtn--google">
                    Login with Google
                </a>

            </div>
        </div>
    </body>
</html>
