
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url" content="<?php echo current_url() ?>" />
	<meta property="og:site_name" content="Voice Alauddin">
	<?php if(isset($title)){ ?>
	<title>Voice Alauddin | <?php echo $title ?></title>
	<meta property="og:title" content="<?php echo $title ?>" />
	<meta property="og:description" content="<?php echo $description ?>" />
	<meta property="og:image" content="<?php echo $thumbnails['standard']['url'] ?>" />
<?php }else { ?>
		<title>Voice Alauddin</title>
		<meta name="description" content="Channel berita UIN Alauddin Makassar" />
		<meta property="og:description" content="Channel berita UIN Alauddin Makassar" />
		
<?php } ?>

	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/valogo.png" >
	<!-- <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16"> -->
	<link rel="manifest" href="assets/img/favicons/manifest.json">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/cardio.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" />
</head>