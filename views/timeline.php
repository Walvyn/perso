<?php 
	$experiences = [
		[
			'type' => 'work',
			'title' => 'Développeur Web Full Stack',
			'society' => [
				'name' => 'JYMEO',
				'site' => 'https://jymeo.fr/'
			],
			'location' => 'Nantes, France',
			'duration' => [
				'start' => 'Octobre 2016',
				'end' => 'Décembre 2019'
			],
			'tasks' => [
				"Développement de comparateurs",
				"Développement d'une interface d'administration",
				"Développement d'API interne et externe",
				"Développement de scripts de mise à jour AdWords",
				"Développement d'un Backend de mise à jour de produits",
				"Optimisation d'un système de deploiement automatique de site",
				"Développement d'outils internes",
				"Mise à jour et optimisation des outils et solutions existantes",
				"Rédaction d'un cahier des charges",
				"Formation des nouvelles recrues"
			],
			'skills' => ['PHP', 'CodeIgniter', 'Slim', 'MySQL', 'MongoDB', 'NodeJS', 'Javascript', 'jQuery', 'HTML5', 'CSS3', 'Sass', 'Materialize', 'Bootstrap', 'Git', 'Linux', 'Apache', 'Nginx', 'Bash', 'GTM', 'AdWords']
		],
		[
			'type' => 'school',
			'title' => 'Master of Science',
			'society' => [
				'name' => 'Supinfo'
			],
			'location' => 'Nantes, France',
			'duration' => [
				'start' => 'Octobre 2011',
				'end' => 'Octobre 2016'
			]
		],
		[
			'type' => 'work',
			'title' => 'Stagiaire Développeur Web',
			'society' => [
				'name' => 'JYMEO',
				'site' => 'https://jymeo.fr/'
			],
			'location' => 'Nantes, France',
			'duration' => [
				'start' => 'Avril 2016',
				'end' => 'Septembre 2016'
			],
			'tasks' => [
				"Optimisation d'un regroupement produits",
				"Développement d'outils internes",
				"Mise à jour des solutions existantes",
				"Rédaction d'un cahier des charges"
			],
			'skills' => ['PHP', 'CodeIgniter', 'Slim', 'MySQL', 'MongoDB', 'NodeJS', 'Javascript', 'jQuery', 'HTML5', 'CSS3', 'Sass', 'Materialize', 'Bootstrap', 'Git', 'Linux', 'Apache', 'Nginx', 'Bash']
		],
		[
			'type' => 'work',
			'title' => 'Stagiaire Développeur Web',
			'society' => [
				'name' => 'JYMEO',
				'site' => 'https://jymeo.fr/'
			],
			'location' => 'Nantes, France',
			'duration' => [
				'start' => 'Juillet 2015',
				'end' => 'Octobre 2015'
			],
			'tasks' => [
				"Développement d'un Backend de traitement de fichier",
				"Développement d'outils internes",
				"Ajout de nouvelles fonctionalités sur des projets existants",
				"Développement d'APIs internes",
			],
			'skills' => ['PHP', 'CodeIgniter', 'Slim', 'MySQL', 'Javascript', 'jQuery', 'HTML5', 'CSS3', 'Bootstrap', 'Git', 'Linux', 'Apache', 'Nginx', 'Bash']
		],
		[
			'type' => 'work',
			'title' => 'Stagiaire Développeur Web',
			'society' => [
				'name' => 'JYMEO',
				'site' => 'https://jymeo.fr/'
			],
			'location' => 'Nantes, France',
			'duration' => [
				'start' => 'Juillet 2014',
				'end' => 'Octobre 2014'
			],
			'tasks' => [
				"Développement d'un regroupement produits",
				"Développement d'APIs internes",
				"Développement d'une interface de monitoring",
				"Développement d'un système de deploiement automatique de site",
				"Intégration de nouvelles pages sur les comparateurs"
			],
			'skills' => ['PHP', 'Slim', 'MySQL', 'Javascript', 'jQuery', 'HTML5', 'CSS3', 'Bootstrap', 'Git', 'Linux', 'Apache', 'Nginx', 'Bash']
		],
		[
			'type' => 'work',
			'title' => 'Stagiaire Développeur PHP',
			'society' => [
				'name' => 'Next Décision',
				'site' => 'https://www.next-decision.fr/'
			],
			'location' => 'Nantes, France',
			'duration' => [
				'start' => 'Juillet 2013',
				'end' => 'Septembre 2013'
			],
			'tasks' => [
				"Connaître et comprendre les caluls d'un moteur Excel",
				"Adapter son travail aux besoins du client",
				"Développement d'une interface Web à partir d'un moteur Excel"
			],
			'skills' => ['PHP', 'MySQL', 'Javascript', 'jQuery', 'HTML5', 'CSS3']
		],
		[
			'type' => 'work',
			'title' => 'Stagiaire Développeur PHP',
			'society' => [
				'name' => 'Beemoov',
				'site' => 'https://www.beemoov.com/'
			],
			'location' => 'Nantes, France',
			'duration' => [
				'start' => 'Juillet 2012',
				'end' => 'Octobre 2012'
			],
			'tasks' => [
				"Créer un blog depuis une base MVC",
				"Implémenter une maquette",
				"Validation de formulaires asynchrones",
				"Développement d'une interface d'administration"
			],
			'skills' => ['PHP', 'MySQL', 'Javascript', 'jQuery', 'HTML5', 'CSS3']
		],
		[
			'type' => 'school',
			'title' => 'Bac STI',
			'society' => [
				'name' => 'Lycée François Truffaut'
			],
			'location' => 'Challans, France',
			'duration' => [
				'start' => 'Septembre 2008',
				'end' => ' Juin 2011'
			]
		]
	];
?>

<div id="timeline" class="scrollspy">
	<h3>Mon parcours</h3>

	<div class="center-align now">Aujourd'hui</div>
	<div class="timeline-container">
		<?php foreach($experiences as $xp) : ?>
			<div class="timeline-card">
				<div class="head <?= $xp['type'] ?>">
					<i class="material-icons"><?= $xp['type'] ?></i>
					<h4><?= $xp['title'] ?>
						<span>
							<?php if (isset($xp['society']['site'])) : ?>
								<a href="<?= $xp['society']['site']; ?>"><?= $xp['society']['name'] ?></a>
							<?php else : ?>
								<?= $xp['society']['name'] ?>
							<?php endif ?>
						</span>
					</h4>
				</div>
				<div class="body">
					<div class="xp-location"><span class="bolder"><?= $xp['location'] ?></span> <?= '/ ' . $xp['duration']['start'] . ' - ' . $xp['duration']['end'] ?></div>
					<?php if(isset($xp['tasks'])) : ?>
						<div class="xp-title">Missions :</div>
						<ul>
							<?php foreach ($xp['tasks'] as $task): ?>
								<li>- <?= $task ?></li>
							<?php endforeach ?>
						</ul>
					<?php endif; ?>
					<?php if(isset($xp['skills'])) : ?>
						<div class="xp-title">Compétences :</div>
						<div class="xp-skills-list">
							<?php foreach ($xp['skills'] as $skill) : ?>
								<?php $path = __DIR__ . '/../public/images/'.strtolower($skill); ?>
								<?php if (file_exists($path . '.svg')): ?>
									<?php include $path . '.svg'; ?>
								<?php elseif (file_exists($path . '.png')): ?>
									<img src="/public/images/<?= strtolower($skill) ?>.png" alt="<?= $skill ?>" title="<?= $skill ?>">
								<?php endif ?>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>