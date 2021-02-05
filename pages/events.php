<!DOCTYPE html>
<html lang="en">
<?php include($_SERVER["DOCUMENT_ROOT"] . "/newsite/html-includes/head.html"); ?>

  <body>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/newsite/html-includes/header.html"); ?>

    <!-- Main body of page -->
    <div class="main">

      <!-- Main page content title (left side)-->
      <div class="main-body-title">
        <div class="main-heading">
          <h1>QRA - SCARS</h1>
        </div>

        <!-- Other content of body content heading (right side) -->
        <div class="other-content">
          <div class="heading-buttons">
            
            <!-- Special button for new hams - licensing/testing -->
            <a class="newhambtn" href="/newsite/pages/licensing-testing.php"
              ><img
                src='/newsite/img/green-check.png'
                alt="Green Check"
                height="30"
                width="30"
              />Licensing & Testing Info</a
            >
            
            <!-- WX and Band Conditions Panel -->
            <?php include($_SERVER["DOCUMENT_ROOT"] . "/newsite/html-includes/wx-band-cond.html"); ?>
          </div>
        </div>
      </div>

      <!-- Main body content -->
      <div class="main-body">

      <!-- Left panel of main body -->
        <div class="main-body-left">
          <div class="article">
            <h3>QTH - DALLAS, GA</h3>
            <h4>The home of the Silver Comet Amateur Radio Society, Inc.</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, nulla assumenda incidunt delectus quibusdam quis. Est ducimus similique magnam cupiditate optio delectus soluta praesentium? Maiores eos voluptas nemo recusandae saepe similique vero. Tempora velit maxime rem distinctio numquam, quibusdam deleniti.
            </p>
          </div>
        </div>

        <!-- Main body content right panel (news, etc) -->
        <div class="main-body-right">
          <div class="article">
            <h3>Amateur Radio News</h3>
            <h4>The home of the Silver Comet Amateur Radio Society, Inc.</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, nulla assumenda incidunt delectus quibusdam quis. Est ducimus similique magnam cupiditate optio delectus soluta praesentium? Maiores eos voluptas nemo recusandae saepe similique vero. Tempora velit maxime rem distinctio numquam, quibusdam deleniti.
            </p>
          </div>
        </div>

      </div>
    </div>

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/newsite/html-includes/footer.html"); ?>
  </body>
</html>
