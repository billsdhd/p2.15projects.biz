<?php if(isset($user)): ?>
	<div id="wrapper3">
		<div id="wrapper-blog" class="container">
			<div id="post">
				<?php foreach($users as $user): ?>
					<div class="post"> 
						<h2>
							<?=$user['first_name']?> <?=$user['last_name']?>
						</h2>
						<?php if(isset($connections[$user['user_id']])): ?>
							<a href='/posts/unfollow/<?=$user['user_id']?>'>Stop follow</a>
						<?php else: ?>
							<a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
						<?php endif; ?>	
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
<?php else: ?>
	<h3>No user has been specified</h3>
<?php endif; ?>

