<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML Exercise</title>
	<style>
	#header{
		background-color: #ff0000;
		color: #ffffff;
		text-align: left;
		padding: 5px;
	}

	#nav {
    line-height: 30px;
    background-color: #0000ff;
    color: #ffffff;
    height: 450px;
    width: 30%;
    float: left;   
    text-align: center;   
}

#nav1 {
    line-height: 30px;
    background-color: #000000;
    color: #ffffff;
    height: 450px;
    width: 70%;
    float: right;
    text-align: center;	      
}

#footer {
    background-color: #ffff00;
    color: #ffffff;
    clear: both;
    text-align: right;
    padding: 5px;	 	 
}

#circle {
      width: 75px;
      height: 75px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
      border-radius: 75px;
      background: #0000ff;
      float: left;
    }

    #nav3 {
    line-height: 56.25px;
    background-color:#ffa500 ;
    color: #ffffff;
    height: 112.5px;
    width: 100%;
    float: left;   
    text-align: center;
}

#nav4 {
    line-height: 56.25px;
    background-color: #ffff00;
    color: #ffffff;
    height: 112.5px;
    width: 100%;
    float: left;   
    text-align: center;
}

#nav5 {
    line-height: 56.25px;
    background-color: #4f2f4f;
    color: #ffffff;
    height: 112.5px;
    width: 100%;
    float: left;   
    text-align: center;
}

#nav6 {
    line-height: 56.25px;
    background-color: #5b5b5b;
    color: #ffffff;
    height: 112.5px;
    width: 100%;
    float: left;   
    text-align: center;
}

#nav7 {
    line-height: 300px;
	margin-top: 50px;
	margin-bottom: 50px;
	margin-right: 11.11%;
	margin-left: 11.11%;
    background-color: white;
    color: black;
    height: 350px;
    width: 77.78%;
    float: right;
    text-align: center;
}

a.hov:hover{
    color: #b0171f;
}

a.hov1:hover{
    color: #0000ff;
}

a.hov2:hover{
    color: #00ff00;
}

	</style>
</head>
<body>

    <div id="header">
        <div id="circle"></div>
        <span> <h1>Hello</h1></span>
    </div>

	<div id="nav">
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
	</div>

	<div id="nav1">
	   <div id="nav7">
		  <p> STRUGGLE IS REAL! </p>
	   </div>
	</div>

	<div id="footer">
		<p> <a class="hov" href="">Home</a> | <a class="hov1" href="">About Us</a> | <a class="hov2" href="">FAQ</a> </p>
	</div>

</body>
</html>