 <div class="item_section layout_padding2 animated fadeInOnScrollItem">
     <div class="container">
         <div class="item_container">
             <div class="box">
                 <div class="price">
                     <h6>
                         En İyi Fiyat
                     </h6>
                 </div>
                 <div class="img-box">
                     <img src="images/i-1.png" alt="">
                 </div>
                 <div class="name">
                     <h5>
                         Bileklik
                     </h5>
                 </div>
             </div>
             <div class="box">
                 <div class="price">
                     <h6>
                         En İyi Fiyat
                     </h6>
                 </div>
                 <div class="img-box">
                     <img src="images/i-2.png" alt="">
                 </div>
                 <div class="name">
                     <h5>
                         Yüzük
                     </h5>
                 </div>
             </div>
             <div class="box">
                 <div class="price">
                     <h6>
                         En İyi Fiyat
                     </h6>
                 </div>
                 <div class="img-box">
                     <img src="images/i-3.png" alt="">
                 </div>
                 <div class="name">
                     <h5>
                         Küpeler
                     </h5>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <script>
     $(document).ready(function() {
         $(window).scroll(function() {
             var scrollPosition = $(this).scrollTop();
             var animationStartPoint = 500;

             if (scrollPosition > animationStartPoint) {
                 $('.fadeInOnScrollItem').addClass('animated fadeInRight');
             }
         });
     });
 </script>