<!DOCTYPE html>
<?php $location = '../'?>
<html>
    <head>
        <meta charset="utf-8" />
		<title>BEVC</title>
		<?php include  $location . 'includes/header.php'; ?>
		<link rel="stylesheet" type="text/css" href="<?php echo  $location . 'includes/resources/UberGallery.css'; ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo  $location . 'includes/resources/colorbox/1/colorbox.css'; ?>" />
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo  $location . 'includes/resources/colorbox/jquery.colorbox.js'; ?>"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
		});
		</script>
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
					<div class="headerX">BURGER PARTY DU 23/02/2014</div>
					<div class="bodyX">
						<div id="new-slideshow-photos">
							<?php

									// Include the UberGallery class
									include  $location . 'includes/resources/UberGallery.php';

									// Initialize the UberGallery object
									$gallery = UberGallery::init()->createGallery($location . 'images/photos/Burger Party');

								?>
						</div>
					</div>
				</div>
            </section>
            <?php include  $location . 'includes/footer.php'; ?>	
        </div>
    </body>
</html>
