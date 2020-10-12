<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="client_moral")
 **/
class Clientmor 
{  
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/ 
    private $id;
    /** @ORM\Column(type="string") **/
    private $nom;
    /** @ORM\Column(type="string") **/
    private $adresse;
    /** @ORM\Column(type="string") **/
    private $raisonsocial;
    /** @ORM\Column(type="integer") **/
    private $numidentf;
    /** @ORM\Column(type="integer") **/
    private $tel;
    /** @ORM\Column(type="string") **/
    private $mail;
    /** @ORM\Column(type="string") **/
    private $login;
    /** @ORM\Column(type="string") **/
    private $password;
    
    /** 
     * One client has many comptes. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="cltmor_id")
     */

    private $comptes;
  
    
    public function __construct()
    {
        $this->comptes = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }
 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

 
    public function getRaisonsocial()
    {
        return $this->raisonsocial;
    }

    public function setRaisonsocial($raisonsocial)
    {
        $this->raisonsocial = $raisonsocial;

        return $this;
    }

    public function getNumidentf()
    {
        return $this->numidentf;
    }

    public function setNumidentf($numidentf)
    {
        $this->numidentf = $numidentf;

        return $this;
    }

 
    public function getTel()
    {
        return $this->tel;
    }


    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }


    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }


    public function getPassword()
    {
        return $this->password;
    }

 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}