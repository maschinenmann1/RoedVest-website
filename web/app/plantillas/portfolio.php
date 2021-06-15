<?php ob_start();?>
<div class="py-10 contenedor">
    <h2>Portfolio</h2>
<?php if(isset($_SESSION['login'])):?>
  <br><br>
    <form action="index.php?ctl=subirImgSlider" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fileInputSlider">Subir imágen a slider</label>
            <input type="file" class="form-control-file" id="fileInputSlider" name="imageSlider" accept="image/gif, image/jpeg, image/png">
        </div>
        <button type="submit" class="btn btn-primary" name="uploadSlider">Subir</button>
    </form>
    <?php 
      if (isset($errorSlider)) {
          echo $errorSlider;
      }else{
          echo "";
      } 
    ?>
    <br><br>
<?php endif;?>
<?php if(isset($datosSlider)):
      $j=count($datosSlider);?>
<?php if($j>0): ?>
<form action="index.php?ctl=borrarImgSlider" method="POST" enctype="multipart/form-data">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
      <?php for($i=1;$i<$j;$i++): ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i?>" class="bg-dark"></li>
      <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
          <?php if(isset($_SESSION['login'])):?>
        <button type="submit" name="eliminarSlider[<?=$datosSlider[0]['cod_imagen']?>]" class="bg-transparent d-block m-auto grow border-0" value="<?=$datosSlider[0]['cod_imagen']?>"><i class="fas fa-trash-alt text-danger"></i></button>
        <?php endif; ?>
      <a><img class="d-block w-100 border" src="web/imagenes/imgSlider/<?=$datosSlider[0]['imagen']?>" alt="First slide" data-toggle="modal" data-target="#modalSlider<?=$datosSlider[0]['cod_imagen']?>"></a>
      </div>
      <?php for($i=1;$i<$j;$i++): ?>
      <div class="carousel-item">
        <?php if(isset($_SESSION['login'])):?>
        <button type="submit" name="eliminarSlider[<?=$datosSlider[$i]['cod_imagen']?>]" class="bg-transparent d-block m-auto grow border-0" value="<?=$datosSlider[$i]['cod_imagen']?>"><i class="fas fa-trash-alt text-danger"></i></button>
        <?php endif;?>
      <a><img class="d-block w-100 border" src="web/imagenes/imgSlider/<?=$datosSlider[$i]['imagen']?>" alt="Next slide"<?=$datosSlider[$i]['cod_imagen']?>"></a>
      </div>
     
      <?php endfor; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</form>
<?php endif;endif; ?>
 <br><br><br>
<?php if(isset($_SESSION['login'])):?>
  <br><br>
    <form action="index.php?ctl=subirImgNormal" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fileInputImage">Subir imágen a conjunto de imágenes</label>
            <input type="file" class="form-control-file" id="fileInputImage" name="imageImage" accept="image/gif, image/jpeg, image/png">
        </div>
        <button type="submit" class="btn btn-primary" name="uploadImage">Subir</button>
    </form>
    <?php 
      if (isset($error)) {
          echo $error;
      }else{
          echo "";
      } 
    ?>
    <br><br>
<?php endif;?>

<?php if(isset($datosImg)):?>
<form action="index.php?ctl=borrarImgNormal" method="POST" enctype="multipart/form-data">
  <div class="row">
    <?php foreach($datosImg as $row):?>
      <!-- Imagen -->
      <div class="col-xl-4 col-lg-4 col-sm-6 col-md-6 cols-12 py-3">
          <?php if(isset($_SESSION['login'])):?>
            <button type="submit" name="eliminar[<?=$row['cod_imagen']?>]" class="bg-transparent grow border-0" value="<?=$row['cod_imagen']?>"><i class="fas fa-trash-alt text-danger"></i></button>
          <?php endif;?>
         <a><img src="web/imagenes/imgNormales/<?=$row['imagen']?>" alt="Imagen" class="img-fluid border z-depth-1 <?php if(!isset($_SESSION['login'])):?>grow<?php endif;?>" data-toggle="modal" data-target="#modal<?=$row['cod_imagen']?>"></a>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal<?=$row['cod_imagen']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <div class="embed-responsive embed-responsive-1by1 z-depth-1-half">
                <img class="embed-responsive-item" src="web/imagenes/imgNormales/<?=$row['imagen']?>">
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>
  </div>
</form>
<?php endif; ?>
</div>
<?php $contenido = ob_get_clean() ?>
<?php include 'base.php' ?>