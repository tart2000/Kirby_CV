<h2><?php echo page('experiences')->title() ?></h2></br>
<?php foreach (page('experiences')->children() as $xp) : ?>
	<div class="right"><p><?php echo $xp->xpdates() ?></p></div>
	<h3><?php echo $xp->job() ?>, 
		<?php if ($xp->xplink() != '') : ?>
			<a href="<?php echo $xp->xplink() ?>" target="_blank"><?php echo $xp->title() ?></a>
		<?php else : ?>	
			<?php echo $xp->title() ?>
		<?php endif ?></h3>
	<p><?php echo $xp->text()->Kirbytext() ?></p>
	<p><i>⇒ <?php echo $xp->skills() ?></i></p>

<?php endforeach ?>