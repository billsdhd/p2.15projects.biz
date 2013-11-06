<?php if(isset($user)): ?>
<div id="wrapper3">
	<div id="wrapper-blog" class="container">
		<div id="post">

<h2>My Posts</h2><br><br>
<ul>
        <?php foreach($posts as $post): ?>

			<div class="post"> <span class="date"><?=Time::display($post['modified'])?></span> 
				<p><?=$post['content']?></p>
                    <a href='/posts/edit/<?=$post['post_id']?>'>Edit</a> <a href='/posts/p_delete/<?=$post['post_id']?>'>Delete</a>

			</div>



        <?php endforeach; ?>
</ul>


<?php else: ?>
	<h3>No user has been specified</h3>
<?php endif; ?>

