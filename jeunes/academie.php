<!DOCTYPE html>
<?php $location = '../'?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Jeunes</title>
	<?php include  $location . 'includes/header.php'; ?>
</head>
<body>
	<header>
		<?php include $location . 'includes/menu.php';  ?>
		<div class="pic_presentation">
			<div class="inner_pic_presentation">
				<h3 class="title_header_block">Académie</h3>
			</div>
		</div>
	</header>
	<main>
		<div class="container_personnal_content">
			<div class="intro">
				<p>La section élite de l'école de jeunes du BEVC a vu le jour en septembre 2018.<br>
				Le but de cette académie est de développer des jeunes vers le haut niveau tant physique que mental.<br>
				Ce projet demande énormément d'investissement de la part du club et du staff qui encadre cette section.</p>
			</div>
      <div class="title">
				<h2>Académie</h2>
			</div>
			<div class="young_content">
				<div class="info_text_section">
					<h4>Lieu des entrainements</h4>
					<div class="location">
						<p>Collège Don Bosco <br> 270, Chaussée de Stockel <br> 12000 Bruxelles</p>
					</div>
          <h4>Horaire</h4>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Lundi</th>
                <th scope="col">Mardi</th>
                <th scope="col">Mercredi</th>
                <th scope="col">Jeudi</th>
                <th scope="col">Vendredi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>16h30- 17h30 école des devoirs</td>
                <td>16h30- 17h30 école des devoirs</td>
                <td></td>
                <td>16h30- 17h30 école des devoirs</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>17h30 - 19h30 volley</td>
                <td>17h30 - 19h00 Mobilité / Déplacement</td>
                <td>16h00 - 18h00 volley</td>
                <td>17h30 - 19h00 Mise en condition / Développement musculaire</td>
                <td>17h00 - 19h00 volley</td>
              </tr>
            </tbody>
          </table>
					<h4>Principes importants</h4>
					<ul>
						<li>La section élite s'adresse aux jeunes de 12 à 17 ans.</li>
						<li>La participation aux entraînements est obligatoire.</li>
						<li>La participation aux championnats est obligatoire.</li>
						<li>La saison s'étale sur 10 mois, avec dérogations possibles en juin( examnes) et en aout ( vacances)</li>
						<li>Nous faisons également de la réussite scolaire une <span>obligation</span>. (
							l'échec scolaire pourrait valoir un écartement du jeune de la section) </li>
						<li>L'école des devoirs n'est pas obligatoire. (les arrivées se font selon l'horaire scolaire de chacun).</li>
					</ul>
					<h4>Cotisation</h4>
					<p>Le montant de cotisation s'élève à 800 euros (ce qui représente 1,80/heure).
						Le paiement en 3 fois est possible, 300 à l'inscription, 250 en juin et 250 en janvier.
					</p>
					<h4>Le staff</h4>
					<p>Les principaux acteurs au niveau du staff seront: 
						<ul>
							<li>Guy et Fred pour la partie volley</li>
							<li>Yael pour mobilité - déplacements</li>
							<li>Tim (kiné) pour le renforcement musculaire et la mise en condition physique</li>
							<li>Marc pour le secrétariat</li>
						</ul>
					</p>
				</div>
				<div class="info_image_section">
					<picture>
						<img src="../images/content_img/img_jeunes_3.png" alt="">
					</picture>
				</div>
			</div>
		</div>
	</main>
	<footer>
    <?php include $location . 'includes/footer.php'; ?>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>  
</body>
</html>