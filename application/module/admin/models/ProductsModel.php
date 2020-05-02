<?php
class ProductsModel extends Model{
	
	 
	public function __construct(){
		parent::__construct();
	}
	public function getAllProduct(){
		$query  = "SELECT ".TBL_PRODUCT.".*, ".TBL_CATEGORY.".name AS cat_name FROM ".TBL_PRODUCT." LEFT JOIN ".TBL_CATEGORY." ON ".TBL_PRODUCT.".category_id = ".TBL_CATEGORY.".id";
		$result	= $this->fetchAll($query);
		return $result;
	}
	public function getAllCategory(){
		$query  = "SELECT * FROM ".TBL_CATEGORY;
		$result	= $this->fetchAll($query);
		return $result;
	}

	public function getAllCPU(){
		$query  = "SELECT * FROM ".TBL_CPU;
		$result	= $this->fetchAll($query);
		return $result;
	}

	public function getAllVGA(){
		$query  = "SELECT * FROM ".TBL_VGA;
		$result	= $this->fetchAll($query);
		return $result;
	}

	public function getAllMonitor(){
		$query  = "SELECT * FROM ".TBL_MONITOR;
		$result	= $this->fetchAll($query);
		return $result;
	}
	public function getProduct($arrParam){
		$id     = $this->filterSql(Helper::xss_clean($arrParam['id']));
		$query  = "SELECT * FROM ".TBL_PRODUCT." WHERE id = ".$id;
		$result	= $this->fetchRow($query);
		return $result;
	}
	public function addProduct($arrParam){
		require_once LIBRARY_EXT_PATH . 'Upload.php';
		$uploadObj		= new Upload();
		$image 			= $uploadObj->uploadFile($arrParam['form']['image'], 'products', 150, 150);
		$category_id 	= $this->filterSql(Helper::xss_clean($arrParam['form']['category_id']));
		$product_name 	= $this->filterSql(Helper::xss_clean($arrParam['form']['product_name']));
		$url		 	= $this->filterSql(Helper::convert_vi_to_en($product_name));
		$price			= $this->filterSql(Helper::xss_clean($arrParam['form']['price']));
		$quantity		= $this->filterSql(Helper::xss_clean($arrParam['form']['quantity']));
		$cpu 			= $this->filterSql(Helper::xss_clean($arrParam['form']['cpu']));
		$vga 			= $this->filterSql(Helper::xss_clean($arrParam['form']['vga']));
		$monitor 		= $this->filterSql(Helper::xss_clean($arrParam['form']['monitor']));
		$description 	= $this->filterSql(Helper::xss_clean($arrParam['form']['description']));
		$status 	    = (isset($arrParam['form']['status']) ? 1 : 0);
		$query = "INSERT INTO `".TBL_PRODUCT."` (`category_id`,`product_name`,`url`,`image`,`price`,`quantity`,`cpu`,`vga`,`monitor`,`description`,`status`) 
				        VALUE ('".$category_id."',
				        		'".$product_name."',
				        		'".$url."',
				        		'".$image."',
				        		'".$price."',
				        		'".$quantity."',
				        		'".$cpu."',
				        		'".$vga."',
				        		'".$monitor."',
				        		'".$description."',
				        		'".$status."')";
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Thêm thành công !'));		        		
	}
	public function editProduct($arrParam){
		$id 			= $arrParam['id'];
		$category_id 	= $this->filterSql(Helper::xss_clean($arrParam['form']['category_id']));
		$product_name 	= $this->filterSql(Helper::xss_clean($arrParam['form']['product_name']));
		$url		 	= $this->filterSql(Helper::convert_vi_to_en($product_name));
		$price			= $this->filterSql(Helper::xss_clean($arrParam['form']['price']));
		$quantity		= $this->filterSql(Helper::xss_clean($arrParam['form']['quantity']));
		$cpu 			= $this->filterSql(Helper::xss_clean($arrParam['form']['cpu']));
		$vga 			= $this->filterSql(Helper::xss_clean($arrParam['form']['vga']));
		$monitor 		= $this->filterSql(Helper::xss_clean($arrParam['form']['monitor']));
		$description 	= $this->filterSql(Helper::xss_clean($arrParam['form']['description']));
		$status 	    = (isset($arrParam['form']['status']) ? 1 : 0);

		$query = "UPDATE ".TBL_PRODUCT." SET `category_id` 	  = '".$category_id."',
											`product_name` = '".$product_name."',
											`url` = '".$url."',
											`price` = '".$price."',
											`quantity` = '".$quantity."',
											`cpu` = '".$cpu."',
											`vga` = '".$vga."',
											`monitor` = '".$monitor."',
											`description` = '".$description."',
											`status`      = '".$status."' WHERE `id` = ".$id;
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Chỉnh sửa thành công !'));
		
	}
	public function deleteProduct($arrParam){
		$id  = $this->filterSql(Helper::xss_clean($arrParam['id']));
		$query = "SELECT `image` FROM ".TBL_PRODUCT." WHERE `id` = ".$id;
		$resultImage = $this->fetchRow($query);
		require_once LIBRARY_EXT_PATH . 'Upload.php';
		$uploadObj	= new Upload();
		if(isset($resultImage['image'])){
			$uploadObj->removeFile('products', $resultImage['image']);
			$uploadObj->removeFile('products', '150x150-' . $resultImage['image']);
		}

		$sql = "DELETE FROM ".TBL_PRODUCT." WHERE id = ".$id;
		$this->query($sql);
		Session::set('message', array('class' => 'success', 'content' => 'Xóa Thành Công !'));
	}
}