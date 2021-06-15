<?php

class portfolioRepositorio
{

    public function verImagenesNormales(){
        $sql="SELECT * FROM imagenesNormales";
        require_once __DIR__ . '/../../core/conexionBd.inc';
        try{
            $con=(new ConexionBd())->getConexion();
            $stm=$con->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $ex){
            throw $ex;
        }catch(Exception $ex){
            throw $ex;
        }finally{
            $stm=null;
            $con=null;
        }
    }

    public function verImagenesSlider(){
        $sql="SELECT * FROM imagenesSlider";
        require_once __DIR__ . '/../../core/conexionBd.inc';
        try{
            $con=(new ConexionBd())->getConexion();
            $stm=$con->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $ex){
            throw $ex;
        }catch(Exception $ex){
            throw $ex;
        }finally{
            $stm=null;
            $con=null;
        }
    }

    public function subirImgNormal(string $imagen, string $temp){
        $sql="INSERT INTO imagenesNormales(imagen) values(:img)";
        require_once __DIR__ . '/../../core/conexionBd.inc';
        try{
            $con=(new ConexionBd())->getConexion();
            $stm=$con->prepare($sql);
            $stm->bindValue(":img", $imagen);
            $stm->execute();
            move_uploaded_file($temp, 'web/imagenes/imgNormales/'.$imagen); 
            $this->verImagenesNormales();
        }catch(PDOException $ex){
            throw $ex;
        }catch(Exception $ex){
            throw $ex;
        }finally{
            $stm=null;
            $con=null;
        }
    }

    public function subirImgSlider(string $imagen, string $temp){
        $sql="INSERT INTO imagenesSlider(imagen) values(:img)";
        require_once __DIR__ . '/../../core/conexionBd.inc';
        try{
            $con=(new ConexionBd())->getConexion();
            $stm=$con->prepare($sql);
            $stm->bindValue(":img", $imagen);
            $stm->execute();
            move_uploaded_file($temp, 'web/imagenes/imgSlider/'.$imagen); 
            $this->verImagenesNormales();
        }catch(PDOException $ex){
            throw $ex;
        }catch(Exception $ex){
            throw $ex;
        }finally{
            $stm=null;
            $con=null;
        }
    }

    public function borrarImgNormal(string $position){
        require_once __DIR__ . '/../../core/conexionBd.inc';

        $sql="SELECT imagen FROM imagenesNormales WHERE cod_imagen=:pos";
        try{
            $con=(new ConexionBd())->getConexion();
            $stm=$con->prepare($sql);
            $stm->bindValue(":pos", $position);
            $stm->execute();
            $row=$stm->fetchAll(PDO::FETCH_ASSOC);
            unlink('web/imagenes/imgNormales/'.$row[0]['imagen']);
        }catch(PDOException $ex){
            throw $ex;
        }catch(Exception $ex){
            throw $ex;
        }finally{
            $stm=null;
            $con=null;
        }

        $sql="DELETE FROM imagenesNormales WHERE cod_imagen=:pos";
        try{
            $con=(new ConexionBd())->getConexion();
            $stm=$con->prepare($sql);
            $stm->bindValue(":pos", $position);
            $stm->execute();
        }catch(PDOException $ex){
            throw $ex;
        }catch(Exception $ex){
            throw $ex;
        }finally{
            $stm=null;
            $con=null;
        }

        $sql="ALTER TABLE imagenesnormales AUTO_INCREMENT=0";
        try{
            $con=(new ConexionBd())->getConexion();
            $stm=$con->prepare($sql);
            $stm->execute();
        }catch(PDOException $ex){
            throw $ex;
        }catch(Exception $ex){
            throw $ex;
        }finally{
            $stm=null;
            $con=null;
        }
    }

    public function borrarImgSlider(string $position){
        require_once __DIR__ . '/../../core/conexionBd.inc';

        $sql="SELECT imagen FROM imagenesSlider WHERE cod_imagen=:pos";
        try{
            $con=(new ConexionBd())->getConexion();
            $stm=$con->prepare($sql);
            $stm->bindValue(":pos", $position);
            $stm->execute();
            $row=$stm->fetchAll(PDO::FETCH_ASSOC);
            unlink('web/imagenes/imgSlider/'.$row[0]['imagen']);
        }catch(PDOException $ex){
            throw $ex;
        }catch(Exception $ex){
            throw $ex;
        }finally{
            $stm=null;
            $con=null;
        }

        $sql="DELETE FROM imagenesSlider WHERE cod_imagen=:pos";
        try{
            $con=(new ConexionBd())->getConexion();
            $stm=$con->prepare($sql);
            $stm->bindValue(":pos", $position);
            $stm->execute();
        }catch(PDOException $ex){
            throw $ex;
        }catch(Exception $ex){
            throw $ex;
        }finally{
            $stm=null;
            $con=null;
        }

        $sql="ALTER TABLE imagenesslider AUTO_INCREMENT=0";
        try{
            $con=(new ConexionBd())->getConexion();
            $stm=$con->prepare($sql);
            $stm->execute();
        }catch(PDOException $ex){
            throw $ex;
        }catch(Exception $ex){
            throw $ex;
        }finally{
            $stm=null;
            $con=null;
        }
    }

}

?>