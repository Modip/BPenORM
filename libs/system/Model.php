<?php
Namespace libs\system;
class Model
{
    protected $em;
    public function __construct()
    {
        require_once "bootstrap.php";
        $this->em = getEntityManager();
    }
}

?>