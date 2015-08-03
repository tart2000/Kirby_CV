<?php snippet('header') ?>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="container">
		<div class="row mt mb">
			<div class="col-xs-4">
				<img src="<?php echo $page->images()->first()->url() ?>" class="portrait img-responsive">
				<h1><?php echo $page->title()->html() ?></h1>
				<div class="mb">
					<h3><?php echo $page->baseline() ?></h3>
					<a href="<?php echo $page->website() ?>"><?php echo $page->website() ?></a></br>	
					<a href="mailto:<?php echo $page->email() ?>"><?php echo $page->email() ?></a>
					<?php echo $page->text()->kirbytext() ?>
				</div>
				<h2>Competences</h2>
				<div class="mt mb">
					<?php foreach ($page->competences()->split(',') as $comp) : ?>
						<div class="tag"><?php echo $comp ?></div>
					<?php endforeach ?>
				</div>
			</div>	
			<div class="col-xs-8">
				<?php snippet('experience') ?>
				<?php snippet('formations') ?>
			</div>
		</div>
	</div>

