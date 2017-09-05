<?php
      $paginatrip = file_get_contents('header.html');
      echo str_replace('[Homepage]', 'Trip', $paginatrip);
      echo file_get_contents('viaggio.html');
  	  echo file_get_contents('footer.html');
?>