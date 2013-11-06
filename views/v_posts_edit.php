<?php if(isset($user)): ?>


<?php foreach($posts as $post): ?>

    <!-- Display Form to Edit Post -->
        <form method='POST' action="/posts/p_edit/<?=$post['post_id']?>">
			<center>
            <h3>Your Edited Post</h3>
            <textarea name='content' id='content' rows="10" cols="50"><?=$post['content']?> </textarea>

            <br><br>
            <input type='submit' value='Save Post'>
			</center>
        </form> 
<?php endforeach; ?>


<?php else: ?>
	<h3>No user has been specified</h3>
<?php endif; ?>

