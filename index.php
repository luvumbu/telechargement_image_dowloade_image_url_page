<?php 
  $url = 'https://c8.alamy.com/compfr/gddmn2/raphus-cucullatus-dodo-oiseau-disparu-gddmn2.jpg';
  $img = 'logo.png';
  // Enregistrer l'image
  file_put_contents($img, file_get_contents($url));
?>