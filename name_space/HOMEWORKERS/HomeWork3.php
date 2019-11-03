<?php

namespace HOMEWORKERS;


class HomeWork3
{
    //private $Alphabet = "абвгдеёжзийклмнопрстуфхцчшщъыьэюя";
    private $UPAlphabet = ["А","Б","В","Г","Д","Е","Ё","Ж","З","И","Й","К","Л","М","Н","О","П","Р","С","Т","У","Ф","Х","Ц","Ч","Ш","Щ","Ъ","Ы","Ь","Э","Ю","Я"]; //Заебала.....
    private $Alphabet = ["a","б","в","г","д","е","ё","ж","з","и","й","к","л","м","н","о","п","р","с","т","у","ф","х","ц","ч","ш","щ","ъ","ы","ь","э","ю","я"];
    private $connection = null;

    public function __construct($in_connection)
    {
        $this->connection = $in_connection;
    }

    public function Task1CreateRows()
    {
        $temp_name = "";
        $temp_age = 0;
        $this->connection->execute_query_insert("INSERT INTO USERS (NAME, AGE) VALUES ('Павел', 21)");
        $this->connection->execute_query_insert("INSERT INTO USERS (NAME, AGE) VALUES ('Егор', 45)");
        $this->connection->execute_query_insert("INSERT INTO USERS (NAME, AGE) VALUES ('Иван', 22)");
        $this->connection->execute_query_insert("INSERT INTO USERS (NAME, AGE) VALUES ('Данил', 22)");
        $this->connection->execute_query_insert("INSERT INTO USERS (NAME, AGE) VALUES ('Жора', 22)");
        for($i = 0; $i < 995; $i++){
            $temp_age = rand(10, 100);
            $temp_name = $this->create_name();
            $this->connection->execute_query_insert("INSERT INTO USERS (NAME, AGE) VALUES ('$temp_name', $temp_age)");
        }
    }

    private function create_name()
    {
        $new_name = '';
        $new_name .= $this->UPAlphabet[rand(0, 32)];
        for($i = 0; $i < 14; $i++){
            $new_name .= $this->Alphabet[rand(0, 32)];
        }
        return $new_name;
        //return ucfirst($new_name);
        //return mb_convert_case($new_name, MB_CASE_TITLE, "UTF-8");
    }

    public function Task2RowsAgeBig50()
    {
        $result = $this->connection->execute_query_select("SELECT NAME, AGE FROM USERS WHERE AGE > 50");
        foreach ($result as $row){
            echo "NAME :: " . $row["NAME"] . "  || AGE :: " . $row["AGE"] . PHP_EOL;
        }
    }

    public function Task3SelectLike()
    {
        $result = $this->connection->execute_query_select("SELECT NAME, AGE FROM USERS WHERE NAME LIKE '%ав%' OR NAME LIKE '%аб%'");
        return json_encode($result, JSON_UNESCAPED_UNICODE);
    }

    public function Task4Update()
    {
        $result = $this->connection->execute_query_select("SELECT ID, NAME FROM USERS WHERE AGE > 70");
        foreach ($result as $row){
            $new_name = $this->create_name();
            $temp_ID = $row["ID"];
            echo "ID :: " . $row["ID"] . "  AGE :: " . $row["AGE"] . "  || old_NAME :: " . $row["NAME"] . "  -->  new_NAME :: " . $new_name . PHP_EOL;
            $this->connection->execute_query_insert("UPDATE USERS SET NAME = '$new_name' WHERE ID = $temp_ID");
        }
    }

    public function Task5Distinct()
    {
        //$result = $this->connection->execute_query_select("SELECT DISTINCT NAME FROM USERS");
        $result = $this->connection->execute_query_select("SELECT NAME, COUNT(NAME) AS 'COL' FROM USERS GROUP BY NAME");
        $i = 1;
        foreach ($result as $row){
            if ($row["COL"] == 1) {
                echo $i . ":  NAME :: " . $row["NAME"] . PHP_EOL;
                $i++;
            }
        }
    }
}