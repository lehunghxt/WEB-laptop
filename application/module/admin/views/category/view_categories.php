<?php 
 $linkAddCate    = URL::createLink('admin', 'category', 'add',array(),'addCategory'); 
 $message = Session::get('message');
 Session::delete('message');
 $strMessage = Helper::cmsMessage($message);
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Categories</a> </div>
    <h1>Hãng Laptop</h1>
    <div id="system-message-container"><?php echo $strMessage;?></div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="pull-right">
      <a class="btn btn-success" href="<?php echo $linkAddCate; ?>">Thêm Hãng Laptop</a>
    </div>
    <div class="clearfix"></div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Hãng Laptop</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 5%">ID</th>
                  <th>Tên Hãng</th>
                  <th>Mô Tả</th>
                  <th style="width: 11%">Trạng Thái</th>
                  <th style="width: 15%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->categories as $category) { ?>
                  <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td><?php echo $category['description']; ?></td>
                    <td>
                      <?php if($category['status'] == 1){ ?>
                        <button class="btn-sm btn-success">Đang hiển thị</button>
                       <?php }else{ ?>
                        <button class="btn-sm btn-success">Đang ẩn</button>
                       <?php } ?>
                    </td>
                    <td>
                      <?php 
                        $linkEditCate   = URL::createLink('admin', 'category', 'edit',array('id'=>$category['id']),'editCategory/'.$category['id']); 
                        $linkDeleteCate = URL::createLink('admin', 'category', 'delete',array('id'=>$category['id']),'deleteCategory/'.$category['id']); 
                       ?>
                      <a class="btn btn-small btn-success" href="<?php echo $linkEditCate; ?>">Edit</a>
                      <a class="btn btn-small btn-danger" href="<?php echo $linkDeleteCate; ?>">Delete</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>