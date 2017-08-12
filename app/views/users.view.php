<?php require 'partials/header.php' ?>
	
	<?php if (!empty($users)): ?>
		<?php foreach ($users as $user) : ?>
			<li><?= $user->name; ?></li>
		<?php endforeach; ?>
	<?php else: ?>
		<?php echo '<h4>no users yet! , please create database and add users to test this</h4>'; ?>
	<?php endif; ?>
	
<?php require 'partials/footer.php' ?>