<!doctype html>
<html>
<head>
	<title>ของกินของขวัญ : {{ $title }}</title>
	<meta charset="UTF-8"> 
	{{HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	@yield('script')
	{{HTML::style('css/bootstrap.min.css')}}
	{{HTML::style('css/master.css')}}
	@yield('style')
</head>
<body>
	@yield('content')

</body>
<footer>
	<div class='icon'>
		<a href="http://www.facebook.com/foodwithq" target ='_blank'>
			{{ HTML::image('img/facebook.png', 'facebook page') }}
		</a>
		<a href="http://www.twitter.com/foodwithq" target ='_blank'>
			{{ HTML::image('img/twitter.png', 'twitter') }}
		</a>
		<a href="#" target ='_self'>
			{{ HTML::image('img/email.png', 'email') }}
		</a>
	</div>
</footer>
</html>
