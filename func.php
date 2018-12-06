<?php
// retourne le xml de la lage demander par son id
function getPage($doc, $id){
  $page = false;
  $items = $doc->getElementsByTagName('page');
  foreach ($items as $item) {
    if( $item->getAttribute('id') == $_GET['id'] ){
      $page = $item;
    }
  }
  if( $page !== false ){
    return $page;
  }
  return false;
}

 ?>
