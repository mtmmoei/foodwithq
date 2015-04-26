<!doctype html>
<html>
<head>
    <title>ของกินของขวัญ : {{ $title }}</title>
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
@yield('content')






</body>
</html>
