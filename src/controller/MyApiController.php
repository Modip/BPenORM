<?php

use src\model\CompteDB;

class MyApiController
{
    //Cette function permet au client de conaitre son solde a travers son numCompte
    public function getSolde($numeroCte)
    {

       $comptedb = new CompteDB();
       $solde = $comptedb->getSoldeCompteByNum($numeroCte);
        // Set HTTP Response Content Type
        header('Content-Type: application/json');
        //pour indiquer qui p acceder a ces resources
        header('Access-Control-Allow-Origin: *');
       
       echo json_encode($solde);  
    }

    //Cette function permet de lister l'ensemble des operation pour un compte
    public function getOperations($numeroCte)
    {

        $comptedb = new CompteDB();
        $operations = $comptedb->getOperationListByNum($numeroCte);
        // Set HTTP Response Content Type
        header('Content-Type: application/json');
        //pour indiquer qui peut acceder a ces resources
        header('Access-Control-Allow-Origin: *');
       
        // Format data into a JSON response
        echo json_encode($operations);
                               
                              
    }
}
