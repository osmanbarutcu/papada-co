<section class="price_section layout_padding_shop">
    <div class="container">
        <div class="heading_container text-center">
            <h2 class="section_title">Takılarımız</h2>
        </div>
        <div class="price_container">
            <div class="box">
                <div class="product_info">
                    <h3 class="product_name">Diamond Ring</h3>
                    <div class="product_image zoom">
                        <img src="<?= urlAna() ?>/takilar/1.png" class="zoom-image" alt="Diamond Ring">
                    </div>
                    <div class="product_details">
                        <h4 class="product_price">$<span>1000.00</span></h4>
                        <p class="product_feature"><strong>Özellikler:</strong> 18 ayar altın, tek taş</p>
                        <p class="product_feature"><strong>Renk Seçenekleri:</strong> Beyaz altın, sarı altın</p>
                        <p class="product_feature"><strong>Ürün Kodu:</strong> 123456</p>
                    </div>
                </div>
                <div class="actions text-center">
                    <a href="detay" class="buy_button">Detay</a>
                </div>
            </div>
            <div class="box">
                <div class="product_info">
                    <h3 class="product_name">Diamond Ring</h3>
                    <div class="product_image zoom">
                        <img src="https://www.altinsepeti.com/img_urun/AS8TK26T4-safir-renkli-tasli-altin-taki-seti--14793755811.jpg" class="zoom-image" alt="Diamond Ring">
                    </div>
                    <div class="product_details">
                        <h4 class="product_price">$<span>1000.00</span></h4>
                        <p class="product_feature"><strong>Özellikler:</strong> 18 ayar altın, tek taş</p>
                        <p class="product_feature"><strong>Renk Seçenekleri:</strong> Beyaz altın, sarı altın</p>
                        <p class="product_feature"><strong>Ürün Kodu:</strong> 123456</p>
                    </div>
                </div>
                <div class="actions text-center">
                    <a href="#" class="buy_button">Detay</a>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="price_btn btn-secondary">Daha Fazla Gör</a>
        </div>
    </div>
</section>

<script>
    const containers = document.querySelectorAll('.zoom');
    containers.forEach(container => {
        const image = container.querySelector('.zoom-image');

        function updateZoom(event) {
            const rect = container.getBoundingClientRect();
            const offsetX = event.clientX - rect.left;
            const offsetY = event.clientY - rect.top;
            const xPercent = (offsetX / container.offsetWidth) * 100;
            const yPercent = (offsetY / container.offsetHeight) * 100;
            image.style.transformOrigin = `${xPercent}% ${yPercent}%`;
        }

        function zoomIn() {
            image.style.transform = 'translate(-50%, -50%) scale(2)';
        }

        function zoomOut() {
            image.style.transform = 'translate(-50%, -50%) scale(1)';
        }

        container.addEventListener('pointermove', (event) => {
            updateZoom(event);
            zoomIn();
        });

        container.addEventListener('pointerleave', zoomOut);
    });
</script>

<style>

</style>