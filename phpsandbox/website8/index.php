<?php 
	require('config/config.php');
	require('config/db.php');

	$query = 'SELECT * FROM posts';

	$result = mysqli_query($conn, $query);

	#Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// var_dump($posts);

	#Free result
	mysqli_free_result($result);

	mysqli_close($conn);
 ?>

<?php include('inc/header.php'); ?>
 	<div class="container">
		<h1>Posts
		</h1>

		<?php foreach ($posts as $post) : ?>
			<div class="well">
				<h3><?php echo $post['title']; ?></h3>
				<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author'] ?></small>
				<p><?php echo $post['body']; ?></p>
				<a class="btn btn-default" href=" <?php echo ROOT_URL ?>post.php?id=<?php echo $post['id']; ?> "> Read More </a>  
			</div>
		<?php endforeach; ?>
 	</div>

<?php include('inc/footer.php'); ?>