<?php 
  $category = $this->category;
  $linkEditCate   = URL::createLink('admin', 'category', 'edit',array('id'=>$category['id']),'editCategory/'.$category['id']); 
  $errors = isset($this->errors) ? $this->errors : [];
 ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Danh Mục Sản Phẩm</a> <a href="#" class="current">Danh Mục Sản Phẩm</a> </div>
    <h1>Thêm Danh Mục Sản Phẩm</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5></h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="<?php echo $linkEditAction; ?>" name="edit_cate" id="edit_cate" novalidate="novalidate">
              <input name="form[token]" type="hidden" value="<?php echo time();?>" />
              <div class="control-group">
                <label class="control-label">Tên Danh Mục</label>
                <div class="controls">
                  <input type="text" name="form[category_name]" id="category_name" value="<?php echo $category['name']; ?>">
                   <p style="color: #f22e2e"><?php echo isset($errors['category_name'])?$errors['category_name']:''; ?></p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Mô Tả</label>
                <div class="controls">
                  <input type="text" name="form[description]" id="description" value="<?php echo $category['description']; ?>">
                   <p style="color: #f22e2e"><?php echo isset($errors['description'])?$errors['description']:''; ?></p>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Hiển Thị</label>
                <div class="controls">
                    <input type="checkbox" style="opacity: 1" name="form[status]" value="1" <?php if($category['status'] == 1){?> checked <?php } ?> />
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" name="form[submit]" value="Edit" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>