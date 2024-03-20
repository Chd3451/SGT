<?php
    session_start();

    class Conectar{
        protected $cdb;

        protected function Conexion(){
            try {
				$conectar = $this->cdb = new PDO("mysql:local=localhost;dbname=dbtickets","root","");
                
			} catch (Exception $ex) {
				print "¡Error al conectarse con la bd!: " . $ex->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->cdb->query("SET NAMES 'utf8'");
        }

        public static function ruta(){

			return "http://localhost:80/SGT/";
            
		}

    }
?>