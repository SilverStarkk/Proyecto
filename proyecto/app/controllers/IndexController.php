<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
  
    public function indexAction()
    {
        $this->view->Usuarios = Usuarios::find();
    }
}
