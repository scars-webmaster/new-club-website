<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0 maximum-scale=1.0, user-scalable=0"
    />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DR7Z07WWX2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-DR7Z07WWX2");
    </script>

    <!-- Include for Font Awesome icons -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />

    <!-- Include for Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/smallscreen.css" />

    <title>Silver Comet ARS</title>
  </head>

  <body>
    <?php include 'header.html'; ?>

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

    <?php include 'footer.html'; ?>
  </body>
</html>
