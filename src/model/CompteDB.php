<?php
namespace src\model;

use libs\system\Model;
use src\entities\Clientph;

class CompteDB extends Model 
{

//public function  //Ouverture de compte pour un client Physique

   public function addCompteph($compteph)
      {
        $this->em->persist($compteph);
        $this->em->flush();

        return $compteph->getId();
      }

  public function addComptemor($comptemor) //Ouverture de compte pour un client Moral

   {
    $this->em->persist($comptemor);
    $this->em->flush();

    return $comptemor->getId();
  }


//  //Fonction pour afficher les clients physiques qui sont dans la base
//   function afficherClient()
 //Fonction pour afficher les clients qui sont dans la base
 public function afficherClient()
 {

    $clienteph = $em->getRepository("Clientph)");
    $clients = $clientph->findAll;
    foreach ($clients as $clientph){
       echo $clientph->getNomComplet();
     //  echo "<br/>".$client->
    }
   }
//  //Afficher le sclients morals
  function afficherClientmor(){
   
  $query = $entityManager->createQuery('SELECT c FROM c client_moral WHERE '  );

  }
//    return $this->db->query($val2)->fetchAll();
  
// }
//  //Fonction pour afficher les agences qui sont dans la base
//  function afficherAgence(){
//    $val1 = ('SELECT * FROM agence');

//    return $this->db->query($val1)->fetchAll();
//   }
// //Fonction pour afficher les types comptes
//  function afficherTypecompte()
//  {
//      $cpt = ('SELECT * FROM type_compte');
   
//      return $this->db->query($cpt)->fetchAll();
//   }

// }

}

?>

