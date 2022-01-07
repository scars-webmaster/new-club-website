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
            <?php include 'html-includes/wx-band-cond.html'; ?>
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
              We are an American Radio Relay League (ARRL) Special Service Club located in and
              serving Paulding County Georgia.
            </p>
            <p>
              Feel free to peruse our website to learn more about the Amateur Radio Service and our
              club activities. Our members are FCC licensed ham radio enthusiasts who are proud to
              share their knowledge helping others learn the value and fun of amateur radio. Here
              you will find some tips, tools, and how to's.
            </p>
            <p>
              Come join us as we use our radio hobby to make a difference in our community and
              provide emergency communications in time of need.
            </p>
            <p>
              Every Monday night at 7:00PM ET SCARS hosts the “SCARS night out” net on the
              <a href="http://wb4qoj.webstarts.com/" target="_blank">WB4QOJ</a> repeater system -
              146.955(-) 77hz tone. All ham radio operators are welcome to participate (members or
              nonmembers). Topics open for discussion are, but not limited to, technical issues,
              station operations, DX, contesting, items wanted (need or discard), etc. On the first
              Monday of the month there will be a specific topic of discussion announced ahead of
              time. This net is informal with the intent of friendly exchanges in a relaxed QSO
              atmosphere. Net manager is Troy
              <a href="https://www.qrz.com/db/K4JDA" target="_blank">(K4JDA)</a>.
            </p>
            <p>
              We offer Amateur Radio License examination's monthly for anyone wishing to obtain an
              Amateur Radio License or to upgrade their current license.
              <a href="./about.php#TEST_SESSION">Click here</a> for more information on VE Test
              Session times and locations.
            </p>
          </div>
        </div>

        <!-- Main body content right panel (news, etc) -->
        <div class="main-body-right">
          <div class="article">
            <h3>Amateur Radio News</h3>
          </div>

          <div>
            <a
              href="https://www.cdc.gov/coronavirus/2019-ncov/index.html?s_cid=bb-coronavirus-2019-ncov-NCIRD"
              target="_blank"
              title="image of SARS-CoV-2"
              ><img
                class="news-image"
                src="http://www.cdc.gov/coronavirus/2019-ncov/images/Coronavirus-badge-300.png"
                style="width: 300px; height: 250px; border: 0px"
                alt="image of Coronavirus Disease 2019 (COVID-19)"
              />
            </a>
          </div>
          <div class="article">
            <h4>ARRL News Items</h4>
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
