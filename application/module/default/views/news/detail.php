<?php 
	$new = $this->new;
	$sidebar = $this->sidebar;
?>
<section>
	<div class="container">
		<div class="col-md-9">
			<a href="<?php echo $linkDetailNews.'&url='.$new['url']; ?>">
				<div style="margin-top: 50px; width: 100%" class="btn btn-info"><h4><?php echo $new['title']; ?></h4></div>
			</a>
			<hr>
			<?php echo $new['content']; ?>
		</div>
		<div class="col-md-3">
			<div style="margin-top: 50px" class="left-sidebar">
				<h2>Xem Nhiều Nhất</h2>
				<div class="panel-group category-products" id="accordian">
					<?php foreach($sidebar as $xemNhieu){ ?>
						<?php $linkDetailNews = URL::createLink('default', 'news', 'detail',array('url'=>$xemNhieu['url']),'detail/'.$xemNhieu['url']); ?>
						<a href="<?php echo $linkDetailNews; ?>">
							<div class="">
								<div class="col-md-2 pull-left">
									<img style="width: 70px; height: auto" src="<?php echo '../public/images/news/'.$xemNhieu['image']; ?>" alt="<?php echo $xemNhieu['title']; ?>">
								</div>
								<div class="col-md-8 pull-right">
									<h5><?php echo $xemNhieu['title']; ?></h5>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
						<hr>
					<?php } ?>
				</div>
				<h2>Bán Chạy Nhất</h2>
				<div class="panel-group category-products" id="accordian">
					<div class="panel panel-default">
						<div class="panel-heading">
							<p>Đang Cập Nhập</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>