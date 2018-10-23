<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(isset($titulo)) : echo $titulo; endif;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="icon" href="<?php echo base_url();?>assets/img/favicon.ico" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/estilo.css"><!--Estilo CSS-->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<header>
		<h1> TESTE </h1>
	</header>
    
    <?php echo $contents; ?>

</body>
</html>
