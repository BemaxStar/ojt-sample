<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OJT Files</title>
	{{ HTML::style('stylesheets/bootstrap/css/bootstrap.css') }}
	{{ HTML::style('stylesheets/mystyle.css') }}
	<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/mystyle.css">
</head>
<body>
	<div class="container">	
		<div class="row"> 
	   		@yield('regHeader')
		</div>

	   @yield('regFormsContent')

	   @yield('regFooter')
	</div>

</body>
</html>