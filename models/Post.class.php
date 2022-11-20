<?php
namespace models;


class Post
{
    private $id;
    private $id_user;
    private $id_categorie;
    private $nom_image;
    private $description;
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
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    /**
     * @param mixed $id_categorie
     */
    public function setIdCategorie($id_categorie): void
    {
        $this->id_categorie = $id_categorie;
    }

    /**
     * @return mixed
     */
    public function getNomImage()
    {
        return $this->nom_image;
    }

    /**
     * @param mixed $nom_image
     */
    public function setNomImage($nom_image): void
    {
        $this->nom_image = $nom_image;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
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
}

