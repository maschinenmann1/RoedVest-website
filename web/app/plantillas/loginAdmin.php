<?php ob_start() ?>

<div class="py-10 contenedor">
        
    <h2>Login Admin</h2>
    
    <form id="admin-form" method="POST">
      <?php 
        if (isset($error)) {
            echo $error;
        }else{
            echo "";
        } 
      ?>
      <div class="form-row">
        <div class="form-group col-12">
          <label for="username">Username</label>
          <input type="text" class="form-control field bg-secondary input-custom" id="username" name="username" value="" placeholder="Username" required> <!-- si se quita el required avisa por php -->
        </div>
        <div class="form-group col-12">
          <label for="password">Password</label>
          <input type="password" class="form-control bg-secondary input-custom" id="password" name="password" value="" placeholder="Password" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary col-12" name="login">login</button>
    </form>

</div>

<?php $contenido = ob_get_clean() ?>
<?php include 'base.php' ?>