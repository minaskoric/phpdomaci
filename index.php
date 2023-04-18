<?php
include 'upravljenjeGreskama.php';
include 'konekcija.php';
include 'VrstaMuzike.php';

//include
$nizVrstiMuzike = VrstaMuzike::vratiVrste($konekcija);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Srbija.rs</title>
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
            <h2>Prikaz mesta za izlaske po Srbiji</h2>
          </div>
          <div class="col-md-12">
            <label for="pretraga">Vrsta muzike</label>
            <select id="pretraga" class="form-control">
              <option value="0"> Sve vrste</option>
              <?php
              foreach ($nizVrstiMuzike as $vm) {
                /*
                  ovde sam otisla do tabele i isla redom kroz id-eve i citala njegove vrednosti iz tabele
                */
              ?>
                <option value="<?php echo $vm->id ?>"><?php echo $vm->vrsta ?></option>
              <?php
              }

              ?>

            </select>
            <label for="pretrazi">Pretrazite lokale</label>
            <button id="pretrazi" class="form-control btn-dark" onclick="pretrazi()">Pretrazi</button>
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
    function pretrazi() {
      var pretraga = $("#pretraga").val();

      $.ajax({
        url: 'pretragaLokala.php',
        data: {
          izabranaPretraga: pretraga
        },
        success: function(tabela) {
          $("#odgovor").html(tabela);
        }
      });
    }
  </script>

</body>

</html>