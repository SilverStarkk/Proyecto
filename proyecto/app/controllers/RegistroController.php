<?php

use Phalcon\Mvc\Controller;

class RegistroController extends Controller
{
   
    public function indexAction()
    {
    }

   
    public function registroAction()
    {
        $usuario = new Usuarios();

       
        $success = $usuario->save(
            $this->request->getPost(),
            ['nombre', 'correo']
        );

       
        $this->view->success = $success;

        if ($success) {
            $message = "Registrado";
        } else {
            $message = "Se genero el siguiente error:<br>" . implode('<br>', $usuario->getMessages());
        }

       
        $this->view->message = $message;
    }
}
