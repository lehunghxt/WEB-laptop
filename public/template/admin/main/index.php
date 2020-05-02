<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
 

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo $this->_dir; ?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo $this->_dir; ?>/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo $this->_dir; ?>/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo $this->_dir; ?>/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo $this->_dir; ?>/css/matrix-media.css" />
<link href="<?php echo $this->_dir; ?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo $this->_dir; ?>/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="<?php echo $this->_dir; ?>editor/ckeditor/ckeditor.js"> </script>
<script type="text/javascript" src="<?php echo $this->_dir; ?>editor/ckfinder/ckfinder.js"> </script>

</head>
<body>

<?php include_once 'html/header.php';?>
<?php include_once 'html/sidebar.php';?>
<?php 
  require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
?>
<!--main-container-part-->
<script src="<?php echo $this->_dir; ?>/js/excanvas.min.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/jquery.min.js"></script>
<script src="<?php echo $this->_dir; ?>/js/jquery.ui.custom.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/jquery.flot.min.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/jquery.peity.min.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/matrix.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/matrix.dashboard.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/jquery.gritter.min.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/matrix.interface.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/jquery.validate.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/matrix.form_validation.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/jquery.wizard.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/jquery.uniform.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/select2.min.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/matrix.popover.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo $this->_dir; ?>/js/matrix.tables.js"></script> 



<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

</body>
</html>
