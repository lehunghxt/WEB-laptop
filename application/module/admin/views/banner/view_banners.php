<?php   
    $linkAddBanner    = URL::createLink('admin','banner','add',array(),'addBanner');
    $message  = Session::get('message');
    Session::delete('message');
    $strMessage = Helper::cmsMessage($message);
 ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="" class="current">Banner</a> </div>
    <h1>Banner</h1>
     <?php echo $strMessage; ?>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="pull-right">
      <a class="btn btn-success" href="<?php echo $linkAddBanner; ?>">Thêm Banner</a>
    </div>
    <div class="clearfix"></div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Banner</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 3%">ID</th>
                  <th>Banner</th>
                  <th>Hình Ảnh</th>
                  <th>Mô Tả</th>
                  <th style="width: 11%">Trạng Thái</th>
                  <th style="width: 14%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->banners as $banner){ ?>
                  <tr class="odd gradeX">
                    <td><?php echo $banner['id']; ?></td>
                    <td><?php echo $banner['name']; ?></td>
                    <td><?php echo $banner['image']; ?></td>
                    <th><?php echo $banner['description']; ?></th>
                    <td>
                      <?php if($banner['status'] == 1){ ?>
                        <button class="btn-sm btn-success">Đang hiển thị</button>
                       <?php }else{ ?>
                        <button class="btn-sm btn-success">Đang ẩn</button>
                       <?php } ?>
                    </td>
                    <td class="col-md-2">
                      <?php 
                          $linkEditBanner   = URL::createLink('admin','banner','edit',array('id'=>$banner['id']),'editBanner/'.$banner['id']);
                          $linkDeleteBanner = URL::createLink('admin','banner','delete',array('id'=>$banner['id']),'deleteBanner/'.$banner['id']);
                       ?>
                      <a href="<?php echo $linkEditBanner;?>" class="btn btn-small btn-success">Edit</a>
                      <a href="<?php echo $linkDeleteBanner;?>" class="btn btn-small btn-danger">Delete</a>
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