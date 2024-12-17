<?php
    
    namespace app\models;
    use \PDO;

    if (file_exists(__DIR__."/../../config/server.php")) {
        require_once __DIR__."/../../config/server.php";
    }

    class mainModel {
        
        private $serverName = DB_SERVER;
        PRIVATE $dbName = DB_NAME;
        private $dbUser = DB_USER;
        private $dbPassword = DB_PASS;

        protected function dbConnection(){
            $dbConnection = new PDO("mysql:host=".$this->serverName."dbname=".$this->dbName, $this->dbUser, $this->dbPassword);

            $dbConnection->exec("SET CHARACTER SET utf8");

            return $dbConnection;
        }

        protected function dbRequestExecute($request){
            $sql = $this->DbConnection()->prepare($request);
            $sql->execute();

            return $sql;
        }


        public function cleanRequest($string){
            $cleanWords = ["<script>", "</script>", "<script src", "<script type=", 
            "SELECT * FROM", "DELETE FROM", "INSERT INTO", "DROP TABLE", "DROP DATABASE", "TRUNCATE TABLE",
            "SHOW TABLES", "SHOW DATABASES", "<?php", "?>", "--", "<", ">", "=", "==", ";", "::"];

            $string = trim($string);
            
            $string = stripslashes($string);

            foreach ($cleanWords as $cleanWord) {
                $string = str_ireplace($cleanWord, "", $string);
            }

            $string = trim($string);
            
            $string = stripslashes($string);

            return $string;

        }

        protected function verifyData($filter, $string){
            if(preg_match("/^".$filter."$/", $string)) {
                return false;
            }else {
                return true;
            }
            
        }

        protected function saveData($table, $data){
            $query = "INSERT INTO $table(";

            $C = 0;
            foreach($data as $dataKey){
                
            };
            
        }

    }