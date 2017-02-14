<?php require 'partials/header.php' ?>

	<?php if(isset($users)): ?>
		<?php foreach($users as $user) : ?>
			<li><?= $user->name; ?></li>
		<?php endforeach; ?>
	<?php else: ?>
		<?php echo "no users yet!"; ?>
	<?php endif; ?>
	
<?php require 'partials/footer.php' ?>