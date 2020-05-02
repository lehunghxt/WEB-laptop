<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo $this->_dir; ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $this->_dir; ?>/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo $this->_dir; ?>/css/matrix-login.css" />
        <link href="<?php echo $this->_dir; ?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <?php 
            require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
        ?>
        <script src="<?php echo $this->_dir; ?>/js/jquery.min.js"></script>  
        <script src="<?php echo $this->_dir; ?>/js/matrix.login.js"></script> 
    </body>

</html>
