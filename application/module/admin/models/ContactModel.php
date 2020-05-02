<?php
class ContactModel extends Model{
	
	public function __construct(){
		parent::__construct();
	}
	public function getAllContact(){
		$query = "SELECT * FROM ".TBL_CONTACT;
		$result		= $this->fetchAll($query);
		return $result;
	}

	public function getContact_id($arrParam){
		$id = $arrParam['id'];
		$query  = "SELECT * FROM ".TBL_CONTACT." WHERE id = ".$id;
		$result	= $this->fetchRow($query);
		return $result;
	}

	public function addContact($arrParam){
		$contact_name 	= $arrParam['form']['contact_name'];
		$description 	= $arrParam['form']['description'];
		$status 	 	= isset($arrParam['form']['status']) ? 1 : 0;

		$query = "INSERT INTO ".TBL_CONTACT." (`title`,`content`,`status`) 
				  VALUE ('".$contact_name."','".$description."','".$status."')";
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Thêm thành công !'));
	}

	public function editContact($arrParam){
		$id 			= $arrParam['id'];
		$contact_name 	= $arrParam['form']['contact_name'];
		$description 	= $arrParam['form']['description'];
		$status 	 	= isset($arrParam['form']['status']) ? 1 : 0;
		$query = "UPDATE ".TBL_CONTACT." SET `title` 		  = '".$contact_name."',
											`content` = '".$description."',
											`status`      = '".$status."' WHERE `id` = ".$id;
		$this->query($query);
		Session::set('message', array('class' => 'success', 'content' => 'Chỉnh sửa thành công !'));									
	}
	public function deleteContact($arrParam){
		$id  = $this->filterSql(Helper::xss_clean($arrParam['id']));
		$sql = "DELETE FROM ".TBL_CONTACT." WHERE id = ".$id;
		$this->query($sql);
		Session::set('message', array('class' => 'success', 'content' => 'Xóa Thành Công !'));
	}
	
}