<?php
class Formation
{
    private ?int $idFormation = null;
    private ?string $nom = null;
    private ?string $description = null;
   

    public function __construct($id = null, $n, $p,)
    {
        $this->idFormation = $id;
        $this->nom = $n;
        $this->description = $p;
     }

    /**
     * Get the value of idFormation
     */
    public function getIdFormation()
    {
        return $this->idFormation;
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
    public function getdescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setdescription($description)
    {
        $this->description = $description;

        return $this;
    }

   

    
}
