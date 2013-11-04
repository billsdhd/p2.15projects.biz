

<?php if(isset($user)): ?>

<?php foreach($posts as $post): ?>
	<center>
	<strong><?=$post['first_name']?> <?=$post['last_name']?> posted on <?=Time::display($post['created'])?></strong><br>
	<?=$post['content']?><br><br>
	</center>
<?php endforeach; ?>





<?php else: ?>
	<h3>No user has been specified</h3>
<?php endif; ?>

