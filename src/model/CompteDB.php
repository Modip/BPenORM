<?php
namespace src\model;
use libs\system\Model;
use src\entities\Clientph;

class CompteDB extends Model 

{
  //Ouverture de compte pour un client Physique
  public function addCompteph($compteph)
    {
      $this->em->persist($compteph);
      $this->em->flush();
      return $compteph->getId();
    }
  //Ouverture de compte pour un client Moral
  public function addComptemor($comptemor) 
    {
      $this->em->persist($comptemor);
      $this->em->flush();

      return $comptemor->getId();
    }

  //Fonction pour afficher les clients qui sont dans la base
  public function afficherClient()
 
  {  
    return $this->em
    ->createQuery("SELECT a FROM Clientph a")
    ->getResult();
  }

  
  //Afficher le sclients morals
  function afficherClientmor()

    {  
      return $this->em
      ->createQuery("SELECT a FROM Clientmor a")
      ->getResult();
    }

  //Fonction pour afficher les agences qui sont dans la base
  function afficherAgence()
  {  
    return $this->em
    ->createQuery("SELECT a FROM Agence a")
    ->getResult();
  }
  
  // //Fonction pour afficher les types comptes
  function afficherTypecompte()
  {
    return $this->em
      ->createQuery("SELECT a FROM TypeCompte a")
      ->getResult(); 
      
  } 

}

?>

