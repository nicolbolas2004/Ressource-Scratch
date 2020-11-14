<!DOCTYPE html>
<html>
<head>
	<title>Ressource Scratch -- Par nicolbolas2004</title>
	<link href="design/design.css" rel="stylesheet">
<body>
	<div id="lcont">
		<div class="lcont2">
			<img src="img/ScratchLogo.png" class="logo" alt="Scratch logo">
			<a href="https://scratch.mit.edu/" target="blank">Scratch</a>
		</div>
		<div class="lcont2">
			<img src="img/MyLogo.png" class="logo" alt="nicolbolas2004">
			<a href="https://scratch.mit.edu/users/nicolbolas2004/" target="blank">Mon profil</a>
		</div>
		<h1>Bienvenue sur mon site de ressource Scratch</h1>
		<?php
		date_default_timezone_set('America/Toronto');
		echo date('H:i');
		?>
	</div>
	<p>
		<div class="pretext">
			<h4>C'est ici que je compte partager mes tutoriels, afin notamment
			de m'entrainer sur la création de page web.<br>
			Ci-bas se trouvent tous mes vidéos mis en ligne, avec parfois des
			scripts en bonus :)<br></h4>
			<h5>Les tutoriels seront probablement tous en français, mais mon
			Scratch sera quand même parfois mis en anglais afin d'être un minimum
			bilingue lors de mes tutoriels.</h5>
		</div>
	</p>

	<?php $screen = 300 ?>
	<div id="lcont">
		<a href="https://www.youtube.com/watch?v=ujHZ6XZVftk" target="blank" title="Voir sur Youtube">
		<img src="img/Tuto1Plan.png" width="<?php echo $screen ?>"></a>
		<h5 class="pretext">Tutoriel #01: Créer un sprite qui rebondit
		de façon réaliste non seulement sur le bord de l'écran, mais aussi bien sur
		un autre sprite, une couleur ou le pointeur de souris.<br><br>
		Télécharger le <a href="downloads/project02.sb3" download="Project02.sb3" target="blank">projet #1</a><br><br>
		This video contain english subtitle :)</h5>
	</div>
	
	<div id="lcont">	
		<a href="https://www.youtube.com/watch?v=Dr2OdUf-W0E" target="blank" title="Voir sur Youtube">
		<img src="img/Tuto2Plan.png" width="<?php echo $screen ?>"></a>
		<h5 class="pretext">Tutoriel #02: Présentation de mes activités actuelles
		en tant que Scratcheur.<br><br>
		+ Rapide survol sur une fonctionnalité très pratique de Scratch:
		le sac à dos.<br>
		+ Présentation d'un de mes jeux en cours de création. D'ailleurs vous
		pouvez le tester en le téléchargeant
		<a href="downloads/game01.sb3" download="Game01.sb3" target="blank">ici</a><br><br>
		<em>NB</em>: si vous téléchargez le projet de cet manière, je vous conseille
		de le tester directement sur votre ordinateur via Scratch Dekstop et non en ligne, la jouabilité
		s'en verra améliorée.</h5>
	</div>

	<div id="lcont">
		<a href="https://www.youtube.com/watch?v=YQtbrK-mc60" target="blank" title="Voir sur Youtube">
		<img src="img/Tuto3Plan.png" width="<?php echo $screen ?>"></a>
		<h5 class="pretext">Tutoriel #03: Différence entre une variable disponible
		pour tout les sprite et une variable disponible pour ce sprite uniquement.<br><br>
		Télécharger le <a href="downloads/project01.sb3" download="Project01.sb3" target="blank">projet #1</a>
		</h5>
	</div>

</body>
</html>