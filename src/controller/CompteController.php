<?php
//Appel de l'autoloader
//require_once '../../config/autoload.php';
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

   if(isset($_POST['ajouter']))
   {
   
      extract($_POST);
   
      if($typeclient=='1')
      {
   //Instanciation de la classe compte
         $a = new Compte();
   
      // $a->setNumeroCte($numeroCte);
         $a->setClerib($clerib);
         $a->setAgence($agence);
         $a->setSolde($solde);
         
      // $a->setAgence($agence);
      // $a->setCltph_id($clph_id);
      // $a->setTypeCompte_id($typeCompe_id);
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
   
        // $a->setNumeroCte($numeroCte);
        // $b->setAgence($agence);
        // $b->setAgence($agence);
         //$b->setCltph_id($clph_id);
        //$b->setTypeCompte_id($typeCompe_id);
         $cm = new CompteDB();
         $rep2 = $cm->addComptemor($b);
         var_dump($rep2);
         die();
         
      }  
      
   
   }
   return $this->view->load("compte");

   }
}

