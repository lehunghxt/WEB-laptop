<?php
class CategoryModel extends Model{
	
	private $_userInfo;
	
	public function __construct(){
		parent::__construct();
			
		$this->setTable(TBL_CATEGORY);
		$userObj 			= Session::get('user');
		$this->_userInfo 	= $userObj['info'];
	}

	public function getAllCategory(){
		$query = "SELECT * FROM ".TBL_CATEGORY;
		$result		= $this->fetchAll($query);
		return $result;
	}
	public function addCategory($arrParam){
		$category_name = $this->filterSql(Helper::xss_clean($arrParam['form']['category_name']));
		$url 		   = Helper::convert_vi_to_en($category_name); 
		$description   = $this->filterSql(Helper::xss_clean($arrParam['form']['description']));
		$status 	   = (isset($arrParam['form']['status']) ? 1 : 0);
		$query 		   ="INSERT INTO `".TBL_CATEGORY."` (`name`,`url`,`description`,`status`) 
				        VALUE ('".$category_name."','".$url."','".$description."','".$status."')";
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Thêm thành công !'));
	}
	public function getCategory_id($arrParam){
		$id_cate = $arrParam['id'];
		$query = "SELECT * FROM ".TBL_CATEGORY." WHERE id = ".$id_cate;
		$result		= $this->fetchRow($query);
		return $result;
	}
	public function editCategory($arrParam){
		$id            = $arrParam['id'];
		$category_name = $this->filterSql(Helper::xss_clean($arrParam['form']['category_name']));
		$url 		   = Helper::convert_vi_to_en($category_name); 
		$description   = $this->filterSql(Helper::xss_clean($arrParam['form']['description']));
		$status 	   = (isset($arrParam['form']['status']) ? 1 : 0);
		$query = "UPDATE ".TBL_CATEGORY." SET `name` 	  = '".$category_name."',
											`url` 		  = '".$url."',
											`description` = '".$description."',
											`status`      = '".$status."' WHERE `id` = ".$id;
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Chỉnh sửa thành công !'));
	}
	public function deleteCategory($arrParam){
		$id    = $arrParam['id'];
		$query = "DELETE FROM ".TBL_CATEGORY." WHERE id = ".$id;
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Xóa Thành Công !'));
	}
}
