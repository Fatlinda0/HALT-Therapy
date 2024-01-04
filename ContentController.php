<?php
    require_once 'Database.php';
    class ContentController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from blog');

            return $query->fetchAll();
        }


        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT INTO blog (blog_image, blog_title)
            VALUES(:blog_image, :blog_title)');
            $query->bindParam(':blog_image', $request['blog_image']);
            $query->bindParam(':blog_title', $request['blog_title']);
            $query->execute();

            return header('Location: blogManage.php');

        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * from blog Where id = :id');

            $query->bindParam(':id', $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE blog SET blog_image = :blog_image,
             blog_title = :blog_title,  Where id = :id');
            $query->bindParam(':blog_image', $request['blog_image']);
            $query->bindParam(':blog_title', $request['blog_title']);
            $query->bindParam(':id', $id);
            $query->execute();

            return header('Location: blogManage.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from blog WHERE id=:id');
            $query->bindParam(':id', $id);
            $query->execute();

            return header('Location: blogManage.php');
        }
    }

?>