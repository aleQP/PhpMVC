<?php  

class db {
	public static function conexion(){
		try {
			$pdo = new PDO(DBMOTOR.':host'.HOSTNAME.';dbname='.DBNAME, USER, PASS);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "<h1>:)</h1>";
			return $pdo;	
		} catch (PDOException $e) {
			echo ":(".$e->getMessage();
			exit;
		}
	}
}
?>