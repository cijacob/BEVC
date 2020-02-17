<!DOCTYPE html>
<?php $location = '../'?>
<html>
    <head>
        <meta charset="utf-8" />
		<title>BEVC</title>
		<?php include  $location . 'includes/header.php'; ?>
	</head>
	<!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
	<!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
	<!--[if IE 8 ]><body class="ie8"><![endif]-->
	<!--[if IE 9 ]><body class="ie9"><![endif]-->
	<!--[if !IE]><!--><body><!--<![endif]-->
		<div id="bloc_page">
            <?php include  $location . 'includes/banner-menu.php'; ?>	
            <section>
				<div id ="full">
					<div class="headerX">Les Salles</div>
					<div class="bodyX">
						<div id="list">
							<div id="list_element_salles"><a href="<?php echo $location . 'infos/malou.php'?>">Ecole du Parc Malou (Stade Fallon) - Chemin du struybeken 2, 1200 Bruxelles</a></div>
							<div id="list_element_salles"><a href="<?php echo $location . 'infos/auderghem.php'?>">Salle Omnisports d'Auderghem - Chaussée de Wavre 1690, 1160 Bruxelles</a></div>
							<div id="list_element_salles"><a href="<?php echo $location . 'infos/gymnasium.php'?>">Gymnasium - Boulevard des Invalides 214/216, 1160 Bruxelles</a></div>
							<div id="list_element_salles"><a href="<?php echo $location . 'infos/stjulien.php'?>">Ecole Saint Julien Auderghem - Avenue de l'Eglise Saint-Julien 22-24, 1160 Bruxelles</a></div>
							<div id="list_element_salles"><a href="<?php echo $location . 'infos/DonBosco.php'?>">Collège Don Bosco - accès rue konkel à coté du N°212 ,1200 Bruxelles</a></div>
						</div>
					</div>
				</div>
            </section>
            <?php include  $location . 'includes/footer.php'; ?>	
        </div>
    </body>
</html>
