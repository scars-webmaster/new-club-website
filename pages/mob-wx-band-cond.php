<!DOCTYPE html>
<html lang="en">
<?php include($_SERVER["DOCUMENT_ROOT"] . "/html-includes/head.html"); ?>

  <body>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/html-includes/header.html"); ?>

    <!-- Main body of page -->
    <div class="main">

        <div class="bcond-lower">
        <h1>BAND CONDITIONS</h1>
          <div class="propagation">
            <a href="https://rigreference.com/solar" target="_blank"
              ><img src="https://rigreference.com/solar/img/tall" height="400"
            /></a>
          </div>
          <div class="solar-data">
            <div class="x-rays">
              <p>Solar X-rays:</p>
              <a href="http://www.n3kl.org/sun/noaa.html">
                <img width="160" height="30" src="http://www.n3kl.org/sun/images/status.gif?"
              /></a>
            </div>
            <div class="geomag">
              <p>Geomagnetic Field:</p>
              <a href="http://www.n3kl.org/sun/noaa.html">
                <img width="160" height="30" src="http://www.n3kl.org/sun/images/kpstatus.gif?"
              /></a>
            </div>
          </div>
          <div class="space-weather">
            <a
              href="http://www.hamqsl.com/solar.html"
              title="Click to add Solar-Terrestrial Data to your website!"
              ><img src="http://www.hamqsl.com/solar100sc.php" height="300"
            /></a>
          </div>
        </div>
    </div>

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/html-includes/footer.html"); ?>
  </body>
</html>
