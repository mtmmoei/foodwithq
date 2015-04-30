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
<div id="cover"> 

	<nav class="navbar navbar-default transparent">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">

{{ HTML::link('/','ของกินของขวัญ', array('class' => 'navbar-brand'))}}
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>{{ HTML::link('/about','เกี่ยวกับเรา')}}</li>
					<li>{{ HTML::link('/addData','เพิ่มร้านอาหาร')}}</li>
				</ul>
			</div>

		</div>
	</nav>
	<div class='logo'>
    {{ HTML::image('img/logo4.png', 'ของกินของขวัญ') }}

    <!-- <h1>ของกินของขวัญ</h1> -->
    <h1>"คิดถึงของกิน คิดถึงของกินของขวัญ"</h1>
    <button type="button" class="btn btn-default btn-lg transparent">คุยกับขวัญ</button>
  </div> 
	</div>
	@yield('content')
</body>
<footer>
	<center>
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
	</center>
</footer>
</html>
