<?php


use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity @ORM\Table(name="agence")
 **/

class Agence
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/ 
    private $id;
    /** @ORM\Column(type="string") **/
    private $nom;
    /** @ORM\Column(type="string") **/
    private $region;
    /**
     * One agence has many comptes. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="agence")
     */
    private $comptes;
    public function __construct()
    {
       
    }
 
     /**
      * Get the value of id
      */ 
     public function getId()
     {
         return $this->id;
     }
 
     /**
      * Set the value of id
      *
      * @return  self
      */ 
     public function setId($id)
     {
        $this->id = $id;
 
        return $this;
     }
 
     /**
      * Get the value of nomph
      */ 
     public function getNom()
     {
         return $this->nom;
     }
 
     /**
      * Set the value of nom
      *
      * @return  self
      */ 
    public function setNom($nom)
     {
        $this->nom = $nom;
 
        return $this;
    }
 
     /**
      * Get the value of region
      */ 
    public function getRegion()
    {
        return $this->region;
    }
 
    /**
    * Set the value of region
    *
    * @return  self
    */ 
     public function setRegion($region)
    {
        $this->region = $region;
 
        return $this;
    }
}
?>