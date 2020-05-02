<?php 
  $categories = $this->categories;
  $cpus      = $this->cpus;
  $vgas      = $this->vgas;
  $monitors  = $this->monitors;
  $linkAdd  = URL::createLink('admin', 'products', 'add',array(),'addProduct');
  $errors = isset($this->errors) ? $this->errors : [];
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sản Phẩm</a> <a href="#" class="current">Sản Phẩm</a> </div>
    <h1>Thêm Sản Phẩm</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5></h5>
        </div>
        <div class="widget-content nopadding">
          <form enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo $linkAdd; ?>" name="" id="" novalidate="novalidate">
            <input name="form[token]" type="hidden" value="<?php echo time();?>" />
            <div class="control-group">
              <label class="control-label">Hãng Laptop</label>
              <div class="controls">
                <select style="width: 30%" name="form[category_id]" id="category_id">
                  <?php foreach($categories as $category){ ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tên Danh Mục</label>
              <div class="controls">
                <input type="text" name="form[product_name]" id="product_name">
                <p style="color: #f22e2e"><?php echo isset($errors['product_name'])?$errors['product_name']:''; ?></p>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Hình Ảnh</label>
              <div class="controls">
                <input type="file" name="image" id="image" />
                <p style="color: #f22e2e"><?php echo isset($errors['image'])?$errors['image']:''; ?></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Giá Tiền</label>
              <div class="controls">
                <input type="text" name="form[price]" id="price">
                <p style="color: #f22e2e"><?php echo isset($errors['price'])?$errors['price']:''; ?></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Số Lượng</label>
              <div class="controls">
                <input type="text" name="form[quantity]" id="quantity">
                <p style="color: #f22e2e"><?php echo isset($errors['quantity'])?$errors['quantity']:''; ?></p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">CPU</label>
              <div class="controls">
                <select style="width: 30%" name="form[cpu]" id="cpu">
                  <?php foreach($cpus as $cpu){ ?>
                    <option value="<?php echo $cpu['id']; ?>"><?php echo $cpu['cpu_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">VGA</label>
              <div class="controls">
               <select style="width: 30%" class="col-md-3" name="form[vga]" id="vga">
                   <?php foreach($vgas as $vga){ ?>
                    <option value="<?php echo $vga['id']; ?>"><?php echo $vga['vga_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kích Thước Màn Hình</label>
              <div class="controls">
                <select style="width: 30%" name="form[monitor]" id="monitor">
                    <?php foreach($monitors as $monitor){ ?>
                    <option value="<?php echo $monitor['id']; ?>"><?php echo $monitor['monitor_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Mô Tả</label><br>
              <div class="controls">
                <p style="color: #f22e2e"><?php echo isset($errors['description'])?$errors['description']:''; ?></p>
                <textarea class="" required name="form[description]" id="description"></textarea>
                 <script type="text/javascript">
                    var editor = CKEDITOR.replace( 'description', {
                    filebrowserBrowseUrl: '<?php echo $this->_dir; ?>editor/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '<?php echo $this->_dir; ?>editor/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '<?php echo $this->_dir; ?>editor/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '<?php echo $this->_dir; ?>editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '<?php echo $this->_dir; ?>editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '<?php echo $this->_dir; ?>editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'});
                    CKEDITOR.config.height = '50em';    // 500 pixels wide.
                    CKEDITOR.config.width = '75%';   // CSS unit (percent).
                    CKEDITOR.config.colorButton_colors = 'CF5D4E,454545,FFF,CCC,DDD,CCEAEE,66AB16';
                    CKEDITOR.config.colorButton_enableAutomatic = false;
                  </script>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Hiển Thị</label>
              <div class="controls">
                <label>
                  <input value="1" type="checkbox" name="form[status]" />
                </label>
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" value="Thêm" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>