<!doctype html>
<html>
<head>
    <title>Twitter Data Collector : {{ $title }}</title>
    <meta charset="UTF-8"> 
    <!-- load bootstrap -->
    {{ HTML::style('css/bootstrap.min.css'); }}
    {{HTML::style('font-awesome/css/font-awesome.min.css');}}
    <!-- {{ HTML::style('css/local.css'); }} -->
    {{ HTML::script('js/bootstrap.min.js'); }}
    {{ HTML::script('js/jquery.min.js'); }}
    <!-- Latest compiled and minified CSS -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
        body    { padding-bottom:40px; padding-top:40px; }
        .form-group.required .control-label:after { 
            color: #d00;
            content: "*";
            position: absolute;
            margin-left: 8px;
            top:7px;

        }
    </style>
</head>
<body class="container">
    @section('menu')

        <!--        <div class="col-md-10"> -->
        <div class="col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0">

            <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
                <div class="container-fluid"> 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Twiiter Data Collector</a>
                        <img style="max-width:50px; " src="logoweb.png">
                    </div>
                    <div class="collapse navbar-collapse navbar-menubuilder">
                        <ul class="nav navbar-nav navbar-left">

                            <li>{{ HTML::link('/', 'หน้าหลัก') }}
                            </li>

                            <li>{{ HTML::link('/about', 'เกี่ยวกับเรา') }}
                            </li>
                            @if (Auth::check())

                            <li><a href="{{ URL::route("user/logout") }}">
                              logout
                          </a>

                      </li>
                      <li>{{ HTML::link('/addjob', 'เพื่มงาน') }}
                      </li>
                      <li>{{ HTML::link('/status', 'สถานะ') }}
                      </li>
                      @else
                      <li> 
                        <a href="{{ URL::route("user/login") }}">
                          login
                      </a>

                  </li>
                  <li>
                    {{ HTML::link('/register', 'สมัครสมาชิก') }}



                </li>
                @endif

            </ul>
        </div>
    </div>
</div>

		
@yield('content')






</body>
</html>
