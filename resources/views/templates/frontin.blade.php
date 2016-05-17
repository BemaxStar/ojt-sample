<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')
</head>
<body>
    
   @yield('header')

    <div id="nav">
        @yield('side-menu')
    </div>

    <div id="nav1">
       @yield('content')
    </div>

    @yield('footer')

</body>
</html>