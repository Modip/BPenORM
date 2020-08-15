<?php
namespace src\model;
use libs\system\Model;

class ClientmorDB extends Model
{

  //Insertion de client moral dans la base de donnee

  public function addCientmoral($clientmoral)

  {
    $this->em->persist($clientmoral);
    $this->em->flush();

    return $clientmoral->getId();
  }
}
