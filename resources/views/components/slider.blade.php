<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Slider -->
<div class="swiper w-full h-[30vh] sm:h-[70vh] lg:h-screen">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="w-full h-full aspect-[16/9]">
                <img src="/images/slider(1).jpeg" alt="slider" class=" object-cover sm:object-contain">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="w-full h-full aspect-[16/9]">
                <img src="/images/slider(2).jpeg" alt="slider" class=" object-cover sm:object-contain">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="w-full h-full aspect-[16/9]">
                <img src="/images/slider(3).jpeg" alt="slider" class="object-cover sm:object-contain">
            </div>
        </div>
    </div>
    <!-- Paginación -->
    
    <!-- Botones de navegación -->
    <div class="swiper-button-prev text-primary"></div>
    <div class="swiper-button-next text-primary"></div>
</div>

<script>
    const swiper = new Swiper('.swiper', {
        loop: true, // Hacer que el slider sea infinito
        autoplay: {
            delay: 5000, // Cambia cada 5 segundos
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
        },
    });
</script>
