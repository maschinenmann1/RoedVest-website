<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="RoedVest website">
    <meta name="keywords" content="Art, Anime, Design, Portfolio, ESDIR, Artist, Roed Vest">
    <meta name="author" content="Roed Vest">
    <meta http-equiv="refresh" content="300">
    <meta name="copyright" content="© 2020 RoedVest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rød vest</title>
    <link rel="icon" href="web/imagenes/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href='web/css/style.css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
  
  </head>
  <body id="cuerpo">
    <header>
      <nav class="navbar barra-menu navbar-expand-lg navbar-dark bg-dark fixed-top" id="menu">
        <button class="navbar-toggler" type="button" style="border:none;" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" id="inicio" href="index.php?ctl=inicio">Roed Vest</a>
        <div class="collapse navbar-collapse" id="navbarToggler">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" id="portfolio" href="index.php?ctl=portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="portfolio3d" href="index.php?ctl=visor3d">Portfolio 3D</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact" href="index.php?ctl=contacto">Contact</a>
            </li>
            <?php if(isset($_SESSION['login'])):?>
            <li class="nav-item">
              <a class="nav-link" id="contact" href="index.php?ctl=cerrarSesion">Salir</a>
            </li>
            <?php endif;?>
          </ul>
        </div>
      </nav>
    </header>
    <div id="contendor-body" style="flex-grow:1;">
      <div style="max-width:2000px; margin:auto;">
        <?= $contenido ?>
      </div>
    </div>
    <footer class="text-center text-white" style="background: #CECECE">
    <div class="container pt-4">
      <div class="col-lg-12 col-md-12 mb-4 mb-md-0 text-dark">
        <h5 class="text-uppercase">About me</h5>
        <p>
          Hi my name is roedvest I love hentai, glasses and girls, jeg fappo everyday
          I hate League of Legends but my friends are always playing it, sometimes I think
          about killing myself.
          Enjoy my art :D
        </p>
      </div>
      <section class="mb-4">
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://twitter.com/Roed_vest"
          role="button"
          data-mdb-ripple-color="dark">
          <i class="fab fa-twitter"></i>
        </a>
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://www.instagram.com/roed_vest/"
          role="button"
          data-mdb-ripple-color="dark">
          <i class="fab fa-instagram"></i>
        </a>
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="https://www.reddit.com/user/Roed_Vest"
          role="button"
          data-mdb-ripple-color="dark">
          <i class="fab fa-reddit"></i>
        </a>
      </section>
    </div>
    <div class="text-center text-white p-3 copyright">
      © 2020 Copyright:
      <a class="text-white" href="https://roedvest.000webhostapp.com/">roedvest.com</a>
    </div>
  </footer>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="web/js/script.js"></script>
  </body>
</html>
