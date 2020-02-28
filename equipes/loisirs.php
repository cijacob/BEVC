<!DOCTYPE html>
<?php $location = '../'?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BEVC | Equipes loisirs</title>
	<?php include  $location . 'includes/header.php'; ?>
</head>
<body>
	<header>
		<?php include $location . 'includes/menu.php';  ?>
		<div class="pic_presentation img_bg_dames">
			<div class="inner_pic_presentation">
				<h3 class="title_header_block">Equipes Loisirs</h3>
			</div>
		</div>
	</header>
	<main>
		<div class="container_personnal_content">
			<div class="title">
				<h2>Nos équipe loisirs</h2>
      </div>
      <div class="team_list">
        <div class="team">
          <div class="container_image">
            <img src="/images/equipes/N2D-new.jpg" class="team_image" alt="N2AH">
            <div class="team_text">
              <div class="team_text_hover">Loisir 5</div>
            </div>
          </div>
          <div class="team_infos">
            <h3>Loisir 5</h3>
            <h4>Coach: Lorem Ipsum</h4>
            <h4><a href="mailto:">lorem ipsum</a></h4>
          </div>
        </div>
        <div class="team">
          <div class="container_image">
            <img src="/images/equipes/P1AD.jpg" class="team_image" alt="N2AH">
            <div class="team_text">
              <div class="team_text_hover">Provincial 1 A</div>
            </div>
          </div>
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