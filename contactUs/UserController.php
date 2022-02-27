<?php
require_once 'Database.php';

class UserController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

 

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from users');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO users (username, email, phone,mesazhi)
        VALUES (:username, :email, :phone, :mesazhi)');
    
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':phone', $request['phone']);
        $query->bindParam(':mesazhi', $request['mesazhi']);
        
        $query->execute();

        return header('Location: ../home/index.php');
    }

    public function delete($username){
        $query = $this->db->pdo->prepare('DELETE from users WHERE username=:username');
        $query->bindParam(':username', $username);
        $query->execute();

        return header("Location: UserDashboard.php");
    }
}
?>