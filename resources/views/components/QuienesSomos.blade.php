{{-- <section id="quienes-somos" class="bg-white py-12">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-center items-center">
        <!-- Imagen -->
        <div class="w-full md:w-5/12">
            <img src="images/slider(3).jpeg" alt="imagenQuienesSomos" class="w-full rounded-lg shadow-lg">
        </div>
        <!-- Texto -->
        <div class="w-full md:w-7/12 mt-6 md:mt-0 md:ml-6 text-center md:text-left">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">¿QUIÉNES SOMOS?</h1>
            <p id="full-text" class="text-base md:text-lg text-gray-600 mt-4 leading-relaxed line-clamp-6">
                Desde 1982, Sandoval Abogados ha sido un referente en servicios legales en el Gran Concepción. <br>
                Fundado por Marcelo Sandoval Zambrano y liderado actualmente por Juan Ignacio Sandoval Oyaneder, nuestro estudio
                destaca por su transparencia, responsabilidad y atención personalizada. <br>
                Contamos con un equipo de abogados altamente capacitados, en constante actualización sobre cambios
                legales y jurisprudenciales, lo que nos permite ofrecer soluciones jurídicas eficaces y adaptadas a las
                necesidades de nuestros clientes. Nos diferenciamos por una comunicación directa y sin intermediarios,
                asegurando decisiones informadas y un servicio de excelencia.
            </p>
            <button id="btnVermas"
                class="mt-4 text-gray-600 hover:text-gray-800 font-semibold transition duration-9999">

                Ver más
            </button>
        </div>
    </div>
</section>
<script>
    document.getElementById('btnVermas').addEventListener('click', function() {
        const fullText = document.getElementById('full-text');
        const isCollapsed = fullText.classList.contains('line-clamp-6');

        if (isCollapsed) {
            fullText.classList.remove('line-clamp-6', 'animate-fadeOut');
            fullText.classList.add('animate-fadeIn');
            this.textContent = 'Ver menos';
        } else {
            fullText.classList.remove('animate-fadeIn');
            fullText.classList.add('line-clamp-6', 'animate-fadeOut');
            this.textContent = 'Ver más';
        }
    });
</script> --}}

<section id="quienes-somos" class="bg-white pb-12">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-center items-center">
        <!-- Texto -->
        <div class="w-full md:w-7/12 order-1 md:order-2 mt-6 md:mt-0 md:ml-6 text-center md:text-left">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">¿QUIÉNES SOMOS?</h1>
            <p id="full-text" class="text-base md:text-lg text-gray-600 mt-4 leading-relaxed line-clamp-6 text-left">
                Desde 1982, Sandoval Abogados ha sido un referente en servicios legales en el Gran Concepción. <br>
                Fundado por Marcelo Sandoval Zambrano y liderado actualmente por Juan Ignacio Sandoval Oyaneder, nuestro estudio
                destaca por su transparencia, responsabilidad y atención personalizada. <br>
                Contamos con un equipo de abogados altamente capacitados, en constante actualización sobre cambios
                legales y jurisprudenciales, lo que nos permite ofrecer soluciones jurídicas eficaces y adaptadas a las
                necesidades de nuestros clientes. Nos diferenciamos por una comunicación directa y sin intermediarios,
                asegurando decisiones informadas y un servicio de excelencia.
            </p>
            <button id="btnVermas"
                class="mt-4 text-gray-600 hover:text-gray-800 font-semibold transition duration-9999">
                Ver más
            </button>
        </div>

        <!-- Imagen -->
        <div class="w-full md:w-5/12 order-2 md:order-1">
            <img src="images/slider(3).jpeg" alt="imagenQuienesSomos" class="w-full rounded-lg shadow-lg">
        </div>
    </div>
</section>

<script>
    document.getElementById('btnVermas').addEventListener('click', function() {
        const fullText = document.getElementById('full-text');
        const isCollapsed = fullText.classList.contains('line-clamp-6');

        if (isCollapsed) {
            fullText.classList.remove('line-clamp-6', 'animate-fadeOut');
            fullText.classList.add('animate-fadeIn');
            this.textContent = 'Ver menos';
        } else {
            fullText.classList.remove('animate-fadeIn');
            fullText.classList.add('line-clamp-6', 'animate-fadeOut');
            this.textContent = 'Ver más';
        }
    });
</script>
