

<?php if(isset($user)): ?>
<form method='post' action='/posts/p_add'>
<center>
	<textarea name='content' rows="10" cols="50"></textarea>
	
	<br><br>
	
	<input type='Submit' value='Add new post'>
</center>
</form>



<?php else: ?>
	<h3>No user has been specified</h3>
<?php endif; ?>

