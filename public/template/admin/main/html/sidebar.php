<?php 
	$linkDashboard	= URL::createLink('admin', 'index', 'index',array(),'dashboard');
	$linkCate	      = URL::createLink('admin', 'category', 'index',array(),'category'); 
	$linkProduct	  = URL::createLink('admin', 'products', 'index',array(),'products'); 
	$linkBanner		  = URL::createLink('admin', 'banner', 'index',array(),'banner');
	$linkNews		    = URL::createLink('admin', 'news', 'index',array(),'news');  
  $linkContact    = URL::createLink('admin', 'contact', 'index');
  $url            = $_SERVER['REQUEST_URI'];
 ?>
<!--sidebar-menu-->
<div id="sidebar"><a href="<?php echo $linkDashboard; ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul id="myDIV">
    <li <?php if (preg_match("/dashboard/i", $url)){ ?> class="active" <?php } ?>><a href="<?php echo $linkDashboard; ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li <?php if (preg_match("/category/i", $url)){ ?> class="active" <?php } ?>><a href="<?php echo $linkCate; ?>"><i class="icon icon-home"></i> <span>Hãng Laptop</span></a> </li>
    <li <?php if (preg_match("/product/i", $url)){ ?> class="active" <?php } ?>><a href="<?php echo $linkProduct; ?>"><i class="icon icon-home"></i> <span>Laptop</span></a> </li>
    <li <?php if (preg_match("/banner/i", $url)){ ?> class="active" <?php } ?>><a href="<?php echo $linkBanner; ?>"><i class="icon icon-home"></i> <span>Banner</span></a> </li>
    <li <?php if (preg_match("/news/i", $url)){ ?> class="active" <?php } ?>><a href="<?php echo $linkNews; ?>"><i class="icon icon-home"></i> <span>Tin Tức</span></a> </li>
    <li><a href="<?php echo $linkContact; ?>"><i class="icon icon-home"></i> <span>Liên Hệ</span></a> </li>
  </ul>
</div>
