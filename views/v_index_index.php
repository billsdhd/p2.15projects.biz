<div id="wrapper1">
	<div id="welcome" class="container">
		<div class="title">

			<?php if($user): ?>
				<h2>
					Welcome <?=$user->first_name;?> <?=$user->last_name;?>
				</h2>
			<?php else: ?>
				<h2>
					Welcome to Simple Blog!
				</h2>
			<?php endif; ?>
		
			<span class="byline">A very simple blog website for project 2</span> 
		</div>
	
		<div class="content">
			<p>
				This is <strong>Simple Blog</strong>, a simple blog website. <br>
			</p>
			<p>
				<strong>Features :</strong>
				Sign up, Log in, Log out, Add posts, See a list of all users, 
				Follow and unfollow other users, 
				View a stream of posts from the users they follow<br>
				<strong>+1 Features :</strong> 
				Edit posts, Delete posts, Display the user profile.<br>
			</p>
			<p>
				<strong>Preinstalled users :</strong> 
				sam@whitehouse.gov, donna@whitehouse.gov, toby@whitehouse.gov, cj@whitehouse.gov<br>
			</p>
		</div>
	</div>
</div>