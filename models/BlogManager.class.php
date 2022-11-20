<?php
namespace models;
use Exception;

class BlogManager extends Model
{
    public function insert(User $user)
    {
        $username = $user->getUsername();
        $password = $user->getMotDePasse();
        $email = $user->getEmail();
        $statut = $user->getStatut();
        $created_at = $user->getCreatedAt();

        $query = Model::getBDD()
            ->prepare("INSERT INTO user (username,mot_de_passe,email,statut, created_at) VALUES (:username, :mot_de_passe, :email, :statut, :created_at)");

        return $query->execute([
            ':username'         => $username,
            ':mot_de_passe'        => $password,
            ':email'            => $email,
            ':statut'           => $statut,
            ':created_at'       => $created_at
        ]);
    }

    public function update(int $id, array $infos)
    {
        //TODO: faire l'update formulaire
        echo 'toto';
    }

    public function connexionUser($username, $password)
    {
        try {
            $query = Model::getBdd()
                ->prepare("SELECT * FROM user WHERE mot_de_passe =  :mot_de_passe AND username = :username");
            $query->execute([
                ':username' => $username,
                ':mot_de_passe' => $password
            ]);
            $result = $query->fetch();
            if ($result) {
                $_SESSION['id'] = $result->id;
                $_SESSION['username'] = $result->username;
                $_SESSION['email'] = $result->email;
                $_SESSION['statut'] = $result->statut;
            }
            header('location: ?op=home');
            exit();
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function selectUserById($id)
    {
        try {
            $query = Model::getBdd()
                ->prepare("SELECT * FROM user WHERE id = :id ");
            $query->execute([
                ':id' => $id,
            ]);
            return $query->fetch();

        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function selectPostById($id)
    {
        try {
            $query = Model::getBdd()
                ->prepare("
                SELECT p.nom, p.description, p.image, p.created_at, c.nom as 'categorie', u.username
                FROM post AS p 
                INNER JOIN categorie AS c
                INNER JOIN user AS u 
                ON p.id = :id 
                ");
            $query->execute([
                ':id' => $id,
            ]);
            return $query->fetch();

        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }


}