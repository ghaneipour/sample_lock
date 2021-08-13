<!Doctype html>
	<HTML>
	<head>
		<title>pedram</title>
	</head>
	<body>
		<h1>supportco</h1>
		<h4><?php 
		echo(Request()) 
	    ?></h4>
		<h4><?php 
		echo route('myfunc',['id'=>40,'post'=>"ppp"]) 
	    ?></h4>
		<h4><?php 
		echo route('myfunc',['post'=>50,'id'=>"qqq"]) 
	    ?></h4>
	</body>
</HTML>