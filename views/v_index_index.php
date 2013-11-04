<?php if($user): ?>
<center><h3>	Hello <?=$user->first_name;?> <?=$user->last_name;?> </h3></center>
<?php else: ?>
<center><h3>	Welcome to Simple Blog! </h3></center>
<?php endif; ?>
<br><br>
<center>
<h3>+1 features</h3>
Edit posts, Delete posts, Display profile.<br>
</center>
