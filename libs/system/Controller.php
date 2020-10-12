<?php
Namespace libs\system;
use libs\system\View;
class Controller
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();//instanciation de view pour qu'il puisse etre utilisée par fonction laod
    }
}

?>