<?php

//On fait des use avec les namespace
use src\model\ClientphDB;
use src\model\ClientmorDB;
use libs\system\Controller;


class ClientController extends Controller
{
    public function index()
    {
        return $this->view->load("client");
    }

    public function add()
    {
        if(isset($_POST['submit']))
        {
      /* var_dump($_POST);
       die;*/
            extract($_POST);
            if($typeclient == '1')
            {
                
                $a = new Clientph();
                
                $a->setNom($nomph);
                $a->setPrenom($prenomph);
                $a->setTel($telph);
                $a->setSalaire($salaire);
                $a->setAdresse($adresseph);
                $a->setProfession($profession);
                $a->setLogin($loginph);
                $a->setPassword($passwordph);
                $a->setEmail($emailph);
                $a->setNin($ninph);
                

                $cp = new ClientphDB();
                $rep = $cp->addClientphysique($a);
                var_dump($rep);
                die();
            }
            
            if($typeclient == '2')
            {
                $b = new Clientmor();
                $b->setRaisonsocial($raisonsocial);
                $b->setNom($nommor);
                $b->setAdresse($adressemor);
                $b->setTel($telmor);
                $b->setMail($mailmor);
                $b->setLogin($loginmor);
                $b->setPassword($passwordmor);
               
                $cm = new ClientmorDB();
                $rep = $cm->addCientmoral($b);
               // var_dump($_POST);
               // die; 

                var_dump($rep);
                die();
            }      
        }
        return $this->view->load("client");
    }

}


?>



