<!doctype html>
<html>
<head>
    <title>ของกินของขวัญ : {{ $title }}</title>
    <meta charset="UTF-8"> 
    {{HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}
 {{HTML::script('http://maps.googleapis.com/maps/api/js')}}
 {{HTML::script('js/bootstrap.min.js')}}
 {{HTML::script('js/map.js')}}
 {{HTML::script('js/index.js')}}
 {{HTML::script('js/chatbox.js')}}
 {{HTML::style('css/bootstrap.min.css')}}
 {{HTML::style('css/index.css')}}
 {{HTML::style('css/chatbox.css')}}
</head>
<body>
@yield('content')






</body>
</html>
