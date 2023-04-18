<?php
include 'upravljenjeGreskama.php';
include 'konekcija.php';
include 'VrstaMuzike.php';
include 'Lokali.php';

$vrsta_id = $_GET['izabranaPretraga'];

$nizLokala = Lokali::vratiLokale($konekcija, $vrsta_id);


?>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Naziv lokala</th>
      <th>Ulica</th>
      <th>Vrsta muzike</th>
      <th>Opis</th>
    </tr>
  </thead>
  <tbody>
    <?php

    foreach ($nizLokala as $lokal) {
    ?>
      <tr>
        <td><?php echo $lokal->naziv_lokala ?></td>
        <td><?php echo $lokal->ulica ?></td>
        <td><?php echo $lokal->vrsta->vrsta ?></td>
        <td><?php echo $lokal->opis ?></td>
      </tr>
    <?php
    }

    ?>

  </tbody>
</table>