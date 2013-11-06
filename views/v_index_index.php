<div id="wrapper1">
	<div id="welcome" class="container">
		<div class="title">

<?php if($user): ?>
<center><h2>Welcome <?=$user->first_name;?> <?=$user->last_name;?> </h2></center>
<?php else: ?>
<center><h2>Welcome to Simple Blog!</h2></center>

<?php endif; ?>
			<span class="byline">A very simple blog website for project 2</span> </div>


		<div class="content">
			<p>This is <strong>Simple Blog</strong>, a simple blog website. <br>
<strong>Features :</strong> Sign up, Log in, Log out, Add posts, See a list of all users, Follow and unfollow other users, View a stream of posts from the users they follow<br>
<strong>+1 Features :</strong> Edit posts, Delete posts, Display the user profile.<br>

			
			 </p>
		</div>
	</div>
</div>
