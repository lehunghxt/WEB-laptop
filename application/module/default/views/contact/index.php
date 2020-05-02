<?php
	$contact = $this->contact;
	$sidebar = $this->sidebar;
	$linkDetailNews = URL::createLink('default', 'news', 'detail');
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<button style="margin-top: 50px;" class="col-md-9 btn btn-info text-left"><b><?php echo $contact['title']; ?></b></button>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-9 padding-right">
				<div class="product-details"><!--product-details-->
					<?php echo $contact['content']; ?>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Xem Nhiều Nhất</h2>
					<div class="panel-group category-products" id="accordian">
						<?php foreach($sidebar as $xemNhieu){ ?>
							<?php $linkDetailNews = URL::createLink('default', 'news', 'detail',array('url'=>$xemNhieu['url']),'detail/'.$xemNhieu['url']); ?>
							<a href="<?php echo $linkDetailNews; ?>">
								<div class="">
									<div class="col-md-2 pull-left">
										<img style="width: 70px; height: auto" src="<?php echo 'public/images/news/'.$xemNhieu['image']; ?>" alt="">
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
	</div>
</section>