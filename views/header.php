<?php 
	$menu = [
		'profil' => 'Mon profil',
		'timeline' => 'Mon parcours',
		'skills' => 'Compétences',
		'travels' => 'Voyages',
		'hobbies' => 'Loisirs',
	];
?>

<header>
	<div class="navbar-fixed">
		<nav role="navigation">
			<div class="nav-wrapper container">
						<a href="#" data-target="phone-menu" class="sidenav-trigger grey-text text-darken-4">
							<i class="material-icons">menu</i>
						</a>
						<a href="#home" class="brand-logo">
							<?php include __DIR__ . '/../public/images/logo.svg'; ?>
						</a>
						<ul class="right hide-on-med-and-down">
							<?php foreach ($menu as $link => $text) : ?>
								<li><a href="#<?= $link ?>" class="grey-text text-darken-4"><?= $text ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<ul class="sidenav" id="phone-menu">
			<?php foreach ($menu as $link => $text) : ?>
				<li><a href="#<?= $link ?>" class="sidenav-close grey-text text-darken-4"><?= $text ?></a></li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="banner center-align parallax">
		<div class="titles">
			<h1>Malvyn Le Bohec</h1>
			<h2>Développeur Full Stack</h2>
		</div>
	</div>
</header>