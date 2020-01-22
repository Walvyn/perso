<?php 
	$birthday = new Datetime('1993-12-4');
	$now = new Datetime();
	$age = $birthday->diff($now);
?>

<div id="profil" class="scrollspy">
	<div class="me-container row center-align">

		<div class="col s12 push-l4 l4">
			<img src="/public/images/me.jpg" alt="Me">
		</div>

		<div class="col s6 pull-l4 l4 right-align infos-container">
			<div class="infos"><a href="mailto:l.malvyn@gmail.com"><span>l.malvyn</span> <i class="material-icons inline-icon">mail</i></a></div>
			<div class="infos"><span>Nantes</span> <i class="material-icons inline-icon">location_on</i></div>
		</div>

		<div class="col s6 l4 left-align infos-container">
			<div class="infos"><i class="material-icons inline-icon">directions_car</i> <span>Permis B</span></div>
			<div class="infos"><i class="material-icons inline-icon">cake</i> <span><?= $age->format('%Y') ?> ans</span></div>
		</div>
	</div>

	<p class="description justify-align">
		Curieux, calme et attentif, je suis toujours à la recherche de nouveaux challenges aussi bien dans ma vie professionnelle que personnelle. De plus, ma capacité d'adaptation me permet de m'intégrer aisément à tout projet.
	</p>
	<br>
	<p class="description justify-align">
		Dès mon plus jeune âge, je me suis intéressé à l'informatique par tous ses aspects. En grandissant, j'ai donc voulu faire carrière dans ce vaste domaine. Je me suis alors dirigé vers un Bac STI, seule filière disponible au lycée dans laquelle les travaux pratiques sont récurrents. Dans l'idée de devenir "Geek" sur les bords, j'ai continué mon chemin à Supinfo, école d'informatique internationale permettant d'aborder plusieurs aspects du monde connecté, comme le réseau, le développement ou même la gestion de projet. Durant mes études j'ai pu acquérir diverses expériences qui m'ont permis de trouver ma voie dans le Web.
	</p>
	<br>
	<p class="description justify-align">
		Aujourd'hui, je souhaite mettre à profit mes compétences et en acquérir de nouvelles. 
	</p>
</div>