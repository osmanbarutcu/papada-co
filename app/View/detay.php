<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: 'Open Sans', sans-serif;
    }

    body {
        line-height: 1.5;
    }

    .card-wrapper {
        max-width: 1100px;
        margin: 0 auto;
    }

    .imgh {
        width: 100% !important;
        display: block !important;
    }

    .img-display {
        overflow: hidden;
        margin-left: -50px !important;
        margin-top: -50px !important;
        border-radius: 20px;
    }

    .img-showcase {
        display: flex;
        width: 100%;
        transition: all 1.5s ease;
    }

    .img-showcase .imgh {
        min-width: 100% !important;
    }

    .img-select {
        display: flex;
    }

    .img-item {
        margin: 0.3rem;
    }

    .img-item:nth-child(1),
    .img-item:nth-child(2),
    .img-item:nth-child(3) {
        margin-right: 0;
    }

    .img-item:hover {
        opacity: 0.8;
    }

    .product-content {
        padding: 2rem 1rem;
    }

    .product-title {
        font-size: 3rem;
        text-transform: capitalize;
        font-weight: 700;
        position: relative;
        color: #12263a;
        margin: 1rem 0;
    }

    .product-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 4px;
        width: 80px;
        background: #12263a;
    }

    .product-link {
        text-decoration: none;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 0.9rem;
        display: inline-block;
        margin-bottom: 0.5rem;
        background: #256eff;
        color: #fff;
        padding: 0 0.3rem;
        transition: all 0.5s ease;
    }

    .product-link:hover {
        opacity: 0.9;
    }

    .product-rating {
        color: #ffc107;
    }

    .product-rating span {
        font-weight: 600;
        color: #252525;
    }

    .product-price {
        margin: 1rem 0;
        font-size: 1rem;
        font-weight: 700;
    }

    .product-price span {
        font-weight: 400;
    }

    .last-price span {
        color: #f64749;
        text-decoration: line-through;
    }

    .new-price span {
        color: #256eff;
    }

    .product-detail h2 {
        text-transform: capitalize;
        color: #12263a;
        padding-bottom: 0.6rem;
    }

    .product-detail p {
        font-size: 0.9rem;
        padding: 0.3rem;
        opacity: 0.8;
    }

    .product-detail ul {
        margin: 1rem 0;
        font-size: 0.9rem;
    }

    .product-detail ul li {
        margin: 0;
        list-style: none;
        background: url(https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/checked.png) left center no-repeat;
        background-size: 18px;
        padding-left: 1.7rem;
        margin: 0.4rem 0;
        font-weight: 600;
        opacity: 0.9;
    }

    .product-detail ul li span {
        font-weight: 400;
    }

    .purchase-info {
        margin: 1.5rem 0;
    }

    .purchase-info input,
    .purchase-info .btn {
        border: 1.5px solid #ddd;
        border-radius: 25px;
        text-align: center;
        padding: 0.45rem 0.8rem;
        outline: 0;
        margin-right: 0.2rem;
        margin-bottom: 1rem;
    }

    .purchase-info input {
        width: 60px;
    }

    .purchase-info .btn {
        cursor: pointer;
        color: #fff;
    }

    .purchase-info .btn:first-of-type {
        background: #256eff;
    }

    .purchase-info .btn:last-of-type {
        background: #f64749;
    }

    .purchase-info .btn:hover {
        opacity: 0.9;
    }

    @media screen and (min-width: 992px) {
        .card {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 1.5rem;
        }

        .card-wrapper {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-imgs {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .product-content {
            padding-top: 0;
        }


    }

    .zoom-container {
        overflow: hidden;
        position: relative;
        cursor: zoom-in;
    }

    .zoom-images-detay {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.2s ease;
    }

    @media screen and (max-width: 1200px) {
        .img-display {
            overflow: hidden;
            border-radius: 20px;
            margin: 10px !important;

        }

    }

    .img-item {
        margin-right: 10px;
        /* Her resim arasına 10 piksel sağ boşluk ekler */
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="card-wrapper">
    <div class="card">
        <!-- card left -->
        <div class="product-imgs">
            <div class="img-display zoom-container">
                <div class="img-showcase">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8oIp4ApYA2Xv7Ly0fexLuSaMkRFqKqSGWrimMsyikzw&s" class="imgh zoom-images-detay-1" loading="lazy" alt="shoe image">
                    <img src="https://trendingpics.com/app/images/download.php?key=y8xOnAAA" class="imgh zoom-images-detay-2" loading="lazy" alt="shoe image">
                    <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" class="imgh zoom-images-detay-3" loading="lazy" alt="shoe image">
                    <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" class="imgh zoom-images-detay-4" loading="lazy" alt="shoe image">
                </div>
            </div>
            <div class="img-select">
                <div class="img-item">
                    <a href="#" data-id="1">
                        <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" class="imgh" alt="shoe image">
                    </a>
                </div>
                <div class="img-item">
                    <a href="#" data-id="2">
                        <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" class="imgh" alt="shoe image">
                    </a>
                </div>
                <div class="img-item">
                    <a href="#" data-id="3">
                        <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" class="imgh" alt="shoe image">
                    </a>
                </div>
                <div class="img-item">
                    <a href="#" data-id="4">
                        <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" class="imgh" alt="shoe image">
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