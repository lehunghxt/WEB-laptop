<?php 
   $linkAddCate    = URL::createLink('admin', 'contact', 'add');  
  $errors          = isset($this->errors) ? $this->errors : [];
 ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Liên Hệ</a> <a href="#" class="current">Liên Hệ</a> </div>
    <h1>Thêm Liên Hệ</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5></h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="" name="addContact_validate" id="addContact_validate" novalidate="novalidate">
              <input name="form[token]" type="hidden" value="<?php echo time();?>" />
              <div class="control-group">
                <label class="control-label">Tiêu đề</label>
                <div class="controls">
                  <input type="text" name="form[contact_name]" id="contact_name">
                </div>
              </div>
              <div class="control-group">
              <label class="control-label">Nội dung</label><br>
              <div class="controls">
                <textarea class="ckeditor" required name="form[description]" id="description"></textarea>
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
                  <input type="checkbox" value="1"  name="form[status]" />
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