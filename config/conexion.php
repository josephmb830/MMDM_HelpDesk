<?php
    session_start();
    
    class Conectar {
        protected $dbh;
        protected function Conexion(): PDO{
            try{
                $conectar = $this->dbh = new PDO(dsn: "mysql:local=localhost;dbname=mmdm_helpdesk", username:"root", password:"");
                return $conectar;
            } catch (Exception $e) {
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
        
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public function ruta(){
            return "http://localhost:90/MMDM_HelpDesk";
        }
    }
?>