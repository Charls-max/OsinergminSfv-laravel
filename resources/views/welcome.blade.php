<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Osinergmin</title>

        <!-- FontAwesome icons -->
        <script src="https://kit.fontawesome.com/a790fabeaf.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #eee;
            /*    color: #636b6f; */
                color: #114692;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                /* color: #636b6f; */
                color: #000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .15rem;
                text-decoration: none;
                text-transform: uppercase;
                position: relative;
            }


            .links > a:hover {
                color: orange;
             
            }           

            .links > a:after {    
            background: none repeat scroll 0 0 transparent;
            bottom: 0;
            content: "";
            display: block;
            height: 2px;
            left: 50%;
            position: absolute;
            background: #114692;
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
            width: 0;
            }
            .links > a:hover:after { 
            width: 100%; 
            left: 0; 
            }

            .m-b-md {
                margin-bottom: 30px;
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

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" >
                    Sistema de Supervision de Sistemas Fotovoltaicos Osinergmin
                </div>

                <div class="links">
                    <a href="https://www.osinergmin.gob.pe/SitePages/default.aspx">Website oficial Antiguo</a>
                    <a href="https://www.gob.pe/osinergmin">Website oficial Nuevo</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
