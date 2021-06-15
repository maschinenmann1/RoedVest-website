<?php

$mapeoRutas =
  array('inicio' =>
          array('controller' =>'paginasController', 'action' =>'inicio'),
        'portfolio' =>
          array('controller' =>'portfolioController', 'action' =>'portfolio'),
        'contacto' =>
          array('controller' =>'paginasController', 'action' =>'contacto'),
        'visor3d' =>
          array('controller' =>'paginasController', 'action' =>'visor3d'),
        'admin' =>
          array('controller' =>'loginAdminController', 'action' =>'loginAdmin'),
        'cerrarSesion' =>
          array('controller' =>'loginAdminController', 'action' =>'cerrarSesion'),
        'subirImgNormal' =>
          array('controller' =>'portfolioController', 'action' =>'subirImgNormal'),
        'subirImgSlider' =>
          array('controller' =>'portfolioController', 'action' =>'subirImgSlider'),
        'borrarImgNormal' =>
          array('controller' =>'portfolioController', 'action' =>'borrarImgNormal'),
        'borrarImgSlider' =>
          array('controller' =>'portfolioController', 'action' =>'borrarImgSlider'),
       );
