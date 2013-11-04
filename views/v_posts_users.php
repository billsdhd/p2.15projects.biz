<?php if(isset($user)): ?>

<?php foreach($users as $user): ?>
<center>
	<font size ="5">
	<?=$user['first_name']?> <?=$user['last_name']?><br>
	</font>
	<?php if(isset($connections[$user['user_id']])): ?>
		<a href='/posts/unfollow/<?=$user['user_id']?>'>Stop follow</a>
	<?php else: ?>
		<a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
	<?php endif; ?>	
	</center>	
	<br><br>

<?php endforeach ?>



<?php else: ?>
	<h3>No user has been specified</h3>
<?php endif; ?>

