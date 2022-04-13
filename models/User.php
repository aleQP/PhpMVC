<?php  

class User{
	private $db;
	private $users;

	public function __construct(){
		$this->db = db::conexion();
		$this->users = array();
	}

	public function get_users(){
		$sql = "SELECT * FROM usuarios";
		
		$query = $this->db->prepare($sql);
		$query->execute();
		$users = $query->fetchAll(PDO::FETCH_OBJ);

		// print_r($sql);
		// print_r($result);
		// while($row = $result->fetch_assoc()){
		// 	$this->users[] = $row;
		// }
		// return $this->users;
		return $this->users;
	}

	// public function get_user(){
	// 	$stmt = $this->db->prepare('SELECT * FROM usuarios WHERE id = :id');
	// 	$stmt->execute(['id' => 1]);
	// }
}

?>