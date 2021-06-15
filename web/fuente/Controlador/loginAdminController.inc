<?php
class loginAdminController
{ 
  public function loginAdmin()
  { 
    if(isset($_POST['login'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      if($password!=""&&$username!=""){
        require_once __DIR__ . '/../Repositorio/loginAdminRepositorio.inc';
        $error = (new loginAdminRepositorio())->login($username, $password);
        if (empty($error)) {
          header('Location: index.php?ctl=inicio');
        }else{
          include __DIR__ . '/../../app/plantillas/loginAdmin.php';
        }
      }else{
        $error="<div class='alert alert-danger' role='alert'>Rellena todos los campos</div>";
        include __DIR__ . '/../../app/plantillas/loginAdmin.php';
      }
    }else{
      require __DIR__ . '/../../app/plantillas/loginAdmin.php';
    }
  }

  public function cerrarSesion()
  {
      if (isset($_SESSION['login'])) {
          unset($_SESSION['login']);
          header('Location: index.php?ctl=inicio');
      }
  }
}
?>