<?php 
require_once 'Database.php';

class MenuController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Krijimi i crud qe na nevojitet
    public function readData(){
        $query = $this->db->pdo->query('SELECT * from user_form');
        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO user_form(name, email, password, user_type)
        VALUES (:name, :email, :password, :user_type)');
        
        $query->bindParam(':name', $request['name']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $request['password']);
        $query->bindParam(':user_type', $request['user_type']);
        $query->execute();
        return header('Location: MenuController.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from user_form Where id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE user_form SET  name=:name,
         email=:email, user_type=:user_type, password=:password where id = :id');
        $query-> bindParam(':name', $request['name']);
        $query-> bindParam(':email', $request['email']);
        $query-> bindParam(':password', $request['password']);
        $query-> bindParam(':user_type', $request['user_type']);
        $query->bindParam(':id',$id);
        $query->execute();
        return header('Location: manageUsers.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from user_form WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
        return header('Location: manageUsers.php');
        
    }
}
?>