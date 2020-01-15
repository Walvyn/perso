<?php
	ini_set('display_errors', 0);
	error_reporting(0);
	session_start();

	date_default_timezone_set('Europe/Paris');

	$birth = new DateTime('1993-12-04');
	$today = new DateTime();

	$age = $birth->diff($today);

	function check_post($name){
		if(!isset($_POST[$name]) || $_POST[$name] == '' || $_POST[$name] == null){
			return false;
		} else {
			return true;
		}
	}

	$errors = array();

	if(isset($_POST) && !empty($_POST) && !isset($_SESSION['send'])){
		if(!check_post('last_name')){
			$errors['last_name'] = true;
		}

		if(!check_post('first_name')){
			$errors['first_name'] = true;
		}

		if(!check_post('email') || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$errors['email'] = true;
		}

		if(!check_post('message')){
			$errors['message'] = true;
		}

		if(count($errors) == 0){
			$message = wordwrap($_POST['message'], 70, "\r\n");
			$message = "De " . $_POST['email'] . "\r\n\r\n\r\n" . $message;

			if(mail('l.malvyn@gmail.com', 'Contact de ' . $_POST['last_name'] . ' ' . $_POST['first_name'], $message)){
				$success = true;
				$_SESSION['send'] = true;
			} else {
				$success = false;
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- Meta -->
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Malvyn Le Bohec, jeune développeur Web, spécialisé dans le PHP et le Javascript, toujours ouvert aux nouvelles technologies prometteuses, je connais l'AngularJS, le Node.js... Retrouver mon cv en ligne, mes compétences, mon parcours et un formulaire de contact." />
		<meta name="google" content="notranslate" />

		<title>Malvyn Le Bohec | Développeur web</title>
		<meta name="author" content="Walvyn" />
		<link rel="icon" href="img/favicon.ico" />

		<!-- Import materialize -->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- Main -->
		<link rel="stylesheet" type="text/css" href="css/main.min.css" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="grey lighten-3">
		<header class="navbar-fixed center-align">
			<nav class="nav-wrapper orange">
				<span class="brand-logo" id="logo"></span>
				<div data-activates="nav-mobile" class="button-collapse burger-menu">
				    <div class="top-line"></div>
				    <div class="middle-line"></div>
				    <div class="bottom-line"></div>
				</div>
				<ul class="right hide-on-med-and-down container" id="nav-desktop">
					<li><a href="#home">Accueil</a></li>
					<li><a href="#profil">Profil</a></li>
					<li><a href="#skills">Compétences</a></li>
					<li><a href="#timeline">Timeline</a></li>
					<li><a href="#creations">Créations</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<ul class="side-nav" id="nav-mobile">
					<li><a href="#home">Accueil</a></li>
					<li><a href="#profil">Profil</a></li>
					<li><a href="#skills">Compétences</a></li>
					<li><a href="#timeline">Timeline</a></li>
					<li><a href="#creations">Créations</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</header>

		<section id="home" class="banner">
			<div class="filter-black">
				<div class="valign-wrapper white-text center" id="top-name">
					<h1 class="valign">Malvyn Le Bohec</h1>
					<h2 class="valign">Développeur web sur Nantes</h2>
				</div>
			</div>
		</section>

		<section class="section container">
			<div id="profil" class="separation-photo">
				<div class="photo"></div>
			</div>
			<h3 class="grey-text light">Qui suis-je ?</h3>
			<h4 class="grey-text tab">
				Ingénieur en informatique, spécialisé dans le Web et geek pendant mes heures perdues.
			</h4>
			<p class="tab" id="profile-text">
				<?php echo $age->format('%y'); ?> ans, passioné d'informatique depuis tout petit,
				j'ai choisi de développer cette passion pour en faire mon métier.<br />
				J'ai donc choisi de m'orienter vers un bac STI electrotechnique, j'ai ensuite intégré une école d'informatique, Supinfo, ce qui m'a permis de découvrir et de me former sur des technologies jusqu'à lors inconnues.<br />
				Parmis ces technologies, j'ai beaucoup utilisé le PHP et le Javascript pendant mes différents stages ainsi que dans mes projets personnels, faisant de moi un expert dans le domaine du Web.<br /><br />
				Mes passions ne s'arretent pas seulement au développement, en effet je suis un grand fan de série, d'anime et de musique en tout genre.
			</p>
		</section>

		<section id="skills" class="section container">
			<h3 class="grey-text light" id="title-skills">Les technologies que je connais :</h3>
			<h4 class="grey-text tab center-align"> -Développement Web- </h4>
			<ul class="skills">
			    <li class="skill php"></li>
		    	<li class="skill html5"></li>
		    	<li class="skill css3"></li>
		    	<li class="skill javascript"></li>
		    	<li class="skill jquery"></li>
		    	<li class="skill nodejs"></li>
		    	<li class="skill angularjs"></li>
			</ul>
			<h4 class="grey-text tab center-align"> -Base de données- </h4>
			<ul class="skills">
			    <li class="skill mysql"></li>
		    	<li class="skill mongodb"></li>
			</ul>
			<h4 class="grey-text tab center-align"> -Autres- </h4>
			<ul class="skills">
				<li class="skill git"></li>
			    <li class="skill csharp"></li>
		    	<li class="skill android"></li>
			</ul>
		</section>

		<section id="timeline" class="section container">
			<h3 class="grey-text light">Mon parcours :</h3>
			<div id="cd-timeline"  class="cd-container">
				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-study bounce-in orange"></div>

					<div class="cd-timeline-content bounce-in">
						<h4>Première année Supinfo</h4>
						<ul>
							<li>Campus de Nantes</li>
							<li>Découverte du développement (C)</li>
							<li>Initiation aux bases du Web (HTML, CSS, Javascript)</li>
							<li>Apprentissage du SQL</li>
							<li>Formation Linux</li>
						</ul>
						<span class="cd-date">Novembre 2011 - Juin 2012</span>
					</div>
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-training bounce-in orange"></div>

					<div class="cd-timeline-content bounce-in">
						<h4>Stage développement Beemoov</h4>
						<ul>
							<li>Sur Nantes</li>
							<li>Autoformation PHP</li>
							<li>Mission : Développement d'un Site/Blog</li>
							<li>Langages : jQuery, PHP, MySQL, HTML, CSS</li>
							<li>Environnement : Linux - Ubuntu</li>
						</ul>
						<span class="cd-date">Juillet 2012 - Octobre 2012</span>
					</div>
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-study bounce-in orange"></div>

					<div class="cd-timeline-content bounce-in">
						<h4>Deuxième année Supinfo</h4>
						<ul>
							<li>Campus de Nantes</li>
							<li>Découverte du langage objet (C++, Java, PHP, C#)</li>
							<li>Apprentissage du PL/SQL</li>
						</ul>
						<span class="cd-date">Novembre 2012 - Juin 2013</span>
					</div>
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-training bounce-in orange"></div>

					<div class="cd-timeline-content bounce-in">
						<h4>Stage à temps partiel développement Ouest Décision</h4>
						<ul>
							<li>Sur Nantes</li>
							<li>En relation directe avec le client</li>
							<li>Mission : Création d'un cahier des charges</li>
							<li>Environnement : Windows</li>
						</ul>
						<span class="cd-date">Avril 2013 - Juin 2013</span>
					</div>
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-training bounce-in orange"></div>

					<div class="cd-timeline-content bounce-in">
						<h4>Stage développement Ouest Décision</h4>
						<ul>
							<li>Sur Nantes</li>
							<li>Mission : Adaptation d'une simulation Excel en PHP</li>
							<li>Langages : Excel, PHP, MySQL, jQuery, HTML, CSS</li>
							<li>Environnement : Windows</li>
						</ul>
						<span class="cd-date">Juillet 2013 - Septembre 2013</span>
					</div>
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-study bounce-in orange"></div>

					<div class="cd-timeline-content bounce-in">
						<h4>Troisième année Supinfo</h4>
						<ul>
							<li>Campus de Londres</li>
							<li>Découverte de l'embarqué (Windows Phone, iOS, Android)</li>
							<li>Apprentissage du Node.js et du MongoDB</li>
						</ul>
						<span class="cd-date">Novembre 2013 - Juin 2014</span>
					</div>
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-training bounce-in orange"></div>

					<div class="cd-timeline-content bounce-in">
						<h4>Stage développement Jymeo</h4>
						<ul>
							<li>Sur Nantes</li>
							<li>Mission : Création d'un algorithme de regroupement de produit</li>
							<li>Langages : PHP, MySQL, jQuery</li>
							<li>Environnement : Linux - Ubuntu</li>
						</ul>
						<span class="cd-date">Juillet 2014 - Septembre 2014</span>
					</div>
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-training bounce-in orange"></div>

					<div class="cd-timeline-content bounce-in">
						<h4>Quatrième année Supinfo</h4>
						<ul>
							<li>Campus de Nantes</li>
							<li>Découverte de Sharepoint, Exchange et VMware vSphere</li>
							<li>Apprentissage de la méthode Agile</li>
						</ul>
						<span class="cd-date">Novembre 2014 - Juin 2014</span>
					</div>
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-training bounce-in orange"></div>

					<div class="cd-timeline-content bounce-in">
						<h4>Stage à temps partiel développement Jymeo</h4>
						<ul>
							<li>Sur Nantes</li>
							<li>Mission : Mise en place d'un backend centralisé et d'une Api</li>
							<li>Langages : PHP, MySQL, Bash, Slim</li>
							<li>Environnement : Linux - Ubuntu</li>
						</ul>
						<span class="cd-date">Novembre 2015 - Mai 2015</span>
					</div>
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-training bounce-in orange"></div>

					<div class="cd-timeline-content bounce-in">
						<h4>Stage développement Jymeo</h4>
						<ul>
							<li>Sur Nantes</li>
							<li>Mission : Refactoring d'une Api</li>
							<li>Langages : PHP, MySQL, Pixie, Slim</li>
							<li>Environnement : Linux - Elementary Os</li>
						</ul>
						<span class="cd-date">Juillet 2014 - Septembre 2014</span>
					</div>
				</div>
			</div>
		</section>

		<section id="creations" class="section container">
			<h3 class="grey-text light">Mes créations :</h3>
			<ul class="creations">
				<li class="creation">
					<figure class="preview">
						<img src="img/festyloc.png" alt="Festyloc" />
						<figcaption class="center-align hide">
							<a href="http://www.festyloc.com" target="_BLANK" class="white-text">
								<i class="medium material-icons white-text">zoom_in</i>
								Festyloc
							</a>
						</figcaption>
					</figure>
				</li>
			</ul>
		</section>

		<section id="contact" class="section container">
			<h3 class="grey-text light">Contactez moi :</h3>
			<?php if((isset($success) && $success) || (isset($_SESSION['send']) && $_SESSION['send'])) : ?>
				<div class="valign-wrapper valid-send green-text">
					<div class="valign">Message envoyé <i class="material-icons right medium">send</i></div>
				</div>
			<?php else : ?>
				<div class="row tab">
					<form class="col s12" method="POST" action="#contact">
						<?php if(isset($success) && !$success) : ?>
							<div class="red-text">Une erreur s'est produite lors de l'envoi du message</div>
						<?php endif; ?>
						<?php if(isset($errors) && count($errors) > 0) : ?>
							<div class="red-text">Certain champs sont invalide ou non rempli</div>
						<?php endif; ?>
						<div class="row">
							<div class="input-field col s6">
								<input id="last_name" name="last_name" type="text" class="validate <?php echo (check_post('last_name'))? 'valid' : ''; ?>" value="<?php echo $_POST['last_name']; ?>">
								<label for="last_name">Nom</label>
							</div>
							<div class="input-field col s6">
								<input id="first_name" name="first_name" type="text" class="validate <?php echo (check_post('first_name'))? 'valid' : ''; ?>" value="<?php echo $_POST['first_name']; ?>">
								<label for="first_name">Prénom</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="email" name="email" type="email" class="validate <?php echo (check_post('email'))? 'valid' : ''; ?>" value="<?php echo $_POST['email']; ?>">
								<label for="email" data-error="Email non valide">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
						        <textarea id="message" name="message" class="materialize-textarea <?php echo (check_post('message'))? 'valid' : ''; ?>"><?php echo $_POST['message']; ?></textarea>
					        	<label for="message">Message</label>
					        </div>
						</div>
						<button class="btn waves-effect waves-light right" type="submit" name="send">Envoyer
							<i class="material-icons right">send</i>
						</button>
					</form>
				<?php endif; ?>
			</div>
			<div class="separation-avatar">
				<div class="avatar"></div>
			</div>
		</section>

		<footer class="page-footer orange">
        	<div class="container" id="footer-content">
            	<div class="row">
            		<div class="col l6 s12">
                		<h5 class="white-text">Pour en savoir plus :</h5>
                		<p class="grey-text text-lighten-4">Vous pouvez me suivre sur les différents réseaux professionnels ou me contacter par mail via le formulaire de contact.</p>
            		</div>
            		<div class="col l4 offset-l2 s12">
                		<h5 class="white-text">Réseaux :</h5>
                		<ul class="tab">
                			<li><a class="grey-text text-lighten-3" target="_BLANK" href="http://www.doyoubuzz.com/malvyn-le-bohec">DoYouBuzz</a></li>
                			<li><a class="grey-text text-lighten-3" target="_BLANK" href="http://fr.viadeo.com/fr/profile/malvyn.le-bohec">Viadeo</a></li>
                			<li><a class="grey-text text-lighten-3" target="_BLANK" href="https://fr.linkedin.com/pub/malvyn-le-bohec/66/865/925">Linkedin</a></li>
                		</ul>
            		</div>
            	</div>
        	</div>
        	<div class="footer-copyright">
	            <div class="container">
	            	© 2015<?php echo ($today->format('Y') != '2015')? ' - '.$today->format('Y') : ''; ?> Malvyn Le Bohec
	            </div>
        	</div>
        </footer>

		<!-- Import timeline -->
		<link rel="stylesheet" type="text/css" href="css/timeline.css" />

		<script type="text/javascript" src="js/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="js/plugins/materialize.js"></script>
		<script type="text/javascript" src="js/main.min.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-67245216-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<div itemscope itemprop="author" itemtype="http://schema.org/Person" class="hide">
			<meta itemprop="birthDate" content="1993">
			<link itemprop="url" href="malvyn-le-bohec.fr" rel="author"/>
			<a itemprop="url" href="malvyn-le-bohec.fr">
				<span itemprop="name" style="display:block;"><strong>Malvyn Le Bohec</strong></span>
			</a>
			<span itemprop="jobtitle" style="display:block;">Développeur web</span>
			<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<div>
					<span itemprop="addressLocality" style="display:block;">Nantes</span>,
					<span itemprop="addressRegion"style="display:block;">Loire-Atlantique</span>
				</div>
				<span itemprop="postalCode"style="display:block;">44000</span>
				<span itemprop="addressCountry"style="display:block;">France</span>
			</div>
		</div>
	</body>
</html>
