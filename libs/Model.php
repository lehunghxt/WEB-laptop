<?php
class Model{
	protected $connect;
	protected $database;
	protected $table;
	protected $resultQuery;
	
	// CONNECT DATABASE
	public function __construct($params = null){
		if($params == null){
			$params['server']	= DB_HOST;
			$params['username']	= DB_USER;
			$params['password']	= DB_PASS;
			$params['database']	= DB_NAME;
		}
		$link = mysqli_connect($params['server'], $params['username'], $params['password']);
		if(!$link){
			die('Fail connect: ' . mysqli_errno());
		}else{
			$this->connect 	= $link;
			$this->database = $params['database'];
			// $this->table 	= $params['table'];
			$this->setDatabase();
			$this->query("SET NAMES 'utf8'");
			$this->query("SET CHARACTER SET 'utf8'");
		}
	}
	
	// SET CONNECT
	public function setConnect($connect){
		$this->connect = $connect;
	}
	
	// SET DATABASE- thiet lap database
	public function setDatabase($database = null){
		if($database != null) {
			$this->database = $database;
		}
		mysqli_select_db($this->connect,$this->database);
	}
	
	// SET TABLE - thiet lap table
	public function setTable($table){
		$this->table = $table;
	}
	
	// DISCONNECT DATABASE - ngat ket noi
	public function __destruct(){
		@mysqli_close($this->connect);
	}
	
	// INSERT -  chen noi dung
	public function insert($data, $type = 'single'){
		if($type == 'single'){
			$newQuery 	= $this->createInsertSQL($data);
			$query 		= "INSERT INTO `$this->table`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
			$this->query($query);
		}else{
			foreach($data as $value){
				$newQuery = $this->createInsertSQL($value);
				$query = "INSERT INTO `$this->table`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
				$this->query($query);
			}
		}
		return $this->lastID();
	}
	
	// CREATE INSERT SQL - tao cau insert
	public function createInsertSQL($data){
		$newQuery = array();
		if(!empty($data)){
			foreach($data as $key=> $value){
				$cols .= ", `$key`";
				$vals .= ", '$value'";
			}
		}
		$newQuery['cols'] = substr($cols, 2);
		$newQuery['vals'] = substr($vals, 2);
		return $newQuery;
	}
	
	// LAST ID - lay ra id vua insert 
	public function lastID(){
		return mysqli_insert_id($this->connect);
	}
	
	// QUERY - truy van
	public function query($query){
		$this->resultQuery = mysqli_query( $this->connect,$query);
		return $this->resultQuery;
	}
	
	// UPDATE - cap nhap bang
	public function update($data, $where){
		$newSet 	= $this->createUpdateSQL($data);
		$newWhere 	= $this->createWhereUpdateSQL($where);
		$query = "UPDATE `$this->table` SET " . $newSet . " WHERE $newWhere";
		$this->query($query);
		return $this->affectedRows();
	}
	
	// CREATE UPDATE SQL
	public function createUpdateSQL($data){
		$newQuery = "";
		if(!empty($data)){
			foreach($data as $key => $value){
				$newQuery .= ", `$key` = '$value'";
			}
		}
		$newQuery = substr($newQuery, 2);
		return $newQuery;
	}
	
	// CREATE WHERE UPDATE SQL
	public function createWhereUpdateSQL($data){
		$newWhere = '';
		if(!empty($data)){
			foreach($data as $value){
				$newWhere[] = "`$value[0]` = '$value[1]'";
				$newWhere[] = $value[2];
			}
			$newWhere = implode(" ", $newWhere);
		}

		return $newWhere;
	}
	
	// AFFECTED ROWS - lap qua tung phan tu cua ket qua tra ve
	public function affectedRows(){
		return mysqli_affected_rows($this->connect);
	}
	
	// DELETE - xoa
	public function delete($where){
		$newWhere 	= $this->createWhereDeleteSQL($where);
		$query 		= "DELETE FROM `$this->table` WHERE `id` IN ($newWhere)";
		$this->query($query);
		return $this->affectedRows();
	}
	
	// CREATE WHERE DELTE SQL
	public function createWhereDeleteSQL($data){
		$newWhere = '';
		if(!empty($data)){
			foreach($data as $id) {
				$newWhere .= "'" . $id . "', ";
			}
			$newWhere .= "'0'";
		}
		return $newWhere;
	}
	
	// LIST RECORD - lay ra tat ca
	public function fetchAll($query){
		$result = array();
		if(!empty($query)){
			$resultQuery = $this->query($query);
			if(mysqli_num_rows($resultQuery) > 0){
				while($row = mysqli_fetch_assoc($resultQuery)){
					$result[] = $row;
				}
				mysqli_free_result($resultQuery);
			}
		}
		return $result;
	}
	
	// LIST RECORD
	public function fetchPairs($query){
		$result = array();
		if(!empty($query)){
			$resultQuery = $this->query($query);
			if(mysqli_num_rows($resultQuery) > 0){				
				while($row = mysqli_fetch_assoc($resultQuery)){
					$result[$row['id']] = $row['name'];
				}
				mysqli_free_result($resultQuery);
			}
		}
		return $result;
	}
	
	// SINGLE RECORD
	public function fetchRow($query){
		$result = array();
		if(!empty($query)){
			$resultQuery = $this->query($query);
			if(mysqli_num_rows($resultQuery) > 0){
				$result = mysqli_fetch_assoc($resultQuery);
			}
			mysqli_free_result($resultQuery);
		}
		return $result;
	}
	
	// EXIST
	public function isExist($query){
		if($query != null) {
			$this->resultQuery = $this->query($query);
		}
		if(mysqli_num_rows($this->resultQuery ) > 0) return true;
		return false;
	}
	// filter sql injection
	public function filterSql($data){
		return	mysqli_real_escape_string($this->connect, $data);
	}
}