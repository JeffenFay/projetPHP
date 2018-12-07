<?php


if( isset($_GET['id']) && $_GET['id'] == 3){
  ?>
  <main class="container-fluid flex-stretch">
    <div class="row justify-content-center flex-stretch">
      <div class="col-12 col-md-10 col-xl-8 ">
        <?= $content; ?>
      </div>
    </div>
  </main>
  <?php
}else{
  ?>
  <main class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-xl-8 ">
        <?= $content; ?>
      </div>
    </div>
  </main>
  <?php
}

 ?>
