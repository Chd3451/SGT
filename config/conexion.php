<?php
session_start();

class Conectar{
    protected $dbh;

    public function Conexion(){
        try {
            // Local connection
            $conectar = $this->dbh = new PDO("mysql:host=localhost;port=3307;dbname=dbtest", "root", "1234");
            // Set PDO error mode to exception
            $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conectar;
        } catch (Exception $e) {
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public static function ruta(){
        // Local
        return "http://localhost:80/SGT/";
        
    }
}

// Create a new instance of the Conectar class
$conexion = new Conectar();
// Call the Conexion method to establish the database connection
$conexion->Conexion();
?>
