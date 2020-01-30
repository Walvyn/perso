<?php 
	function stripAccents($str) {
		return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
	}

	$hobbies = ['Basket', 'Cinéma', 'Littérature', 'Piano', 'Musique', 'Pâtisserie'];
?>

<div id="hobbies" class="scrollspy">
	<h3>Loisirs</h3>
	<div class="row hobbies-list">
		<?php foreach($hobbies as $hobby) : ?>
			<div class="col s6 m4 l4 center-align">
                <div class="overlay-transparent"></div>
				<div class="hobby-image">
					<?php $path = __DIR__ . '/../public/images/'.strtolower(stripAccents($hobby)); ?>
					<?php if (file_exists($path . '.svg')): ?>
						<?php include $path . '.svg'; ?>
					<?php elseif (file_exists($path . '.png')): ?>
						<img src="/public/images/<?= strtolower($hobby) ?>.png" alt="<?= $hobby ?>">
					<?php endif ?>
				</div>
				<h4><?= $hobby ?></h4>
			</div>
		<?php endforeach; ?>
	</div>
</div>