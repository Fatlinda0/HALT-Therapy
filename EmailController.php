<?php 
require_once 'Database.php';

class EmailController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Krijimi i crudd qe na nevojitet
    public function readData(){
        $query = $this->db->pdo->query('SELECT * from contactus');
        return $query->fetchAll();
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from contactus WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: manageEmails.php');
        
    }
}
?>