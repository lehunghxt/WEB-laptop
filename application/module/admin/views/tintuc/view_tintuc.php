<?php 
  $linkAddNews    = URL::createLink('admin','news','add',array(),'addNews');
 ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="" class="current">News</a> </div>
    <h1>News</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="pull-right">
      <a class="btn btn-success" href="<?php echo $linkAddNews; ?>">Thêm Tin</a>
    </div>
    <div class="clearfix"></div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>News</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 3%">ID</th>
                  <th style="width: 15%">News</th>
                  <th style="width: 45%">Content</th>
                  <th style="width: 3%">Views</th>
                  <th style="width: 10%">Trạng Thái</th>
                  <th style="width: 12%">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($this->news as $new){ ?>
                  <tr class="odd gradeX">
                    <td><?php echo $new['id']; ?></td>
                    <td><?php echo $new['title']; ?></td>
                    <td>
                      <?php echo substr(strip_tags($new['content']),0,300); ?><?php echo (strlen($new['content']) > 300 ? '. . .' : '') ?>
                    </td>
                    <td><?php echo $new['views']; ?></td>
                    <td class="center">
                      <?php if($new['status'] == 1){ ?>
                        <a href="" class="btn btn-small btn-info">Đang Hiển Thị</a>
                      <?php }else{ ?>
                        <a href="" class="btn btn-small btn-danger">Đang Ẩn</a>
                    <?php } ?>
                    </td>
                    <td class="col-md-2">
                      <?php 
                        $linkEditNews   = URL::createLink('admin','news','edit',array(),'editNews/'.$new['id']);
                        $linkDeleteNews = URL::createLink('admin','news','delete',array(),'deleteNews/'.$new['id']);
                      ?>
                      <a href="<?php echo $linkEditNews; ?>" class="btn btn-small btn-success">Edit</a>
                      <a href="<?php echo $linkDeleteNews; ?>" class="btn btn-small btn-danger">Delete</a>
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