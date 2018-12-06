

<header class="container-fluid sticky-top">
  <div class="row justify-content-center">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">Projet PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <?php foreach ($navbarHTML as $key => $value) {
              $value2 = str_replace('?', '', $value); // remplace le ? en rien
              $value2 = str_replace(' ', '-', $value2); // remplace les espaces en tirets
              ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?= $value2; ?>-<?= ($key+1) ?>.html"><?= $value ?></a>
            </li>
            <?php
            } ?>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
