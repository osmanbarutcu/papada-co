<section class="price_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>Takılarımız</h2>
        </div>
        <div class="price_container">
            <div class="box">
                <div class="name">
                    <h6>Diamond Ring</h6>
                </div>
                <div class="img-box">
                    <img src="images/p-1.png" alt="Diamond Ring">
                </div>
                <div class="detail-box">
                    <h5>$<span>1000.00</span></h5>
                    <a href="#" class="buy_button">Hemen İletişime Geç</a>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="price_btn">Daha Fazla Gör</a>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('.buy_button').click(function() {
            var productInfo = "Ürün: Diamond Ring - Fiyat: $1000.00"; // Ürün bilgilerini burada belirleyin
            var whatsappNumber = "905423681864"; // WhatsApp numarasını burada belirleyin
            var whatsappMessage = encodeURIComponent("Merhaba, " + productInfo + " hakkında bilgi almak istiyorum."); // Mesajı burada oluşturun
            var whatsappLink = "https://wa.me/" + whatsappNumber + "?text=" + whatsappMessage;
            window.open(whatsappLink, '_blank');
        });
    });
</script>