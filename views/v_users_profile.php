<?php if(isset($user)): ?>
	<div id="wrapper3">
		<div id="wrapper-blog" class="container">
			<div id="post">
				<h2>
					My Profile
				</h2>
				<p>
				    <strong>First Name:</strong> <?=$user->first_name?><br>
				    <strong>Last Name:</strong> <?=$user->last_name?><br>
				    <strong>Email Address:</strong> <?=$user->email?><br>
				    <strong>Account Created:</strong> <?=Time::display($user->created)?>
			    </p>
			</div>
		</div>
	</div>
<?php else: ?>
	<h3>No user has been specified</h3>
<?php endif; ?>