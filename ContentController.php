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
            $query = $this->db->pdo->prepare('INSERT INTO blog (blog_image, blog_title, blog_body, admin_name)
            VALUES(:blog_image, :blog_title, :blog_body, :admin_name)');
            $query->bindParam(':blog_image', $request['blog_image']);
            $query->bindParam(':blog_title', $request['blog_title']);
            $query->bindParam(':blog_body', $request['blog_body']);
            $query->bindParam(':admin_name', $request['admin_name']);
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
             blog_title = :blog_title, blog_body = :blog_body, admin_name = :admin_name  Where id = :id');
            $query->bindParam(':blog_image', $request['blog_image']);
            $query->bindParam(':blog_title', $request['blog_title']);
            $query->bindParam(':blog_body', $request['blog_body']);
            $query->bindParam(':admin_name', $request['admin_name']);
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