<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1">
		<title>Malvyn Le Bohec</title>
		<link rel="icon" type="image/x-icon" href="/public/images/favicon.ico">
	  <meta name="description" content="">

	  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

		<?php foreach (['materialize.min', 'jvectormap.min', 'main'] as $script) : ?>
	  	<link rel="stylesheet" href="/public/css/<?= $script ?>.css">
	  <?php endforeach; ?>

	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body id="home" class="scrollspy">
		<?php include __DIR__ . '/views/header.php'; ?>

		<div class="container">
			<?php include __DIR__ . '/views/profil.php'; ?>
			<?php include __DIR__ . '/views/timeline.php'; ?>
			<?php include __DIR__ . '/views/skills.php'; ?>
			<?php include __DIR__ . '/views/travels.php'; ?>
			<?php include __DIR__ . '/views/hobbies.php'; ?>
		</div>

		<?php include __DIR__ . '/views/footer.php'; ?>

		<?php foreach (['jquery.min', 'materialize.min', 'jvectormap.min', 'jvectormap-world.min', 'main'] as $script) : ?>
	  	<script type="text/javascript" src="/public/js/<?= $script ?>.js"></script>
	  <?php endforeach; ?>

	  <script type="application/ld+json">
			{ 
				"@context" : "http://schema.org",
				"@type" : "Person",
				"address": {
					"@type": "PostalAddress",
					"addressCountry" : "FR",
					"addressLocality": "Nantes",
					"postalCode": "44300"
				},
				"givenName" : "Malvyn",
				"familyName" : "Le Bohec",
				"email" : "l.malvyn@gmail.com",
				"url" : "http://malvyn-lebohec.fr",
				"jobTitle" : "Développeur Web Full Stack"
				"image" : "http://malvyn-lebohec.fr/public/images/me.jpg",
				"name" : "Malvyn Le Bohec"
			}
		</script>
	</body>
</html>
