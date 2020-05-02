<?php 
	$news = $this->news;
	$linkDetailNews = URL::createLink('default', 'news', 'detail'); 
?>
<section>
	<div class="container">
		<div class="col-md-9">
			<?php foreach($news as $new){ ?>
				<hr>
				<?php $linkDetailNews = URL::createLink('default', 'news', 'detail',array('url'=>$new['url']),'detail/'.$new['url']); ?>
				<a href="<?php echo $linkDetailNews; ?>">
					<div class="row">
						<div class="col-md-3">
							<img style="width: 150px; height: auto" src="<?php echo 'public/images/news/'.$new['image']; ?>" alt="<?php echo $new['title']; ?>">
						</div>
						<div class="col-md-9">
							<div class="row">
								<p><img src="<?php echo $this->_dir.'images/office_calendar.png'; ?>" alt=""> Ngày Đăng: <?php echo $new['created_at']; ?>   <img src="<?php echo $this->_dir.'images/images/eye.png'; ?>" alt=""> Lượt xem: <?php echo $new['views']; ?></p>
							</div>
							<h3><?php echo $new['title']; ?></h3>
							<p><?php echo substr(strip_tags($new['content']),0,500);echo (strlen($new['content']) > 500 ? '. . .' : ''); ?></p>
						</div>
					</div>
				</a>
				<hr>
			<?php } ?>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</section>