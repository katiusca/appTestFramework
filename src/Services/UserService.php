<?php
namespace Services;
use Mpwarfw\Component;

class UserService extends \Mpwarfw\Component\DbConnect{

    public $dbConnection;
    //public $templateMostrar;

    public function listAllUsers(){

        $result = $this->dbConnection->getAll("users");
        //$template= $this->templateMostrar->assignParameters($result);
        return $result;
    }

    public function insertUser($parameters){

        $result= $this->dbConnection->insert($parameters);
        return $result;

    }

    /*public function search($id)
    {
        try{
            $query 		= "select name, last_name from users where id = ? limit 0,1";
            $statement 	= $this->connection->prepare($query);
            $statement->bindParam(1,  $id);
            $statement->execute();
        }catch (\PDOException $exception){
            echo "Error: " . $exception->getMessage();
        }
        $row= $statement->fetch(\PDO::FETCH_ASSOC);
        return $row;

    }*/



}