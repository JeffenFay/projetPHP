<nav>
  <ul>
    <?php foreach ($navbarHTML as $key => $value) {
      $value2 = str_replace('?', '', $value); // remplace le ? en rien
      $value2 = str_replace(' ', '-', $value2); // remplace les espaces en tirets
      ?>
      <li>
        <a href="<?= $value2; ?>-<?= ($key+1) ?>.html"><?= $value ?></a>
      </li>
    <?php
    } ?>
  </ul>
</nav>
