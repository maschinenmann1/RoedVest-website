<?php

 class paginasController
 {

    public function inicio()
    { 
      require __DIR__ . '/../../app/plantillas/inicio.php';
    }

    public function visor3d(){
        require __DIR__ . '/../../app/plantillas/portfolio3d.php';
    }


    public function contacto()
    { 
      if(isset($_POST['send'])){
        $mail=$_POST['mail'];
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        require_once __DIR__ . '/../Repositorio/contactoRepositorio.inc';
        $error = (new contactoRepositorio())->sendMessage($mail, $subject, $name, $message);
        if (empty($error)) {
          $success="<div class='alert alert-success' role='alert'>Message sent</div>";
          include __DIR__ . '/../../app/plantillas/contact.php';
        }else{
          include __DIR__ . '/../../app/plantillas/contact.php';
        }
      }else{
        require __DIR__ . '/../../app/plantillas/contact.php';
      }
    }
    
 }

?>