<?php
require_once 'Database.php';

class UserController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

 

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from users2');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO users2 (firstName,lastName,emailAddress,birthday,pass)
        VALUES (:firstName, :lastName, :emailAddress, :birthday, :pass)');

        $query->bindParam(':firstName', $request['firstName']);
        $query->bindParam(':lastName', $request['lastName']);
        $query->bindParam(':emailAddress', $request['emailAddress']);
        $query->bindParam(':birthday', $request['birthday']);
        $query->bindParam(':pass', $request['pass']);

        $query->execute();

        return header('Location: ../logIn/index.php');
    }
}
?>