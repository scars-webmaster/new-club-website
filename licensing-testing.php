<!DOCTYPE html>
<html lang="en">
<?php include 'html-includes/head.html'; ?>

  <body>
    <?php include 'html-includes/header.html'; ?>

    <!-- Main body of page -->
    <div class="main">

      <!-- Main page content title (left side)-->
      <div class="main-body-title">
        <div class="main-heading">
          <h1>QRV - LICENSING AND TESTING</h1>
        </div>

        <!-- Other content of body content heading (right side) -->
        <div class="other-content">
          <div class="heading-buttons">
           
            <!-- WX and Band Conditions Panel -->
            <?php include 'html-includes/wx-band-cond.html'; ?>
          </div>
        </div>
      </div>

      <!-- Main body content -->
      <div class="main-body">

      <!-- Left panel of main body -->
        <div class="main-body-left">
          <div class="article">
          <h3>Earn or Upgrade your Amateur Radio License</h3>
          <p>We offer Amateur Radio License examination's monthly for anyone wishing to obtain an Amateur Radio License or to upgrade their current license. See below for dates and times.</p>
          <p>You MUST bring the following:</p>
            <ul>
                <li>$15 cash EXACT CHANGE</li>
                <li>One legal photo ID (identification): State Driver’s License or other State issued ID, Government issued Passport, or a Military or Law Enforcement Officer Photo ID card</li>
                <li>FCC Registration Number (FRN): We are required by the FCC to submit your FRN with your license application form. See: FCC ULS to register</li>
                <li>A printed copy of your Amateur Radio license or any Certificates of Successful Completion of Examination (CSCE) you may hold from previous exam sessions</li>
                <li>Optional: A calculator with the memory erased and formulas cleared is allowed</li>
            </ul>
            <p>Notes:</p>
            <ul>
              <li>We have see great results from HamTestOnline - https://www.hamradiolicenseexam.com/</li>
              <li>We recommend you take the test for the next level (General or Extra) after you pass a test - study ahead if you can.</li>
              <li>Phones must be turned off. iPhones, iPads, Androids, smartphones, Blackberry devices and all similar electronic devices with a calculator capability, may NOT be used.</li>
            </ul>
          </div>
        </div>

        <!-- Main body content right panel (news, etc) -->
        <div class="main-body-right">
          <div class="article">
            <h3>Amateur Radio News</h3>
          </div>

          <div class="news-feeds">
            <script 
              type="text/javascript" 
              src="https://www.rssdog.com/index.php?url=http%3A%2F%2Fwww.arrl.org%2Fnews%2Frss&amp;mode=javascript&amp;showonly=&amp;maxitems=6&amp;showdescs=1&amp;desctrim=160&amp;descmax=0&amp;tabwidth=100%25&amp;excltitle=1&amp;showdate=1&amp;linktarget=_blank&amp;bordercol=transparent&amp;headbgcol=transparent&amp;headtxtcol=%23ffffff&amp;titlebgcol=transparent&amp;titletxtcol=%23000000&amp;itembgcol=transparent&amp;itemtxtcol=%23000000&amp;ctl=0">
            </script>
            <noscript> 
              You apparently do not have JavaScript enabled on your browser or you would be viewing an RSS Feed here
            </noscript>
          </div>
        </div>
      </div>
    </div>

    <?php include 'html-includes/footer.html'; ?>
  </body>
</html>
