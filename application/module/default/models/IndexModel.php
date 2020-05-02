<?php
class IndexModel extends Model{
	public function __construct(){
		parent::__construct();
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
	// lay tat ca cac san pham
	public function getAllProduct(){
		$query  = "SELECT * FROM ".TBL_PRODUCT." WHERE `status` = 1";
		$result	= $this->fetchAll($query);
		return $result;
	}
	// lay san pham theo ten san pham
	public function getProduct($arrParam){
		$url = $arrParam['url'];
		$query  = "SELECT * FROM ".TBL_PRODUCT." WHERE `status` = 1 AND `url` = '".$url."'";
		$result	= $this->fetchRow($query);
		return $result;
	}
	// lay banner
	public function getBanner(){
		$query  = "SELECT * FROM ".TBL_BANNER." WHERE `status` = 1";
		$result	= $this->fetchAll($query);
		return $result;
	}
	// lay loai san phẩm
	public function getCategory(){
		$query  = "SELECT * FROM ".TBL_CATEGORY." WHERE `status` = 1";
		$result	= $this->fetchAll($query);
		return $result;
	}
	// lấy sản phẩm theo loại sản phẩm
	public function getProductInCate($arrParam){
		$url = $arrParam['url'];
		$queryID  = "SELECT `id` FROM ".TBL_CATEGORY." WHERE `status` = 1 AND `url` = '".$url."'";
		$cateID	= $this->fetchRow($queryID);
		if(empty($cateID)){
			return;
		}
		$query  = "SELECT * FROM ".TBL_PRODUCT." WHERE `status` = 1 AND `category_id` = '".$cateID['id']."'";
		$result	= $this->fetchAll($query);
		return $result;
	}
	// lấy tin đổ cho sidebar
	public function getSidebar(){
		$query  = "SELECT * FROM ".TBL_NEWS." WHERE `status` = 1";
		$result	= $this->fetchAll($query);
		return $result;
	}
	// tìm kiếm sản phẩm
	public function searchProduct($name){
		$name   = $this->filterSql($name);
		$query  = "SELECT * FROM ".TBL_PRODUCT." WHERE `status` = 1 AND (`product_name` LIKE '%".$name."%')";
		$result	= $this->fetchAll($query);
		return $result;
	}

	public function filterProduct($filter){
		$query  = "SELECT * FROM ".TBL_PRODUCT." WHERE `status` = 1 AND (";
		$cate 	 = $this->filterSql($filter['cate']);
		$cpu  	 = $this->filterSql($filter['cpu']);
		$vga  	 = $this->filterSql($filter['vga']);
		$monitor = $this->filterSql($filter['monitor']);
		$query  = "SELECT * FROM ".TBL_PRODUCT." WHERE `status` = 1 AND (`category_id` = ".$cate." 
																		 OR `cpu`     		= ".$cpu." 
																		 OR `vga` 	  		= ".$vga."
																		 OR `monitor` 		= ".$monitor.")";
		$result	= $this->fetchAll($query);
		return $result;
	}

}