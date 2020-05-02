<?php   
    $linkAddBanner = URL::createLink('admin','banner','add');
    $errors = isset($this->errors) ? $this->errors : [];
 ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Banner</a> <a href="#" class="current">Banner</a> </div>
    <h1>Thêm Banner</h1>

  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5></h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo $linkAddBanner; ?>" name="" id="" novalidate="novalidate">
            <input name="form[token]" type="hidden" value="<?php echo time();?>" />
            <div class="control-group">
              <label class="control-label">Tên Banner</label>
              <div class="controls">
                <input type="text" name="form[banner_name]" id="banner_name">
                <p style="color: #f22e2e"><?php echo isset($errors['banner_name'])?$errors['banner_name']:''; ?></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Hình Banner</label>
              <div class="controls">
                <input type="file" name="image" id="image" />
                <p style="color: #f22e2e"><?php echo isset($errors['image'])?$errors['image']:''; ?></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Mô Tả</label>
              <div class="controls">
                <input type="text" name="form[description]" id="description">
                <p style="color: #f22e2e"><?php echo isset($errors['description'])?$errors['description']:''; ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Hiển Thị</label>
              <div class="controls">
                <label>
                  <input type="checkbox" value="1"  name="form[status]" />
                </label>
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" value="Thêm Banner" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>