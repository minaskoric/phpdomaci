<?php
include 'upravljenjeGreskama.php';
include 'konekcija.php';
include 'VrstaMuzike.php';

$nizVrstiMuzike = VrstaMuzike::vratiVrste($konekcija);
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
            <h2>O nama</h2>
          </div>
          <img src="./images/skala.png" width="700" height="900">
          <div class="col-md-12">
            <p>Užicenoću.com je portal koji aktivno promoviše noćni život u Užicu, kao jedinstven izvozni proizvod, najmenjen domaćem i stranom tržištu.</p>

            <p>Sajt je osmišljen tako da vizuelno dočarava stil užičkog noćnog života, kvalitetnim fotografijama iz svih klubova, kafana i kafića koji nude koncept noćnog provoda, u vidu najava događaja i izveštaja sa terena.</p>

            <p>Osim bogate galerije fotografija na kojima su uhvaćeni vrlo konkretni fragmenti onoga što se prethodnu noć dešavalo u svim objektima u Užicu, fotografije su i precizno osmišljen product placement prostor, kao i specifičan najavni klupski roll.</p>

            <p>Tim od preko 20 fotoreportera svakodnevno prati noćni život u Užicu, prema programu klubova i kafana. Fotografije sa terena obrađuju se iste večeri, tako da se i galerije postavljaju u toku noći i dostupne su na sajtu za pregled.</p>
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


</body>

</html>