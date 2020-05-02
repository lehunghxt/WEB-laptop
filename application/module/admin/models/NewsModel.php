<?php
class NewsModel extends Model{
	
	public function __construct(){
		parent::__construct();
	}
	public function getAllNews(){
		$query = "SELECT * FROM ".TBL_NEWS;
		$result		= $this->fetchAll($query);
		return $result;
	}
	public function getNews($arrParam){
		$id     = $this->filterSql(Helper::xss_clean($arrParam['id']));
		$query  = "SELECT * FROM ".TBL_NEWS." WHERE id = ".$id;
		$result	= $this->fetchRow($query);
		return $result;
	}
	public function addNews($arrParam){
		require_once LIBRARY_EXT_PATH . 'Upload.php';
		$uploadObj		= new Upload();
		$image 			= $uploadObj->uploadFile($arrParam['form']['image'], 'news');
		$title 			= $this->filterSql(Helper::xss_clean($arrParam['form']['title']));
		$url 			= Helper::convert_vi_to_en($title);
		$description 	= $this->filterSql(Helper::xss_clean($arrParam['form']['description']));
		$status 	 	= isset($arrParam['form']['status']) ? 1 : 0;

		$query = "INSERT INTO ".TBL_NEWS." (`title`,`url`.`image`,`content`,`status`) 
				  VALUE ('".$title."','".$url."','".$image."','".$description."','".$status."')";
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Thêm thành công !'));
	}
	public function editNews($arrParam){

		$id 			= $arrParam['id'];
		$title 			= $this->filterSql(Helper::xss_clean($arrParam['form']['title']));
		$url 			= Helper::convert_vi_to_en($title);
		$description 	= $this->filterSql(Helper::xss_clean($arrParam['form']['description']));
		$status 	 	= isset($arrParam['form']['status']) ? 1 : 0;

		$query = "UPDATE ".TBL_NEWS." SET   `title`   = '".$title."',
											`url`  	  = '".$url."',
											`content` = '".$description."',
											`status`  = '".$status."' WHERE `id` = ".$id;
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Chỉnh sửa thành công !'));

	}
	public function deleteNews($arrParam){
		$id  = $this->filterSql(Helper::xss_clean($arrParam['id']));
		$query = "SELECT `image` FROM ".TBL_NEWS." WHERE `id` = ".$id;
		$resultImage = $this->fetchRow($query);
		require_once LIBRARY_EXT_PATH . 'Upload.php';
		$uploadObj	= new Upload();
		if(isset($resultImage['image'])){
			$uploadObj->removeFile('news', $resultImage['image']);
			$uploadObj->removeFile('news', '60x90-' . $resultImage['image']);
		}

		$sql = "DELETE FROM ".TBL_NEWS." WHERE id = ".$id;
		$this->query($sql);
		Session::set('message', array('class' => 'success', 'content' => 'Xóa Thành Công !'));
	}
}