<?php if(isset($user)): ?>
	<div id="wrapper3">
		<div id="wrapper-blog" class="container">
			<div id="post">
				<?php foreach($posts as $post): ?>
					<div class="post"> 
						<span class="date">
							<?=Time::display($post['created'])?>
						</span> 
						<h2>
							<?=$post['first_name']?> <?=$post['last_name']?>
						</h2>
						<p>
							<?=$post['content']?>
						</p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
<?php else: ?>
	<h3>No user has been specified</h3>
<?php endif; ?>

