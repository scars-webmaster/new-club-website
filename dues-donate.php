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
          <h1>QRV - SCARS</h1>
        </div>

        <!-- Other content of body content heading (right side) -->
        <div class="other-content">
          <div class="heading-buttons">
            <!-- Special button for new hams - licensing/testing -->
            <a class="newhambtn" href="/newsite/licensing-testing.php"
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
          <h3>Donations and Dues</h3>
          <h4>SCARS appreciates your support!</h4>
            <div class="article-column-section">
              <div class="article-column">
                <h4>AMAZON SMILE</h4>
                <p>
                AmazonSmile is a simple and automatic way for you to support your favorite charitable organization every time you shop, at no cost to you. Simply click the link below to get started</p>
                <p>
                  <a href="https://smile.amazon.com/charity/select?_encoding=UTF8" 
                      target="_blank">
                      <img class="amazon-img" src="img/amazonsmile.png" 
                      alt="Amazon Smile" 
                      title="Click here to shop at AmazonSmile and Amazon will make a donation to the Silver Comet Amateur Radio Society">
                    </a>
                  </p>
                </p>
              <div class="article-column">
                <h4>DONATE</h4>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick" />
                  <input type="hidden" name="hosted_button_id" value="MKTA98TUZ5ALW" />
                  <input
                    type="image"
                    src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"
                    border="0"
                    name="submit"
                    alt="PayPal - The safer, easier way to pay online!"
                  />
                  <img
                    alt=""
                    border="0"
                    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
                    width="1"
                    height="1"
                    >
                </form>
              </div>
              <div class="article-column">
                <h4>DUES</h4>
                <p>Membership dues are $20.00 annually and can be renewed conveniently online using the following PayPal button. Please enter your Amateur Radio Call Sign in the box below</p>
                <p>New Members<a href="docs/MembershipApplication2020_only.pdf" target="_blank">click here</a> for an application (please print and mail in with your dues).</p> 
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="AHB3DQH7A94RN">
                  <table style="margin-left: 15px;">
                    <tr><td><input type="hidden" name="on0" value="Annual Membership Dues"><b>2021</b> Annual Membership Dues <u>renewal</u> for: <input type="text" name="os0" maxlength="200"> (Call Sign)</td></tr>
                    </table> 
                  <p><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></p>
                </form>
              </div>
            </div>
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
