<div class="navbar navbar-expand-lg navbar-light fixed-top nav_bevc">
	<div class="container">
		<div class="navbar-brand logo">
			<a class="navbar-brand" href="<?php echo $location . 'index_new.php'?>">
				<img src="<?php echo $location . 'images/LOGO-BEVC-couleur.png'?>" alt="logo BEVC" class="img_logo"/>
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button"  data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav nav_list ml-auto">
				<li class="nav-item active"><a class="nav-link" href="<?php echo $location . 'index_new.php'?>">Accueil</a></li>
				<li class="nav-item"><a class="nav-link"  href="<?php echo $location . 'news/2022.php'?>">BEVC 2022</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo $location . 'jeunes/jeunes.php'?>">Jeunes</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo $location . 'jeunes/academie.php'?>">Académie</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Equipes
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?php echo $location . 'equipes/femmes.php'?>">Dames</a>
						<a class="dropdown-item" href="<?php echo $location . 'equipes/hommes.php'?>">Homes</a>
						<a class="dropdown-item" href="<?php echo $location . 'equipes/loisirs.php'?>">Loisirs</a>
						<a class="dropdown-item" href="<?php echo $location . 'jeunes/jeunes.php'?>">Jeunes</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Infos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?php echo $location . 'infos/contact.php'?>">Contact</a>
						<a class="dropdown-item" href="<?php echo $location . 'infos/salles.php'?>">Salles</a>
						<a class="dropdown-item" href="<?php echo $location . 'infos/faq.php'?>">FAQ</a>
					</div>
				</li>
				<li class="nav-item"><a  class="nav-link" href="<?php echo $location . 'presse/2018-2019.php'?>">Presse</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo $location . 'historique/historique-sportif.php'?>">Classement</a></li>
			</ul>
		</div>
	</div>
</div>