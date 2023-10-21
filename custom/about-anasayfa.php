 <section class="about_section layout_padding2-top layout_padding-bottom  animated fadeInOnScrollAna">
     <div class="design-box">
         <img src="images/design-2.png" alt="">
     </div>
     <div class="container">
         <div class="row">
             <div class="col-md-6">
                 <div class="detail-box">
                     <div class="heading_container">
                         <h2>
                             Takı Mağazası Hakkında
                         </h2>
                     </div>
                     <p>
                         Biz, tutkuyla takı dünyasına adanmış bir ekibiz. Şıklık, zarafet ve özgünlük konusundaki tutkumuz, müşterilerimize en kaliteli ve unutulmaz takı deneyimini sunma arzusuyla yanıp tutuşuyor. Papada Co, takıda zarafetin ve özgünlüğün mükemmel uyumunu arayanları bir araya getiren bir mekan olarak yola çıktı.
                     </p>
                     <div>
                         <a href="hakkimizda">
                             Devamını Oku
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="img-box">
                     <img src="images/about-img.png" alt="">
                 </div>
             </div>
         </div>
     </div>
 </section>

 <script>
     $(document).ready(function() {
         $(window).scroll(function() {
             var scrollPosition = $(this).scrollTop();
             var animationStartPoint = 1000;

             if (scrollPosition > animationStartPoint) {
                 $('.fadeInOnScrollAna').addClass('animated fadeInLeft');
             }
         });
     });
 </script>