<?php
class BannerModel extends Model{
	
	public function __construct(){
		parent::__construct();
	}
	public function getAllBanner(){
		$query = "SELECT * FROM ".TBL_BANNER;
		$result		= $this->fetchAll($query);
		return $result;
	}

	public function getBanner($arrParam){
		$id = $arrParam['id'];
		$query  = "SELECT * FROM ".TBL_BANNER." WHERE id = ".$id;
		$result	= $this->fetchRow($query);
		return $result;
	}

	public function addBanner($arrParam){
		require_once LIBRARY_EXT_PATH . 'Upload.php';
		$uploadObj		= new Upload();
		$image 			= $uploadObj->uploadFile($arrParam['form']['image'], 'banner',1400,500);
		$banner_name 	= $arrParam['form']['banner_name'];
		$description 	= $arrParam['form']['description'];
		$status 	 	= isset($arrParam['form']['status']) ? 1 : 0;

		$query = "INSERT INTO ".TBL_BANNER." (`name`,`image`,`description`,`status`) 
				  VALUE ('".$banner_name."','".$image."','".$description."','".$status."')";
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Thêm thành công !'));
	}

	public function editBanner($arrParam){
		$id 			= $arrParam['id'];
		$banner_name 	= $arrParam['form']['banner_name'];
		$description 	= $arrParam['form']['description'];
		$status 	 	= isset($arrParam['form']['status']) ? 1 : 0;
		$query = "UPDATE ".TBL_BANNER." SET `name` 		  = '".$banner_name."',
											`description` = '".$description."',
											`status`      = '".$status."' WHERE `id` = ".$id;
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Chỉnh sửa thành công !'));									
	}
	public function deleteBanner($arrParam){
		$id  = $this->filterSql(Helper::xss_clean($arrParam['id']));
		$query = "SELECT `image` FROM ".TBL_BANNER." WHERE `id` = ".$id;
		$resultImage = $this->fetchRow($query);
		require_once LIBRARY_EXT_PATH . 'Upload.php';
		$uploadObj	= new Upload();
		if(isset($resultImage['image'])){
			$uploadObj->removeFile('banner', $resultImage['image']);
			$uploadObj->removeFile('banner', '60x90-' . $resultImage['image']);
		}

		$sql = "DELETE FROM ".TBL_BANNER." WHERE id = ".$id;
		$this->query($sql);
		Session::set('message', array('class' => 'success', 'content' => 'Xóa Thành Công !'));
	}
	
}