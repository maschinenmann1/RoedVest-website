<?php ob_start() ?>
<div class="py-10 contenedor">
    
    <h2>Contact</h2>
    
    <form id="contact-form" method="POST">
      <?php 
        if (isset($success)) {
            echo $success;
        }else{
            echo "";
        } 
        if (isset($error)) {
            echo $error;
        }else{
            echo "";
        } 
      ?>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Name</label>
          <input type="text" class="form-control bg-secondary input-custom field" id="inputName" name="name" value="" maxlength="100" placeholder="your name" required> <!-- si se quita el required avisa por php -->
        </div>
        <div class="form-group col-md-6">
          <label for="inputMail">Email</label>
          <input type="email" class="form-control bg-secondary input-custom field" id="inputMail" name="mail" value="" maxlength="150" placeholder="your email: example@gmail.com" required>
          <small class='text-muted'>we'll never share your email with anyone else</small>
        </div>
        <div class="form-group col-12">
          <label for="inputSubject">Subject</label>
          <input type="text" class="form-control bg-secondary input-custom field" id="inputSubject" name="subject" value="" maxlength="200" placeholder="your message subject"  required>
        </div>
        <div class="form-group col-12">
          <label for="textareaMessage">Message</label>
          <textarea class="form-control input-custom bg-secondary field" id="textareaMessage" name="message" rows="6" value="" maxlength="3000" placeholder="write your message here" required></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary float-right col-sm-2 col-12" name="send">Send</button>
      <button type="button" class="btn btn-link col-sm-2 col-12" id="clean">Clean fields</button>
    </form>

</div>
<?php $contenido = ob_get_clean() ?>
<?php include 'base.php' ?>