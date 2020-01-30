<?php 
	$skills = [
		'PHP' => 4,
		'CodeIgniter' => 3,
		'Slim' => 3,
		'MySQL' => 4,
		'MongoDB' => 3,
		'NodeJS' => 2,
		'Javascript' => 4,
		'jQuery' => 4,
		'AngularJS' => 2,
		'HTML5' => 4,
		'CSS3' => 3,
		'Sass' => 2,
		'Materialize' => 3,
		'Bootstrap' => 3,
		'Git' => 2,
		'Linux' => 2,
		'Apache' => 2,
		'Nginx' => 2,
		'Bash' => 2,
		'GTM' => 2,
		'AdWords' => 1,
		'Anglais' => 3
	];
?>

<div id="skills" class="scrollspy">
	<h3>Compétences</h3>
	<div class="row skills-list">
		<?php foreach($skills as $skill => $level) : ?>
			<div class="col offset-s1 s5 m3 xl2 tooltipped" data-position="right" data-tooltip="<?= $skill ?>">
                <div class="overlay-transparent"></div>
				<div class="skill-container">
					<?php $path = __DIR__ . '/../public/images/'.strtolower($skill); ?>
					<?php if (file_exists($path . '.svg')): ?>
						<?php include $path . '.svg'; ?>
					<?php elseif (file_exists($path . '.png')): ?>
						<img src="/public/images/<?= strtolower($skill) ?>.png" alt="<?= $skill ?>">
					<?php endif ?>
				</div>
			</div>
			<div class="col s5 m3 xl2">
				<div class="level-container level-<?= $level ?>">
					<div class="level-bar l-1"></div>
					<div class="level-bar l-2"></div>
					<div class="level-bar l-3"></div>
					<div class="level-bar l-4"></div>
					<div class="level-bar l-5"></div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>