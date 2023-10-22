<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?= urlAna() ?>/css/details-shop.css" crossorigin="anonymous" referrerpolicy="no-referrer">
<div class="card-wrapper">
    <div class="card">
        <!-- card left -->
        <div class="product-imgs">
            <div class="img-display zoom-container">
                <div class="img-showcase">
                    <img src="<?= urlAna() ?>/takilar/1.png" class="imgh zoom-images-detay-1" loading="lazy" alt="shoe image">
                    <img src="<?= urlAna() ?>/takilar/2.png" class="imgh zoom-images-detay-2" loading="lazy" alt="shoe image">
                    <img src="<?= urlAna() ?>/takilar/3.png" class="imgh zoom-images-detay-3" loading="lazy" alt="shoe image">
                    <img src="<?= urlAna() ?>/takilar/4.jpg" class="imgh zoom-images-detay-4" loading="lazy" alt="shoe image">
                </div>
            </div>
            <div class="img-select">
                <div class="img-item">
                    <a href="#" data-id="1">
                        <img src="<?= urlAna() ?>/takilar/1.png" class="imgh" alt="shoe image">
                    </a>
                </div>
                <div class="img-item">
                    <a href="#" data-id="2">
                        <img src="<?= urlAna() ?>/takilar/2.png" class="imgh" alt="shoe image">
                    </a>
                </div>
                <div class="img-item">
                    <a href="#" data-id="3">
                        <img src="<?= urlAna() ?>/takilar/3.png" class="imgh" alt="shoe image">
                    </a>
                </div>
                <div class="img-item">
                    <a href="#" data-id="4">
                        <img src="<?= urlAna() ?>/takilar/4.jpg" class="imgh" alt="shoe image">
                    </a>
                </div>
            </div>
        </div>
        <!-- card right -->
        <div class="product-content">
            <h2 class="product-title">Takı Ürünleri</h2>
            <a href="" class="buy_button">Tüm Takıları Gör</a>
            <div class="product-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>4.7(21)</span>
            </div>

            <div class="product-price">
                <p class="last-price">Eski Fiyatı: <span>$257.00</span></p>
                <p class="new-price">Yeni Fiyatı: <span>$249.00 (5%)</span></p>
            </div>

            <div class="product-detail">
                <h2>Ürün Hakkında: </h2>
                <p>Yüksek kaliteli malzemelerden üretilmiş bu takı seti, şıklığı ve zarafeti bir araya getiriyor. Her
                    türlü
                    özel
                    etkinlik için mükemmel bir seçimdir. Farklı renk seçenekleriyle uyum sağlar.</p>
                <p>Ürün özellikleri:</p>
                <ul>
                    <li>Renk: <span>Gümüş</span></li>
                    <li>Stok Durumu: <span>Stokta Var</span></li>
                    <li>Kategori: <span>Takı</span></li>
                    <li>Kargo Alanı: <span>Tüm Dünya</span></li>
                    <li>Kargo Ücreti: <span>Ücretsiz</span></li>
                </ul>
            </div>

            <div class="purchase-info">
                <button type="button" class="btn" id="wp_yonlendir">
                    Şimdi Al <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#wp_yonlendir').click(function() {
            var productInfo = "Ürün: Diamond Ring - Fiyat: $1000.00"; // Ürün bilgilerini burada belirleyin
            var whatsappNumber = "905423681864"; // WhatsApp numarasını burada belirleyin
            var whatsappMessage = encodeURIComponent("Merhaba, " + productInfo + " hakkında bilgi almak istiyorum."); // Mesajı burada oluşturun
            var whatsappLink = "https://wa.me/" + whatsappNumber + "?text=" + whatsappMessage;
            window.open(whatsappLink, '_blank');
        });
    });
    const imgItems = document.querySelectorAll('.img-select .img-item');
    currentImgId = 1;


    imgItems.forEach((imgItem, index) => {

        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            currentImgId = index + 1;
            slideImage();
            enableZoom();
            window.addEventListener('resize', slideImage);
        });
    });

    function slideImage() {
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;
        const transformValue = -(currentImgId - 1) * displayWidth;
        document.querySelector('.img-showcase').style.transform = `translateX(${transformValue}px)`;
    }
    const zoomContainer = document.querySelector('.zoom-container');
    let isZoomEnabled = false;

    function enableZoom() {
        const zoomContainer = document.querySelector('.zoom-container');
        const image = zoomContainer.querySelector('.zoom-images-detay-' + currentImgId);
        let isZoomEnabled = false;

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
            image.style.transformOrigin = 'initial';
        }

        if (!isZoomEnabled) {
            zoomContainer.addEventListener('pointermove', (event) => {
                if (event.target === image) {
                    updateZoom(event);
                    zoomIn();
                } else {
                    zoomOut();
                }
            });
            zoomContainer.addEventListener('pointerleave', zoomOut);
            isZoomEnabled = true;
        }
    }
    enableZoom();
</script>