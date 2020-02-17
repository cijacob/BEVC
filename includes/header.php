<link rel="stylesheet" href="<?php echo $location . 'css/style_v1.css' ?>" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--<link href="<?php echo $location . 'css/dropdown/dropdown.css' ?>" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo $location . 'css/dropdown/default.advanced.css' ?>" media="screen" rel="stylesheet" type="text/css" />-->
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--<script type="text/javascript" src="<?php echo $location . 'js/lightbox.js' ?>"></script>-->

<link href="<?php echo $location . 'css/lightbox.css' ?>" type="text/css" media="all" rel="stylesheet" />
<script src="<?php echo $location . 'js/jquery-1.7.2.min.js' ?>"></script>
<script src="<?php echo $location . 'js/jquery-ui-1.8.18.custom.min.js' ?>"></script>
<script src="<?php echo $location . 'js/jquery.smooth-scroll.min.js' ?>"></script>
<!-- <script src="<?php echo $location . 'js/lightbox.js' ?>"></script> -->
<!-- Skitter Styles -->
<link href="<?php echo $location . 'css/skitter.styles.css' ?>" type="text/css" media="all" rel="stylesheet" />
<!-- Skitter JS -->
<script type="text/javascript" language="javascript" src="<?php echo $location . 'js/jquery-1.6.3.min.js' ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo $location . 'js/jquery.easing.1.3.js' ?>"></script>

<!-- Init Skitter -->
<script type="text/javascript" language="javascript">
	
	function gen_mail_to_link(lhs,rhs)
	{
	document.write("<A HREF=\"mailto");
	document.write(":" + lhs + "@");
	document.write(rhs + "\">" + lhs + "@" + rhs + "<\/A>"); 
	}
	function gen_mail_to_link_with_bcc(lhs,rhs,nhs,dhs)
	{
	document.write("<A HREF=\"mailto");
	document.write(":" + lhs + "@");
	document.write(rhs +"?bcc=" + nhs + "@" + dhs + "\">"); 
	}
</script>
<?php 
define('HOME_URL', 'http://www.bruxellesestvolley.be/');
define('MAX_WIDTH_HALFSIZE', '440px');
?>
<link rel="SHORTCUT ICON" href="<?php echo constant('HOME_URL') . '/images/bevc-logo.ico'?>" />