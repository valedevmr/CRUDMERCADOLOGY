
<?php



    class basedatos{

        private $hosting = "localhost";
        private $password = "";
        private $usuario = "root";
        private $database = "crud";
        public $conn;
        function obtenerConexiuon(){
            $this->conn = new mysqli($this->hosting,$this->usuario,$this->password,$this->database);
        }

    }


?>