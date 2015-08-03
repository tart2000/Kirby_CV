<h2><?php echo page('formations')->title() ?></h2>
<?php foreach (page('formations')->children() as $for) : ?>
	<div class="right"><p><?php echo $for->fordates() ?></p></div>
	<h3> <?php if ($for->forlink() != '') : ?>
			<a href="<?php echo $for->forlink() ?>" target="_blank"><?php echo $for->title() ?></a>
		<?php else : ?>	
			<?php echo $for->title() ?>
		<?php endif ?></h3>
	<p><?php echo $for->text()->Kirbytext() ?></p>
	<p><i>⇒ <?php echo $for->skills() ?></i></p>
<?php endforeach ?>