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

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO contactus(name, subject, mail, message)
        VALUES (:name, :subject, :mail, :message)');
        
        $query->bindParam(':name', $request['name']);
        $query->bindParam(':subject', $request['subject']);
        $query->bindParam(':mail', $request['mail']);
        $query->bindParam(':message', $request['message']);
        $query->execute();
        

        return header('Location: MenuController.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from contactus Where id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE user_form SET  name=:name,
         subject = :subject, mail = :mail, message = :message where id = :id');
        $query-> bindParam(':name', $request['name']);
        $query-> bindParam(':subject', $request['subject']);
        $query-> bindParam(':mail', $request['mail']);
        $query-> bindParam(':message', $request['message']);
        $query->bindParam(':id',$id);
        $query->execute();
        return header('Location: MenuController.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from contactus WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: manageEmails.php');
        
    }
}
?>