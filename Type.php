<?php
class Type
{
    private ?int $idType = null;
    private ?string $name = null;
   

    public function __construct($id = null, $n,)
    {
        $this->idType = $id;
        $this->name = $n;
  
     }

    /**
     * Get the value of idFormation
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Get the value of nom
     */
    public function getname()
    {
        return $this->name;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setname($name)
    {
        $this->name = $name;

        return $this;
    }

    
}
