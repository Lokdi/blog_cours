<?php
namespace models;


class User
{
    private $id;
    private $username;
    private $mot_de_passe;
    private $email;
    private $statut;
    private $created_at;
    private $modify_at;
    private $delete_at;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->mot_de_passe;
    }

    /**
     * @param mixed $mot_de_passe
     */
    public function setMotDePasse($mot_de_passe): void
    {
        $this->mot_de_passe = $mot_de_passe;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut): void
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getModifyAt()
    {
        return $this->modify_at;
    }

    /**
     * @param mixed $modify_at
     */
    public function setModifyAt($modify_at): void
    {
        $this->modify_at = $modify_at;
    }

    /**
     * @return mixed
     */
    public function getDeleteAt()
    {
        return $this->delete_at;
    }

    /**
     * @param mixed $delete_at
     */
    public function setDeleteAt($delete_at): void
    {
        $this->delete_at = $delete_at;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

}