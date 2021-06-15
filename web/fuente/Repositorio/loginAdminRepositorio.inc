<?php

    class loginAdminRepositorio
    {
        public function login(string $usuario, string $pass){
            $sql = "SELECT contraseña
                        FROM Admin
                            WHERE usuario = :nombre";
            require_once __DIR__ . '/../../core/conexionBd.inc';
            try {
                $con = (new ConexionBd())->getConexion();
                $stm = $con->prepare($sql);
                $stm->bindValue(":nombre", $usuario);
                $stm->execute();
                $lectura =  $stm->fetchAll(PDO::FETCH_ASSOC);
                $lectura_formateada = trim($lectura[0]['contraseña']);
            } catch (PDOException $ex) {
                throw $ex;
            } catch (Exception $ex) {
                throw $ex;
            } finally {
                $stm = null;
                $con = null;
            }
            if (!empty($lectura)) {
                if (password_verify($pass, $lectura_formateada)){
                    $_SESSION['login'] = true;
                    return "";
                } else {
                    return $error = '<div class="alert alert-danger" role="alert">Nombre o contraseña incorrectos</div>';
                }
            } else {
                return $error = '<div class="alert alert-danger" role="alert">Nombre o contraseña incorrectos</div>';
            }
        }
    }

?>