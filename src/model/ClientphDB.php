<?php
namespace src\model;
use libs\system\Model;

class ClientphDB extends Model 
{
   //Insertion de client physique dans la base de donnee
   public function addClientphysique($clientphysique)
      {
        $this->em->persist($clientphysique);
        $this->em->flush();

        return $clientphysique->getId();
      }
   
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
   
   //Fonction pour afficher les types comptes
   public function afficherTypecompte()
   {
      $cpt = ('SELECT * FROM type_compte ');
      $db = getConnection();
      return $db->query($cpt)->fetchAll();
   }

   
}
?>