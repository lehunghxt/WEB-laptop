<?php
class NewsModel extends Model{
	public function __construct(){
		parent::__construct();
	}
	public function getCategory(){
		$query  = "SELECT * FROM ".TBL_CATEGORY." WHERE `status` = 1";
		$result	= $this->fetchAll($query);
		return $result;
	}
	public function getAllNews(){
		$query  = "SELECT * FROM ".TBL_NEWS." WHERE `status` = 1";
		$result	= $this->fetchAll($query);
		return $result;
	}
	public function getBanner(){
		$query  = "SELECT * FROM ".TBL_BANNER." WHERE `status` = 1";
		$result	= $this->fetchAll($query);
		return $result;
	}
	public function getSidebar(){
		$query  = "SELECT * FROM ".TBL_NEWS." WHERE `status` = 1";
		$result	= $this->fetchAll($query);
		return $result;
	}
	public function getNews($arrParam){
		$url    = $arrParam['url'];
		$query  = "SELECT * FROM ".TBL_NEWS." WHERE `status` = 1 AND `url` = '".$url."'";
		$result	= $this->fetchRow($query);
		return $result;
	}
}