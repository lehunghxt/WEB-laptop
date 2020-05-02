<?php 
  $linlAdd  = URL::createLink('admin', 'products', 'add',array(),'addProduct');
 
  $message  = Session::get('message');
  Session::delete('message');
  $strMessage = Helper::cmsMessage($message);
 ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}" class="current">Laptop</a> </div>
    <h1>Laptop</h1>
   <?php echo $strMessage; ?>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="pull-right">
      <a href="<?php echo $linlAdd; ?>" class="btn btn-success">Thêm Sản Phẩm</a>
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
                  <th style="width: 3%">ID</th>
                  <th>Hãng Laptop</th>
                  <th>Tên Sản Phẩm</th>
                  <th>Hình Ảnh</th>
                  <th>Giá Tiền</th>
                  <th style="width: 3%">Số Lượng</th>
                  <th style="width: 11%">Trạng Thái</th>
                  <th style="width: 15%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->products as $product){ ?>
                  <tr class="odd gradeX">
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['cat_name']; ?></td>
                    <td><?php echo $product['product_name']; ?></td>
                    <td>
                      <img style="width: 100px;height: auto" src="<?php echo 'public/images/products/'.$product['image']; ?>" alt="<?php echo $product['product_name']; ?>">
                    </td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['quantity']; ?></td>
                    <td>
                      <?php if($product['status'] == 1){ ?>
                        <button class="btn-sm btn-success">Đang hiển thị</button>
                       <?php }else{ ?>
                        <button class="btn-sm btn-success">Đang ẩn</button>
                       <?php } ?>
                    </td>
                    <td class="col-md-2">
                      <?php 
                          $linlEdit = URL::createLink('admin', 'products', 'edit',array('id'=>$product['id']),'editProduct/'.$product['id']);
                          $linkDel  = URL::createLink('admin', 'products', 'delete',array('id'=>$product['id']),'deleteProduct/'.$product['id']);
                       ?>
                      <a href="<?php echo $linlEdit; ?>" class="btn btn-small btn-success">Edit</a>
                      <a href="<?php echo $linkDel; ?>" class="btn btn-small btn-danger">Delete</a>
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