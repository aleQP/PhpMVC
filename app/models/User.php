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

	public function get_user($id){
		$query = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id LIMIT 1");
		$query->execute(['id' => $id]);
		$user = $query->fetch(PDO::FETCH_ASSOC);
		return $user;
	}


	public function create($name, $ap_father, $ap_mother, $birthday, $gender, $domicile, $email, $phone){
		$sql = "INSERT INTO usuarios (name, ap_father, ap_mother, birthday, gender, domicile, email, phone) values ('$name', '$ap_father', '$ap_mother', '$birthday', '$gender', '$domicile', '$email', '$phone')";
		$query = $this->db->prepare($sql);
		$query->execute();
		echo ($this->db->lastInsertId());
		// echo $last;
		return $query;
	}

	public function update($id, $name, $ap_father, $ap_mother, $birthday, $gender, $domicile, $email, $phone){

		$sql = "UPDATE usuarios SET name=:name, ap_father=:ap_father, ap_mother=:ap_mother, birthday=:birthday, gender=:gender, domicile=:domicile, email=:email, phone=:phone WHERE id = :id";
		$query = $this->db->prepare($sql);
		$query->execute([':id'=>$id, ':name'=>$name, ':ap_father'=>$ap_father, ':ap_mother'=>$ap_mother, ':birthday'=>$birthday, ':gender'=>$gender, ':domicile'=>$domicile, ':email'=>$email, ':phone'=>$phone]);
		return $query;
	}	

	public function delete($id){
			$sql = "DELETE FROM usuarios WHERE id=:id";
			$query = $this->db->prepare($sql);
			$query->execute([':id'=>$id]);
			return $query;
	}
}

?>