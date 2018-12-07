<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-type" charset=UTF-8 " />
<title>Football Website</title>
<link rel="icon" href="" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../assets/style.css">
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"
	type="text/javascript"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="../assets/func.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<script type="text/javascript">


</script>

	<?php include 'header.php';?>
	<div class="wrapper">
		<article class="main">
			<p id="felhivas_title">edzők cím</p>

			<p id="felhivas_text">edzők szöveg</p>

		</article>
		<aside class="aside aside-1">
			<div id="ajanlo_div">
				<p>
					A csapatokba jelentkezni lehet az <a
						href="mailto:airnergyfc@gmail.com">airnergyfc@gmail.com</a> e-mail
					címen vagy a <a href="tel:+3670-208-7131">+3670-208-7131</a>
					telefonszámon!
				</p>
			</div>
			<div class="fb-page" data-href="https://www.facebook.com/csviitorul/"
				data-tabs="timeline" data-width="250" data-small-header="false"
				data-adapt-container-width="true" data-hide-cover="false"
				data-show-facepile="false">
				<blockquote cite="https://www.facebook.com/csviitorul/"
					class="fb-xfbml-parse-ignore">
					<a href="https://www.facebook.com/csviitorul/">CS Viitorul Zalau</a>
				</blockquote>
			</div>
		</aside>
		<aside class="aside aside-2">
			<div>
				<p>Következő mérkőzés</p>
				<img src="../steaua_logo.jpg" alt="steaua" height="60" width="60"> <img
					src="../logo_img.png" alt="viitorul" height="60" width="60">
				<p>Bukarest Nemzeti Stadion</p>
				<p>2019.03.12 17:00</p>
			</div>
			<p class="orarend_ptitle">Heti edzésterv</p>
			<p class="orarend_p">Hétfő: pihenő nap</p>
			<p class="orarend_p">Kedd: 16:00</p>
			<p class="orarend_p">Szerda: 13:00</p>
			<p class="orarend_p">Csütörtök: 13:00</p>
			<p class="orarend_p">Péntek: 13:00</p>
			<p class="orarend_p">Szombat: 13:00</p>
			<p class="orarend_p">Vasárnap: 13:00 | bajnoki mérkőzés</p>


		</aside>
	</div>

	
<?php include 'footer.php';?>
</body>
</html>