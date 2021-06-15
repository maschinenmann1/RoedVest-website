<?php ob_start() ?>

    <div class="py-10 parallax">
        <h1>RØD VEST</h1>
    </div>

    <div class="py-5 contenedor">
        <div class="container-md">
            <h1 class="mb-3">Biography</h1>
            <p class="h3">
                Nací en <strong>Arnedo</strong> (La Rioja), cuidad reconocida por su industria de calzado. Orgulloso de mi lugar de nacimiento, me muevo a la capital, <strong>Logroño</strong>, donde curso estudios superiores de diseño en la Escuela de Diseño de la Rioja, conocida como <strong>Esdir</strong>. </p>
            
            <figure>
                <a href="https://esdir.eu/es/">
                    <img src="web/imagenes/inicio/esdir.jpg" alt="esdir" class="img-fluid border" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                </a>
                <figcaption>Esdir - Logroño</figcaption>
            </figure>
            <p class="h3">En este tiempo, decidí empezar una nueva aventura, y me creé mi cuenta de <a class="text-dark" href="https://www.instagram.com/roed_vest/"><b>Instagram</b></a> y <a class="text-dark" href="https://twitter.com/Roed_vest"><b>Twitter</b></a>, donde comencé a subir mis dibujos. Estos dibujos son los que encontraréis en esta página. Espero que sean de vuestro agrado, Un saludo, fieras.</p>
            <p class="h3">Mi nombre preguntas? <strong>Rubén Cuevas Mendoza</strong>.</p>
        </div>
    </div>
<?php $contenido = ob_get_clean() ?>
<?php include 'base.php' ?>
