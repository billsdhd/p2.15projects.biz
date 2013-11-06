<?php if(isset($user)): ?>

<h3>My Posts</h3>
<ul>
        <?php foreach($posts as $post): ?>
            <li>
                    <?=$post['content']?>
                    <br>
                    <span class = "date"><?=Time::display($post['modified'])?></span>
                    
                    <a href='/posts/edit/<?=$post['post_id']?>'>Edit</a> <a href='/posts/p_delete/<?=$post['post_id']?>'>Delete</a>
                    <br><br>
            </li>
        <?php endforeach; ?>
</ul>


<?php else: ?>
	<h3>No user has been specified</h3>
<?php endif; ?>

