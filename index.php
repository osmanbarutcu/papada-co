  <?php require_once('system/fonksiyon.php') ?>

  <!DOCTYPE html>
  <html>

  <head>
    <?php require_once('custom/header.php') ?>
  </head>

  <body>

    <div class="hero_area">
      <!-- header section strats -->
      <?php require_once('custom/topbar.php') ?>
      <!-- end header section -->
      <!-- slider section -->
      <?php
      if ($_GET && !empty($_GET['page'])) {
        $page = htmlspecialchars($_GET['page'] . ".php");
        if (file_exists('app/View/' . $page)) {
          require_once('app/View/' . $page);
        } else {
          header("HTTP/1.1 404 Not Found");
          exit();
        }
      } else {
        header("HTTP/1.1 404 Not Found");
        exit();
      }
      ?>
      <!-- end slider section -->
    </div>


  </body>
  <?php require_once('custom/footer.php') ?>

  </html>

