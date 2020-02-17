<!DOCTYPE html>
<?php $location = '../'?>
<html>
    <head>
        <meta charset="utf-8" />
		<title>BEVC</title>
		<?php include  $location . 'includes/header.php'; ?>
		<meta HTTP-EQUIV="REFRESH" content="0; url=<?php echo $location . 'index.php'?>">
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
					<div class="headerX">404 - page not found</div>
				</div>
            </section>
            <?php include  $location . 'includes/footer.php'; ?>	
        </div>
    </body>
</html>
