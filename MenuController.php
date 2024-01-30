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
    
    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from user_form Where id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function update($requestData, $id) {
        if (isset($_POST['submit'])) {
            $query = $this->db->pdo->prepare('UPDATE user_form SET name=:name, email=:email, password=:password, user_type=:user_type WHERE id = :id');
            $query->bindParam(':name', $requestData['name']);
            $query->bindParam(':email', $requestData['email']);
            $query->bindParam(':password', md5($requestData['password']));
            $query->bindParam(':user_type', $requestData['user_type']);
            $query->bindParam(':id', $id);
            $query->execute();
            header('location:manageUsers.php');
        }
    }
    
    public function getUserData($id) {
        $query = $this->db->pdo->prepare('SELECT * FROM user_form WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from user_form WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
        return header('Location: manageUsers.php');
        
    }
}
?>