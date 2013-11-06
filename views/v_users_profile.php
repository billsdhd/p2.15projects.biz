<?php if(isset($user)): ?>
   <h3>My Profile</h3>
<ul>
    <p>
    <strong>First Name:</strong> <?=$user->first_name?><br>
    <strong>Last Name:</strong> <?=$user->last_name?><br>
    <strong>Email Address:</strong> <?=$user->email?><br>
    <strong>Account Created:</strong> <?=Time::display($user->created)?>
    </p>
</ul>
<?php else: ?>
	<h3>No user has been specified</h3>
<?php endif; ?>

