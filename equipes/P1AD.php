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
					<div class="headerX">PROVINCIALE 1 A DAMES</div>
					<div class="bodyX">
					<br>
					<article>
					<div id="portail">
						<div class="headerX">Liens vers le portail de la FVWB</div>
						<div class="bodyX">
							<a href="https://www.portailfvwb.be/Portail/Ranking">Les Classements<a> - 
							<a href="https://www.portailfvwb.be/Portail/Calendar">Les Calendriers<a> -
							<a href="https://www.portailfvwb.be/Portail/TrainingPlaces">Les Adresses des salles<a>
						</div>
					</div>
					</article>
					<p><img src="<?php echo $location . 'images/equipes/' . substr(basename($_SERVER['PHP_SELF']),0,4) . '.jpg'?>" alt="" /></p>
					
					<p><font color="#780000">
					<?php
					
					/* $url = "http://www.portailaif.be/vbClassement.php?vb_Env=vbaif&div=" . substr(basename($_SERVER['PHP_SELF']),0,3) . "&mat=1064";
					$dom = file_get_contents($url);
					$lines = explode(" ",$dom);
					$body = "";
					foreach($lines as $line)
					{
						if(strpos($line,"sultats")!=0){
							$line = "class='TBLUE'><font color=\"white\">Résultats ";
						}
						if(strpos($line,"Tableau")!=0){
							$body .= "></td></tr></table></div></body>";
							break;
						}
						$body .= $line . " ";
					}
					echo $body; */
					
					?>
					</font>
					</p>
					</div>
				</div>
            </section>
            <?php include  $location . 'includes/footer.php'; ?>	
        </div>
    </body>
</html>
