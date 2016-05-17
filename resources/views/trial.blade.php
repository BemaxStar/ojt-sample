@extends('templates.frontin')

@section('header')
		<div id="header">
        <div id="circle"></div>
        <span> <h1>Hello</h1></span>
    	</div>
@stop

@section('side-menu')
		<div id="nav3">
            <p> ORANGE </p>
        </div>
        <div id="nav4">
            <p> YELLOW </p>
        </div>
        <div id="nav5">
            <p> VIOLET </p>
        </div>
        <div id="nav6">
            <p> GRAY </p>
        </div>
 @stop

 @section('content')
	@include('includes/content')
 @stop

 @section('footer')
	@include('includes/footer')
 @stop
