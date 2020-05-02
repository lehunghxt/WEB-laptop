<?php
	$sliders = $this->sliders;
?>
<section style="margin-top: 50px" id="slider"><!--slider-->
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
								<img style="width: 100%;height: auto;" src="<?php echo 'public/images/banner/'.$slider['image']; ?>" alt="<?php echo $slider['description']; ?>" />
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
			<div class="inputSearch col-md-12">
				<form action="" method="post">
					<div class="row">
						<select name="filter[cate]" class="col-md-2" name="cate_id" id="cate_id">
							<option value="0">Chọn Hãng Laptop</option>
							<?php foreach ($this->categories as $cate) { ?>
								<option value="<?php echo $cate['id']; ?>"><?php echo $cate['name']; ?></option>
							<?php } ?>
						</select>
						<select name="filter[cpu]" class="col-md-2" name="cpu_id" id="cpu_id">
							<option value="0">Chọn Loại CPU</option>
							<?php foreach ($this->cpus as $cpu) { ?>
								<option value="<?php echo $cpu['id']; ?>"><?php echo $cpu['cpu_name']; ?></option>
							<?php } ?>
						</select>
						<select name="filter[vga]" class="col-md-2" name="vga_id" id="vga_id">
							<option value="0">Chọn VGA</option>
							<?php foreach ($this->vgas as $vga) { ?>
								<option value="<?php echo $vga['id']; ?>"><?php echo $vga['vga_name']; ?></option>
							<?php } ?>
						</select>
						<select name="filter[monitor]" class="col-md-2" name="monitor_id" id="monitor_id">
							<option value="0">Chọn CPU</option>
							<?php foreach ($this->monitors as $monitor) { ?>
								<option value="<?php echo $monitor['id']; ?>"><?php echo $monitor['monitor_name']; ?></option>
							<?php } ?>
						</select>
						<input class="btnSearch col-md-1" type="submit" value="Tìm Kiếm">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<?php if(empty($this->productAll)){ ?>
				<h5>Không có sản phẩm nào để hiển thị.</h5><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<?php }else{ ?>
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
										<img style="width: 100%;height: auto;" src="<?php echo 'public/images/products/150x150-'.$product['image']; ?>" alt="" />
										<h6><?php echo number_format($product['price'],0,'.',','); ?> đ</h6>
										<p><?php echo $product['product_name']; ?></p>
									</div>
								</div>
							</div>
						</div>
					</a>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</section>