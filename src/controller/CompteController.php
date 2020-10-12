<?php

use src\model\ClientphDB;
use src\model\ClientmorDB;
use libs\system\Controller;
use src\model\CompteDB;

class CompteController extends Controller
{

   public function index()
   {
      return $this->view->load("compte");
   }

   public function add()
   {
      $comptedb = new CompteDB();

   if(isset($_POST['ajouter']))
   {
      extract($_POST);
   
      if($typeclient=='1')
      {
   //Instanciation de la classe compte
         $a = new Compte();
   
       //$a->setNumeroCte($numeroCte);
         $a->setClerib($clerib);
         $a->setAgence($agence);
         $a->setSolde($solde);
         $a->setAgence($agence);
         $a->setDateou($dateou);
   
         $cp = new CompteDB();
         $rep = $cp->addCompteph($a);
         var_dump($rep);
         die();
         
      }
   
      if($typeclient=='2')
      {
   
         $b = new Compte();
         $b->setCleribmor($cleribmor);
         $b->setSoldemor($soldemor);
         $b->setDateoum($dateoum);
         $a->setNumeroCte($numeroCte);
         $b->setAgence($agence);
         $cm = new CompteDB();
         $rep2 = $cm->addComptemor($b);
         var_dump($rep2);
         die(); 
      }  
      
   }
   $data ['clients'] = $comptedb->afficherClient();
   $data ['clientmors'] = $comptedb->afficherClientmor();
   $data ['agences'] = $comptedb->afficherAgence();
   $data ['typecomptes'] = $comptedb->afficherTypecompte();

   return $this->view->load("compte",$data);

   }
} 

?>
