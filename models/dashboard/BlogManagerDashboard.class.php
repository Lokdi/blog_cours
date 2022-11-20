<?php
namespace models\dashboard;

use models\BlogManager;
use models\Model;

class BlogManagerDashboard extends Model
{
    /**
     * @var BlogManager
     */
    private $blogManager;

    public function __construct()
    {
        $this->blogManager = new BlogManager;
    }

    public function selectAllPosts()
    {
        try {
            $query = Model::getBdd()->query("
                SELECT post.id , post.nom, post.image, post.description,c.nom AS 'categorie',u.username, post.created_at, post.modify_at, post.delete_at
                FROM post 
                INNER JOIN categorie AS c 
                INNER JOIN user AS u 
                ON u.id = post.id_user
                AND post.id_categorie = c.id
                ");
            return $query->fetchAll();
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public function selectAllPostsLimitFive()
    {
        try {
            $query = Model::getBdd()->query("
                SELECT post.id , post.nom, post.image, post.description,c.nom AS 'categorie',u.username, post.created_at, post.modify_at, post.delete_at
                FROM post 
                INNER JOIN categorie AS c 
                INNER JOIN user AS u 
                ON u.id = post.id_user
                AND post.id_categorie = c.id
                ORDER BY post.created_at DESC 
                LIMIT 3
                ");
            return $query->fetchAll();
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public function deletePostById($id)
    {
        try {

            $getPost = $this->blogManager->selectPostById($id);

            $query = Model::getBdd()->prepare("DELETE FROM post WHERE id = :id");
            $query->execute([
                ':id' => $id
            ]);

            unlink($getPost->image);
            header('location: ?op=administration');
            exit();

        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public function updatePost($post)
    {
        try {
            $query = Model::getBdd()->prepare("DELETE FROM post WHERE id = :id");
            $query->execute([
                ':id' => $id
            ]);


            header('location: ?op=administration');
            exit();

        }catch (\Exception $e){
            echo $e->getMessage();
        }

    }
}