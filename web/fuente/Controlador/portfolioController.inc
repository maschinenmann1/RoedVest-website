<?php
    class portfolioController{

        public function portfolio(){
            require_once __DIR__ . '/../Repositorio/portfolioRepositorio.inc';
            $datosImg=(new portfolioRepositorio())->verImagenesNormales();
            $datosSlider=(new portfolioRepositorio())->verImagenesSlider();
            include __DIR__ . '/../../app/plantillas/portfolio.php';
        }

        public function subirImgNormal(){
            if(isset($_POST['uploadImage'])){
                if(isset($_FILES['imageImage']['name'])){
                    $imagen = $_FILES['imageImage']['name'];
                    $tipo = $_FILES['imageImage']['type'];
                    $temp  = $_FILES['imageImage']['tmp_name'];
                    if(!((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
                        $error="<span class='alert alert-danger' role='alert'>Solo se permite archivos jpeg, gif, webp</span>";
                        header('Location: index.php?ctl=portfolio');
                    }else{
                        require_once __DIR__ . '/../Repositorio/portfolioRepositorio.inc';
                        try {
                            $datos=(new portfolioRepositorio())->subirImgNormal($imagen, $temp);
                        }catch(PDOException $ex){
                            if($ex->getCode()=="23000"){
                                $this->subirImgNormal();
                            }else{
                                throw $ex;
                            }
                            throw $ex;
                        }catch(Exception $ex){
                            throw $ex;
                        }finally{
                            header('Location: index.php?ctl=portfolio');
                        }
                    }
                }else{
                    $error = "<span class='alert alert-danger' role='alert'>No hay archivos seleccionados</span>";
                    header('Location: index.php?ctl=portfolio');
                }
            }else{
                include __DIR__ . '/../../app/plantillas/porfolio.php';
            }
        }

        public function subirImgSlider(){
            if(isset($_POST['uploadSlider'])){
                if(isset($_FILES['imageSlider']['name'])){
                    $imagen = $_FILES['imageSlider']['name'];
                    $tipo = $_FILES['imageSlider']['type'];
                    $temp  = $_FILES['imageSlider']['tmp_name'];
                    if(!((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
                        $errorSlider="<span class='alert alert-danger' role='alert'>Solo se permite archivos jpeg, gif, webp</span>";
                        header('Location: index.php?ctl=portfolio');
                    }else{
                        require_once __DIR__ . '/../Repositorio/portfolioRepositorio.inc';
                        try {
                            $datos=(new portfolioRepositorio())->subirImgSlider($imagen, $temp);
                        }catch(PDOException $ex){
                            if($ex->getCode()=="23000"){
                                $this->subirImgSlider();
                            }else{
                                throw $ex;
                            }
                            throw $ex;
                        }catch(Exception $ex){
                            throw $ex;
                        }finally{
                            header('Location: index.php?ctl=portfolio');
                        }
                    }
                }else{
                    $errorSlider = "<span class='alert alert-danger' role='alert'>No hay archivos seleccionados</span>";
                    header('Location: index.php?ctl=portfolio');
                }
            }else{
                include __DIR__ . '/../../app/plantillas/porfolio.php';
            }
        }

        public function borrarImgNormal(){
            if(isset($_POST['eliminar'])){
                $elm=$_POST['eliminar'];
                foreach($elm as $value){
                    require_once __DIR__ . '/../Repositorio/portfolioRepositorio.inc';
                    try{
                        if($datos=(new portfolioRepositorio())->borrarImgNormal($value)){
                        }
                    }catch(Exception $ex){
                        throw $ex;
                    }finally{
                        header('Location: index.php?ctl=portfolio');
                    }
                }
            }else{
                include __DIR__ . '/../../app/plantillas/porfolio.php';
            }
        }

        public function borrarImgSlider(){
            if(isset($_POST['eliminarSlider'])){
                $elm=$_POST['eliminarSlider'];
                foreach($elm as $value){
                    require_once __DIR__ . '/../Repositorio/portfolioRepositorio.inc';
                    try{
                        if($datos=(new portfolioRepositorio())->borrarImgSlider($value)){
                        }
                    }catch(Exception $ex){
                        throw $ex;
                    }finally{
                        header('Location: index.php?ctl=portfolio');
                    }
                }
            }else{
                include __DIR__ . '/../../app/plantillas/porfolio.php';
            }
        }
    }



?>