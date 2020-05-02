<?php 
 $linkAddContact    = URL::createLink('admin', 'contact', 'add'); 
 $message        = Session::get('message');
 Session::delete('message');
 $strMessage     = Helper::cmsMessage($message);
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="" class="current">Liên hệ</a> </div>
    <h1>Liên hệ</h1>
    <?php echo $strMessage; ?>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="pull-right">
      <a class="btn btn-success" href="<?php echo $linkAddContact; ?>">Thêm</a>
    </div>
    <div class="clearfix"></div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Liên hệ</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 3%">ID</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th style="width: 11%">Trạng Thái</th>
                  <th style="width: 15%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->contact as $cont){ ?>
                <tr class="odd gradeX">
                  <td><?php echo $cont['id']; ?></td>
                  <td><?php echo $cont['title']; ?></td>
                  <td><?php echo $cont['content']; ?></td>
                  <td class="center">
                    <?php if($cont['status'] == 1){ ?>
                      <a href="" class="btn btn-small btn-info">Đang Hiển Thị</a>
                    <?php }else{ ?>
                      <a href="" class="btn btn-small btn-danger">Đang Ẩn</a>
                    <?php } ?>
                  </td>
                  <td class="col-md-2">
                    <?php 
                      $linkEditContact   = URL::createLink('admin','contact','edit',array('id'=>$cont['id']));
                      $linkDeleteContact = URL::createLink('admin','contact','delete',array('id'=>$cont['id']));
                    ?>
                    <a href="<?php echo $linkEditContact;?>" class="btn btn-small btn-success">Chỉnh Sửa</a>
                    <a href="<?php echo $linkDeleteContact;?>" class="btn btn-small btn-danger">Xoá</a>
              
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