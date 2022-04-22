<?php  

class User{
	private $db;
	private $users;

	public function __construct(){
		$this->db = db::conexion();
		// $this->users = array();
	}

	public function get_users(){
		$sql = "SELECT * FROM usuarios";
		$query = $this->db->prepare($sql);		
		$query->execute();
		$users = $query->fetchAll(PDO::FETCH_ASSOC);
		return $users;
	}

	// public function get_user(){
	// 	$stmt = $this->db->prepare('SELECT * FROM usuarios WHERE id = :id');
	// 	$stmt->execute(['id' => 1]);
	// }


	public function create($name, $ap_father, $ap_mother, $birthday, $gender, $domicile, $email, $number){
		$sql = "INSERT INTO usuarios (name, ap_father, ap_mother, birthday, gender, domicile, email, number) values ('$name', '$ap_father', '$ap_mother', '$birthday', '$gender', '$domicile', '$email', '$number')";
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query;
	}
}

?>