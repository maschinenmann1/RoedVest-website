<?php
class contactoRepositorio
{
    public function sendMessage(string $mail, string $subject, string $name, string $message){
        if($mail!=""&&$name!=""&&$message!=""&&$subject!=""){
            try{  
                $from = "roedvestcontact@gmail.com";
                // por ahora tiene mi correo para pruebas
                $to="herceclase@gmail.com"; //cambiar a rubentrabajos01@gmail.com en la versión final
                $content = "Nombre: " . $name . 
                            "\nCorreo: " . $mail . 
                            "\nMensaje: " . $message;
                $headers = "From: ".$from ;
                
               if(!mail($to,$subject,$content,$headers)){
                    return $error="<div class='alert alert-danger' role='alert'>Something wrong</div>";
               }
            }catch(Exception $ex){
                throw $ex;
            }finally{
                $to=null;
                $content=null;
            }
            
        }else{
            return $error="<div class='alert alert-danger' role='alert'>Complete all the fields</div>";
        }
    }
}

?>