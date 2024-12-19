<?php

namespace app\models;

use \PDO;

if (file_exists(__DIR__ . "/../../config/server.php")) {
    require_once __DIR__ . "/../../config/server.php";
}

class mainModel
{

    private $serverName = DB_SERVER;
    private $dbName = DB_NAME;
    private $dbUser = DB_USER;
    private $dbPassword = DB_PASS;

    // FUNCTION TO CONNECT TO DATABASE
    protected function dbConnection()
    {
        $dbConnection = new PDO("mysql:host=" . $this->serverName . "dbname=" . $this->dbName, $this->dbUser, $this->dbPassword);

        $dbConnection->exec("SET CHARACTER SET utf8");

        return $dbConnection;
    }


    // FUNCTION TO EXECUTE REQUESTS TO DATABASE
    protected function dbRequestExecute($request)
    {
        $sql = $this->DbConnection()->prepare($request);
        $sql->execute();

        return $sql;
    }

    // FUNCTION TO ENCRYPT PASSWORDS IN THE PASS FIELD
    public function cleanRequest($string)
    {
        $cleanWords = [
            "<script>",
            "</script>",
            "<script src",
            "<script type=",
            "SELECT * FROM",
            "DELETE FROM",
            "INSERT INTO",
            "DROP TABLE",
            "DROP DATABASE",
            "TRUNCATE TABLE",
            "SHOW TABLES",
            "SHOW DATABASES",
            "<?php",
            "?>",
            "--",
            "<",
            ">",
            "=",
            "==",
            ";",
            "::"
        ];

        $string = trim($string);

        $string = stripslashes($string);

        foreach ($cleanWords as $cleanWord) {
            $string = str_ireplace($cleanWord, "", $string);
        }

        $string = trim($string);

        $string = stripslashes($string);

        return $string;
    }


    protected function verifyData($filter, $string)
    {
        if (preg_match("/^" . $filter . "$/", $string)) {
            return false;
        } else {
            return true;
        }
    }

    // FUNCTION TO SAVE DATA IN DATABASE
    protected function saveDataTable($table, $data)
    {
        $query = "INSERT INTO $table (";

        $counter = 0;
        foreach ($data as $dataKey) {

            if ($counter >= 1) {
                $query .= ", ";
            }

            $query .= $dataKey["field_userName"];
            $counter++;
        };

        $query .= ") VALUES (";

        $counter = 0;
        foreach ($data as $dataKey) {

            if ($counter >= 1) {
                $query .= ", ";
            }

            $query .= $dataKey["field_tagName"];
            $counter++;
        };

        $query .= ")";

        $sql = $this->dbConnection()->prepare($query);

        foreach ($data as $dataKey) {
            $sql->bindParam(
                $dataKey["field_tagName"],
                $dataKey["field_userName"],
                $dataKey["field_typeValue"]
            );
        };

        $sql->execute();

        return $sql;
    }

    // FUNCTION TO SELECT DATA FROM DATABASE
    public function selectData($type, $table, $field, $id)
    {
        $type = $this->cleanRequest($type);
        $table = $this->cleanRequest($table);
        $field = $this->cleanRequest($field);
        $id = $this->cleanRequest($id);

        if ($type == "unique") {
            $sql = $this->dbConnection()->prepare("SELECT * FROM $table WHERE $field = :ID");
            $sql->bindParam(":ID", $id);
        } elseif ($type == "all") {
            $sql = $this->dbConnection()->prepare("SELECT $field FROM $table");
        }

        $sql->execute();

        return $sql;
    }

    // FUNCTION TO UPDATE DATA FROM DATABASE
    protected function updateData($table, $data, $condition)
    {
        $query = "UPDATE $table SET ";

        $counter = 0;
        foreach ($data as $dataKey) {
            if ($counter >= 1) {
                $query .= ", ";
            }
            $query .= $dataKey["field_userName"] . " = " . $dataKey["field_tagName"];
            $counter++;
        }

        $query .= " WHERE " . $condition["condition_field"] . " = " . $condition["condition_tagName"];

        $sql = $this->dbConnection()->prepare($query);

        foreach ($data as $dataKey) {
            $sql->bindParam(
                $dataKey["field_tagName"],
                $dataKey["field_userName"],
                $dataKey["field_typeValue"]
            );
        };

        $sql->bindParam($condition["condition_tagName"], $condition["condition_typeValue"]);

        $sql->execute();

        return $sql;
    }

    // FUNCTION TO DELETE DATA FROM DATABASE
    protected function deleteData($table, $field, $id)
    {
        $sql = $this->dbConnection()->prepare("DELETE FROM $table WHERE $field = :ID");

        $sql->bindParam(":ID", $id);

        $sql->execute();

        return $sql;
    }

    // FUNCTION TO COUNT DATA FROM DATABASE
    protected function paginationData($page, $numPages, $url, $buttons)
    {

        $table = '<nav aria-label="Page navigation">';

        if ($page <= 1) {
            $table .= '
            <ul class="inline-flex -space-x-px text-base h-10">
                <li>
                    <a href="' . $url . '" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" disabled>Anterior</a>
                </li>';
        } else {
            $table .= '
            <ul class="inline-flex -space-x-px text-base h-10">
                <li>
                    <a href="' . $url . ($page - 1) . '/" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Anterior</a>
                </li>
                    <li>
                    <a href="' . $url . '1/" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>';
        }

        $iterationCounter = 0;
        for ($counter = $page; $counter <= $numPages; $counter++) {
            if ($iterationCounter >= $buttons) {
                break;
            }

            if ($page == $counter) {
                $table .= '
                <li>
                    <a href="' . $url . $counter . '/" aria-current="page" class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">' . $counter . '</a>
                </li>';
            } else {
                $table .= '
                <li>
                    <a href="' . $url . $counter . '/" aria-current="page" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">' . $counter . '</a>
                </li>';
            }

            if ($page == $numPages) {
                $table .= '
                <li>
                   <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" disabled>Siguiente</a>
                </li>
            </ul>
                ';
            } else {
                $table .= '
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" disabled>Siguiente</a>
                </li>
            </ul>
                ';
            }


            $iterationCounter++;
        }
    }
}
