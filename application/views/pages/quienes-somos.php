<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Laboratorios Induquimica</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="./assets/vendor/aos/aos.css" rel="stylesheet" >
	<link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="./assets/css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="./assets/img/induquimica.ico" type="image/x-icon">
	<style>
		#home{
			height: 40vh;
		}
		#text-quienes-somos p{
			text-align: justify;
		}
	</style>
</head>

<body>
<?php $this->load->view('layouts/header') ?>

<!-- ======= Hero Section ======= -->
<section id="home" class="d-flex align-items-center">
	<div class="container" data-aos="zoom-out" data-aos-delay="100">

	</div>
</section>
<!-- End Hero -->
<section id="text-quienes-somos" class="d-flex align-items-center" >
	<div class="container" data-aos="zoom-out" data-aos-delay="100">
		<div class="row">
			<div class="col-6" ></div>
			<div class="col-6">
				<p>
					Nuestra historia comienza en los años ochenta cuando incursionamos en una categoría todavía no explotada en su magnitud; la de productos naturales.
				</p>
				<p>Esto generó interés en el mercado teniendo como resultado nuestros primeros éxitos: “Una de Gato” y otros productos. Unos años después nos abrimos camino en el mercado internacional. En 1994 logramos incursionar en más de 20 países del mundo, lo que nos convirtió en el principal exportador de productos naturales.</p>
				<p>
					En el año 2000, Induquímica incursiona en el campo farmacéutico logrando posicionarnos como uno de los fabricantes más importantes del Perú con productos de muy buena calidad y aceptación.
				</p>
				<p>En el 2006, inauguramos la primera planta en el Perú y segunda en Sudamérica especializada en fabricación de medicinas Antiretrovirales y para el tratamiento del cáncer.</p>
				<p>En el 2008, inauguramos el Centro de Investigación, Desarrollo y Control de Calidad, el cual vela por la calidad de la fabricación, tanto propia como para terceros.</p>
				<p>En el 2010, Laboratorios Induquímica lanza su propia marca en el rubro farmacéutico. Además, Induquímica es reconocido por las certificaciones con estándares internacionales como ISO 9001, BMP (GMP) y SQF.</p>
				<p>A más de 20 años de su fundación, Laboratorios Induquímica se ha convertido en uno de los fabricantes más importantes del país, teniendo como política estar comprometidos con la calidad de sus productos para la satisfacción de todos nuestros clientes.</p>.
				<p>FAMILIA QUINTANILLA AURICH</p>
			</div>
		</div>

	</div>
</section>

<!-- End #main -->
<?php $this->load->view('layouts/footer') ?>
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
	$logo=document.getElementById('img_logo');
	window.addEventListener('load',function(){
		$logo.style.height="45px";
	});
</script>
</body>

</html>
