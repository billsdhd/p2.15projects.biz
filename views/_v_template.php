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
	<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
		
</head>

<body>	

	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="menu">
				<ul>
					<li><a href='/' accesskey="1" title="">Home</a></li>
						<?php if($user): ?>				
							<li><a href='/posts/' accesskey="2" title="">Recent Post</a></li>
							<li><a href='/posts/users' accesskey="3" title="">Follow Users</a></li>
							<li><a href='/posts/add' accesskey="4" title="">Add Post</a></li>
							<li><a href='/users/myposts' accesskey="5" title="">My Posts</a></li>						
							<li><a href='/users/profile' accesskey="6" title="">My Info</a></li>
							<li><a href='/users/logout' accesskey="7" title="">Logout</a></li>
						<?php else: ?>
							<li><a href='/users/signup' accesskey="2" title="">Sign Up</a></li>
							<li><a href='/users/login' accesskey="3" title="">Log In</a></li>
						<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>

	<br><br>
	
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>

</body>

</html>