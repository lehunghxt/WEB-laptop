<?php 
  $linkAddNews    = URL::createLink('admin','news','add',array(),'addNews');
  $errors = isset($this->errors) ? $this->errors : [];
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Tin Tức</a> <a href="#" class="current">Tin Tức</a> </div>
    <h1>Thêm Tin Tức</h1>

  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5></h5>
        </div>
        <div class="widget-content nopadding">
          <form  enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo $linkAddNews; ?>" name="" id="" novalidate="novalidate">
            <input name="form[token]" type="hidden" value="<?php echo time();?>" />
            <div class="control-group">
              <label class="control-label">Title</label>
              <div class="controls">
                <input style="width: 75%" type="text" name="form[title]" id="title">
                <p style="color: #f22e2e"><?php echo isset($errors['title'])?$errors['title']:''; ?></p>
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
              <label class="control-label">Mô Tả</label><br>
              <div class="controls">
                <p style="color: #f22e2e"><?php echo isset($errors['description'])?$errors['description']:''; ?></p>
                <textarea class="ckeditor" required name="form[description]" id="description"></textarea>
                <script type="text/javascript">
                  var editor = CKEDITOR.replace( 'description', {
                  filebrowserBrowseUrl: '{{ asset('editor/ckfinder/ckfinder.html') }}',
                  filebrowserImageBrowseUrl: '{{ asset('editor/ckfinder/ckfinder.html?type=Images') }}',
                  filebrowserFlashBrowseUrl: '{{ asset('editor/ckfinder/ckfinder.html?type=Flash') }}',
                  filebrowserUploadUrl: '{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                  filebrowserImageUploadUrl: '{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                  filebrowserFlashUploadUrl: '{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                  } );
                  CKEDITOR.config.height = '50em';
                  CKEDITOR.config.width = '75%';
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