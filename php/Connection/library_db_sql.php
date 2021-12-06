<?php
class Query
{
    public $mysql;
    private $stmt;
    public function Query($con, $query)
    {
     
        if ($con == false || !$con) {
            echo "Conexion no es valida";
            die();
        }
        $this->mysql = $con;
        $this->stmt  = $this->mysql->prepare($query);
        if (!$this->stmt) {
            echo "Error Query: " . $this->mysql->error;
        }
    }

    public function getresults($parametros = null)
    {
//Analizador de consultas preparadas
        $stmt       = $this->stmt;
        $parameters = array();
        $results    = array();

        if ($parametros != null and count($parametros) > 0) {
            call_user_func_array(array($stmt, 'bind_param'), $parametros);
        }

        $stmt->execute();
        $meta = $stmt->result_metadata();

        if ($meta) {
            while ($field = $meta->fetch_field()) {
                $parameters[] = &$row[$field->name];
            }
            $meta->free();
            call_user_func_array(array($stmt, 'bind_result'), $parameters);

            while ($stmt->fetch()) {
                $x = array();
                foreach ($row as $key => $val) {
                    $x[$key] = $val;
                }

                $results[] = (object) $x;
            }

            while ($this->mysql->more_results()) {
                //Eliminamos otros resultados
                $this->mysql->next_rlesult();
                $this->mysql->use_result();
            }
            // $stmt->close();
            return $results;
        }
    }

}

//////////////////////////////////////////////////////////////////////////////////////////////////////

function newAppointment($AP_REGISTER,$NAME,$LASTNAME,$EMAIL,$PHONE,$RESIDENCE,$BIRTHDATE,$TEST_TYPE,$TEST_LOCATION,$TEST_DATE,$TEST_HOUR){

    global $mysqli;
    $query      = new Query($mysqli, "INSERT into appointment(ap_meet_register,ap_name,ap_lastname,ap_email,ap_cellphone,ap_residence,ap_birthdate,ap_test_type,ap_test_location,ap_test_date,ap_test_hour) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $parametros = array('sssssssssss', &$AP_REGISTER,&$NAME,&$LASTNAME,&$EMAIL,&$PHONE,&$RESIDENCE,&$BIRTHDATE,&$TEST_TYPE,&$TEST_LOCATION,&$TEST_DATE,&$TEST_HOUR);
    $data       = $query->getresults($parametros);
    return true;

}

/////////////////////////////////////////////////////////////////////////////////////////////


function LogSystem($data){   

    /////////////////////////////////////////////////////////////////////////////////
    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    
    $dateFormat = $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " de ".date('Y') ;
    ///////////////////////////////////////////////////////////////////////////////////

    $file = fopen("logs.txt", "a+");
    fwrite($file,$dateFormat." -> ".$data.PHP_EOL);
    fclose($file);

}



?>
