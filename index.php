<?php
include('func.php');
if( isset($_GET['id']) ){
  // copie de l'objet DOMDocument dans la variable $doc pour manipuler l'objet
  $doc = new DOMDocument();
  // charge dans DOMDocument le fichier xml
  $doc->load('source.xml');
  // recupere tout les noeuds du document xml qui s'appellent menu
  $navbarXML = $doc->getElementsByTagName('menu');

  // recupere dans le tableau $navbarHTML, les valeurs des noeuds menu
  $navbarHTML = [];
  foreach( $navbarXML as $node )
  {
    $navbarHTML[] = $node->nodeValue;
  }

  // met dans la variable $page le xml du noeud page id=X
  // exemple si $_GET['id'] vaut 1 ont recupere le noeud <page id="1">...
  // qui contient le noeud title, menu, content.
  $page = getPage($doc, $_GET['id']);
  if($page === false){
    exit('manque variable page');
  }
  $titre = $page->getElementsByTagName('title')->item(0)->nodeValue;
  $menu = $page->getElementsByTagName('menu')->item(0)->nodeValue;
  $content = $page->getElementsByTagName('content')->item(0)->nodeValue;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title><?= $titre; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,800" rel="stylesheet" />
  <link rel="stylesheet" href="/css/site.css" />
  <link rel="stylesheet" href="/css/nav.css" />
  <link rel="stylesheet" href="/css/content.css" />
  <link rel="stylesheet" href="/css/footer.css" />
</head>
<body>
  <?php include('nav.php') ?>
  <?php include('content.php') ?>
  <?php include('footer.php') ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
