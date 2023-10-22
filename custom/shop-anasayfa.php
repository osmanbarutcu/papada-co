<section class="price_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>Öne Çıkan Takılarımız</h2>
        </div>
        <div class="price_container">
            <div class="box">
                <div class="name">
                    <h6>Diamond Ring</h6>
                </div>
                <div class="img-box zoom" id="product-image">
                    <img class="zoom-images" src="https://cdn2.sorsware.com/jimmykey/ContentImages/Product/2023kis/23WX820035/yuzuk_23wx820035_gumus-161-gri_1_614x805.webp" alt="Diamond Ring">
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
    const zoomContainer = document.querySelector('.zoom');
    const image = zoomContainer.querySelector('.zoom-images');

    function updateZoom(event) {
        const rect = zoomContainer.getBoundingClientRect();
        const offsetX = event.clientX - rect.left;
        const offsetY = event.clientY - rect.top;
        const xPercent = (offsetX / zoomContainer.offsetWidth) * 100;
        const yPercent = (offsetY / zoomContainer.offsetHeight) * 100;
        image.style.transformOrigin = `${xPercent}% ${yPercent}%`;
    }

    function zoomIn() {
        image.style.transform = 'scale(2)';
    }

    function zoomOut() {
        image.style.transform = 'scale(1)';
    }

    zoomContainer.addEventListener('pointermove', (event) => {
        updateZoom(event);
        zoomIn();
    });

    zoomContainer.addEventListener('pointerleave', zoomOut);
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
<style>
    #product-image {
        position: relative;
        overflow: hidden;
    }

    #product-image img {
        transition: transform 0.3s ease;
    }

    #product-image:hover img {
        transform: scale(1.2);
    }
</style>