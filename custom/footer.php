      <?php require_once('info.php') ?>

      <section class="container-fluid footer_section">
          <p>
              &copy; <span id="displayYear"></span> All Rights Reserved By
              <a href="https://html.design/">Free Html Templates</a>
          </p>
      </section>
      <!-- footer section -->

      <script type="text/javascript" src="<?= urlAna() ?>js/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="<?= urlAna() ?>js/bootstrap.js"></script>
      <script type="text/javascript" src="<?= urlAna() ?>js/custom.js"></script>

      <script>
          $(document).ready(function() {
              // Sayfa yüklendiğinde URL'ye göre aktif menü öğesini belirle
              var url = window.location.href;
              var activePage = url;
              $('.navbar-nav a').each(function() {
                  var linkPage = this.href;
                  if (activePage === linkPage) {
                      $(this).closest('.nav-item').addClass('active');
                  }
              });
          });
      </script>