<?php
class User
{
    private ?int $idUser = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $adress = null;
    private ?string $role = null;


    public function __construct($id = null, $n, $p, $a, $r)
    {
        $this->idUser = $id;
        $this->nom = $n;
        $this->prenom = $p;
        $this->adress = $a;
        $this->role = $r;

     }

    /**
     * Get the value of idFormation
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Get the value of nom
     */
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getprenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }



/**
     * Get the value of description
     */
    public function getadress()
    {
        return $this->adress;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setadress($adress)
    {
        $this->adress = $adress;

        return $this;
    }
   






/**
     * Get the value of description
     */
    public function getrole()
    {
        return $this->role;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setrole($role)
    {
        $this->role = $role;

        return $this;
    }
   

    
}
