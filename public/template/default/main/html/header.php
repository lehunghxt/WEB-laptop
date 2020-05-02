<?php 
	$linkHome 	 = URL::createLink('default', 'index', 'index',array(),'home'); 
	$linkNews    = URL::createLink('default', 'news', 'index',array(),'tintuc');
	$linkContact = URL::createLink('default', 'contact', 'index',array(),'contact');
	$linkSearch  = URL::createLink('default', 'index', 'index');
	$categories  = $this->categories;
	$url         = $_SERVER['REQUEST_URI'];
?>
<header id="header"><!--header-->
	<div class="header-bottom"><!--header-bottom-->
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="mainmenu pull-left">
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a <?php if (preg_match("/home/i", $url)){ ?> class="active" <?php } ?> href="<?php echo $linkHome; ?>">Home</a></li>
							<li class="dropdown"><a <?php if (preg_match("/hang/i", $url)){ ?> class="active" <?php } ?> href="#">LAPTOP GIÁ RẺ<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                	<?php foreach($categories as $category){ 
										$linkCate = URL::createLink('default', 'index', 'cateDetail',array('url'=>$category['url']),'hang/'.$category['url']);
                                	?>
                                    	<li><a href="<?php echo	$linkCate; ?>"><?php echo $category['name']; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li> 
							<li><a <?php if (preg_match("/tintuc/i", $url)){ ?> class="active" <?php } ?> href="<?php echo $linkNews; ?>">TIN TỨC</a></li>
							<li><a <?php if (preg_match("/contact/i", $url)){ ?> class="active" <?php } ?> href="<?php echo	$linkContact; ?>">LIÊN HỆ</a></li>
							<li><a href="#">BẢO HÀNH</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="search_box pull-right">
						<form action="<?php echo $linkSearch; ?>" method="GET">
							<input style="width: 250px" type="text" name="fSearch[name]" placeholder="Tìm kiếm Laptop"/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->