<?php
	$sliders = $this->sliders;
?>
<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>
					<div style="width: 1000px;height: auto;" class="carousel-inner">
						<?php foreach($sliders as $key => $slider){ ?>
							<div class="item  <?php if($key==0){ ?> active <?php } ?>">
								<img style="width: 100%;height: auto;" src="<?php echo '../public/images/banner/'.$slider['image']; ?>" alt="<?php echo $slider['description']; ?>" />
							</div>
						<?php } ?>
					</div>
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section><!--/slider-->

<section>
	<div class="container">
		<div class="row">
			<?php foreach($this->productAll as $product){ ?>
				<?php  	$linkDetail = URL::createLink('default', 'index', 'detail',array('url'=>$product['url']),'chitiet/'.$product['url']); ?>
				<a href="<?php echo $linkDetail; ?>">
					<div class="col-sm-3">
						<?php if($product['quantity']==0) { ?>
							<div class="hh"></div>
						<?php } ?>
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img style="width: 100%;height: auto;" src="<?php echo	'../public/images/products/'.$product['image']; ?>" alt="" />
									<h6><?php echo number_format($product['price'],0,'.',','); ?> đ</h6>
									<p><?php echo $product['product_name']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</a>
			<?php } ?>
		</div>
	</div>
</section>