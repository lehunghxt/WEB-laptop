<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php if(isset($this->title)){ echo $this->title; } ?>">
    <meta name="author" content="">
    <?php if(isset($this->title)){ ?>
        <title><?php echo $this->title; ?></title>
    <?php }else{ ?>
        <title>Laptop NCT</title>
    <?php } ?>
    <link href="<?php echo $this->_dir; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->_dir; ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $this->_dir; ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo $this->_dir; ?>css/price-range.css" rel="stylesheet">
    <link href="<?php echo $this->_dir; ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo $this->_dir; ?>css/main.css" rel="stylesheet">
	<link href="<?php echo $this->_dir; ?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo $this->_dir; ?>/js/html5shiv.js"></script>
    <script src="<?php echo $this->_dir; ?>/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->_dir; ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->_dir; ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->_dir; ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $this->_dir; ?>/images/ico/apple-touch-icon-57-precomposed.png">

    

</head><!--/head-->

<body>
	<?php include_once 'html/header.php';?>
	<?php 
	  require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
	?>
	<?php include_once 'html/footer.php';?>
	
    <script src="<?php echo $this->_dir; ?>/js/jquery.js"></script>
	<script src="<?php echo $this->_dir; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo $this->_dir; ?>/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo $this->_dir; ?>/js/price-range.js"></script>
    <script src="<?php echo $this->_dir; ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo $this->_dir; ?>/js/main.js"></script>
</body>
</html>