<?php
include 'upravljenjeGreskama.php';
include 'konekcija.php';
include 'VrstaMuzike.php';
include 'Lokali.php';

$uspesno = '';

if(isset($_POST['unos'])){
  $naziv = trim($_POST['naziv']);
  $adresa = trim($_POST['adresa']);
  $opis = trim($_POST['opis']);
  $vrsta = trim($_POST['vrsta']);

  $upit = "INSERT INTO lokali VALUES (null,'$naziv','$adresa','$opis',$vrsta)";

  if($konekcija->query($upit)){
    $uspesno = 'Uspesno dodat novi lokal';
  }else{
    $uspesno = 'Neuspesno dodat novi lokal';
  }
}

if(isset($_POST['izmena'])){
  $lokal = trim($_POST['lokal']);
  $naziv = trim($_POST['naziv']);
  $adresa = trim($_POST['adresa']);
  $opis = trim($_POST['opis']);
  $vrsta = trim($_POST['vrsta']);

  $upit = "UPDATE lokali SET naziv_lokala = '$naziv',ulica = '$adresa',opis = '$opis', vrsta_muzike_id = $vrsta WHERE lokal_id = $lokal";

  if($konekcija->query($upit)){
    $uspesno = 'Uspesno izmenjen lokal';
  }else{
    $uspesno = 'Neuspesno izmenjen lokal';
  }
}
if(isset($_POST['obrisi'])){
  $lokal = trim($_POST['lokal']);
  $upit = "DELETE FROM lokali WHERE lokal_id = $lokal";

  if($konekcija->query($upit)){
    $uspesno = 'Uspesno obrisan lokal';
  }else{
    $uspesno = 'Neuspesno obrisan lokal';
  }
}

$nizVrstiMuzike = VrstaMuzike::vratiVrste($konekcija);
$nizLokala = Lokali::vratiLokale($konekcija);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GdeIzaći.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">


    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  <div class="site-wrap">

  <?php include 'menu.php'; ?>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade">
            <h2>Administracija</h2>
            <h2><?php echo $uspesno; ?></h2>
          </div>
          <div class="col-md-12">

            <form method="POST" action="">
              <label for="naziv">Naziv lokala</label>
              <input type="text" class="form-control" name="naziv" id="naziv">
              <label for="adresa">Adresa lokala</label>
              <input type="text" class="form-control" name="adresa" id="adresa">
              <label for="opis">Opis lokala</label>
              <input type="text" class="form-control" name="opis" id="opis">
              <label for="vrsta">Vrsta muzike</label>
              <select id="vrsta" name="vrsta" class="form-control">
                <?php
                foreach ($nizVrstiMuzike as $vm) {
                  ?>
                  <option value="<?php echo $vm->id ?>" ><?php echo $vm->vrsta ?></option>
                  <?php
                }

                ?>

              </select>
              <hr>
              <input type="submit" name="unos" class="form-control btn-dark" value="Unesi lokal">
            </form>

            <hr>
            <h2>Izmena lokala</h2>

            <form method="POST" action="">
              <label for="lokal">Izaberi lokal</label>
              <select id="lokal" name="lokal" class="form-control">
                <?php
                foreach ($nizLokala as $lok) {
                  ?>
                  <option value="<?php echo $lok->lokal_id ?>" ><?php echo $lok->naziv_lokala ?></option>
                  <?php
                }

                ?>

              </select>
              <label for="naziv">Naziv lokala</label>
              <input type="text" class="form-control" name="naziv" id="naziv">
              <label for="adresa">Adresa lokala</label>
              <input type="text" class="form-control" name="adresa" id="adresa">
              <label for="opis">Opis lokala</label>
              <input type="text" class="form-control" name="opis" id="opis">
              <label for="vrsta">Vrsta muzike</label>
              <select id="vrsta" name="vrsta" class="form-control">
                <?php
                foreach ($nizVrstiMuzike as $vm) {
                  ?>
                  <option value="<?php echo $vm->id ?>" ><?php echo $vm->vrsta ?></option>
                  <?php
                }

                ?>

              </select>
              <hr>
              <input type="submit" name="izmena" class="form-control btn-dark" value="Izmeni informacije o lokalu">
            </form>

            <hr>
            <h2>Izmena lokala</h2>

            <form method="POST" action="">
              <label for="lokal">Izaberi lokal</label>
              <select id="lokal" name="lokal" class="form-control">
                <?php
                foreach ($nizLokala as $lok) {
                  ?>
                  <option value="<?php echo $lok->lokal_id ?>" ><?php echo $lok->naziv_lokala ?></option>
                  <?php
                }

                ?>

              </select>
              <hr>
              <input type="submit" name="obrisi" class="form-control btn-dark" value="Obrisi lokal">
            </form>



          </div>
          <hr>
          <div id="odgovor" class="col-md-12">

          </div>
        </div>

      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  <script>

    function pretrazi(){
    var pretraga = $("#pretraga").val();

    $.ajax({
      url: 'pretragaLokala.php',
      data: { izabranaPretraga : pretraga},
      success: function(tabela){
        $("#odgovor").html(tabela);
      }
    });
    }

  </script>

  </body>
</html>
