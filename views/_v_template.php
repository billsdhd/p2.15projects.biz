<!DOCTYPE html>

<!--
CSS Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : SweetCourse 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130919
-->

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>
	<?php if(isset($title)) echo $title; ?>
</title>

<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
		
</head>

<body>	

	<nav>
		<menu>
		<center>
				<li><a href='/'>Home</a></li>
				
			<?php if($user): ?>
				|
				<li><a href='/posts/'>Recent Posts</a></li>				
				|
				<li><a href='/posts/users'>Follow Users</a></li>
				|
				<li><a href='/posts/add'>Add Post</a></li>				
				|
				<li><a href='/users/myposts'>My Posts</a></li>
				|
				<li><a href='/users/profile'>My Profile</a></li>
				|
				<li><a href='/users/logout'>Logout</a></li>
			<?php else: ?>
				|
				<li><a href='/users/signup'>Sign Up</a></li>
				|
				<li><a href='/users/login'>Log In</a></li>
			<?php endif; ?>
		</center>
		</menu>
	</nav>
	
	<br><br>
	
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>