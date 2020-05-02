<?php
class IndexModel extends Model{
	
	public function __construct(){
		parent::__construct();
		$this->setTable(TBL_ADMIN);
	}
	public function checkLogin($arrParam){
		$username = $this->filterSql($arrParam['form']['username']);
		$password = $this->filterSql($arrParam['form']['password']);
		$password = md5($password);
		$query  = "SELECT * FROM ".TBL_ADMIN." WHERE `username` = '".$username."' AND `password` = '".$password."'";
		$result	= $this->fetchRow($query);
		return $result;
	}
	
	
}