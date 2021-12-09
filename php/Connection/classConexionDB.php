<?php
$mysqli;

class connection{
	public $mysql;
	
	public function connection($server, $user, $password, $dataBase){
		try{
			$this->mysql = new mysqli($server, $user, $password, $dataBase);
			$this->mysql->set_charset("utf8");
			if ($this->mysql->connect_error)
				die("Fallo la Conexión con la BD! : " . $this->mysql->connect_error);
			//else
			//echo "Connected successfully -> ";
		} catch(Exception $e){
			echo "error e:$e";
		}
	}
	public function getMySQLi(){
		return $this->mysql;
	}
}

function openConnection(){
    global $mysqli;
	//$connection = new connection("66.70.245.82", "museoIT", "Ew30zl$2","museopty01_exp_silver_gold" );   // SERVERHOST
	$connection = new connection("localhost", "root", "","maxpromed" );   // LOCALHOST
	$mysqli = $connection->getMySQLi();

}

function closeConnection(){
        try{
            global $mysqli;
            $mysqli->close();
        } catch(Exception $e){
			//echo "error e:$e";
		}
}

function errorMySQL(){
        global $mysqli;
        $error = trim($mysqli->error);
		if ($error <> '')
			echo "Error en conexión MySQLi: ".$mysqli->error;
}

?>
