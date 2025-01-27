<h1 class="text-center text-3xl md:text-4xl font-bold text-gray-800 ">Actualidad Jurídica</h1>
<section id="actualidad-juridica">
    <div class="container mx-auto px-4 py-8 max-w-screen-lg">
        <!-- Contenedor de tarjetas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tarjeta 1 -->
            <div class="rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <a href="{{ route('pagNoticias.show') }}">
                    <img src="images/1.jpg" alt="Imagen artículo 1" class="w-full h-48 object-cover hover:brightness-75 transition-all duration-300">
                    <div class="p-4">
                        <p class="text-sm text-gray-500 mb-2 fecha-actual"></p>
                        <p class="text-lg font-semibold text-yellow-600 hover:underline">
                            Aquí va el título de la noticia.
                        </p>
                        <p class="text-gray-600 mt-3">
                            Aquí va una pequeña descripción de la noticia...
                        </p>
                    </div>
                </a>
            </div>

            <!-- Tarjeta 2 -->
            <div class="rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <a href="#">
                    <img src="images/1.jpg" alt="Imagen artículo 2" class="w-full h-48 object-cover hover:brightness-75 transition-all duration-300">
                    <div class="p-4">
                        <p class="text-sm text-gray-500 mb-2 fecha-actual"></p>
                        <p class="text-lg font-semibold text-yellow-600 hover:underline">
                            ¿Cómo pueden las empresas del sector minero cumplir con la Ley de Teletrabajo en Chile?
                        </p>
                        <p class="text-gray-600 mt-3">
                            La implementación del teletrabajo en Chile ha ganado relevancia desde la aprobación de la Ley...
                        </p>
                    </div>
                </a>
            </div>

            <!-- Tarjeta 3 -->
            <div class="rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <a href="#">
                    <img src="images/1.jpg" alt="Imagen artículo 3" class="w-full h-48 object-cover hover:brightness-75 transition-all duration-300">
                    <div class="p-4">
                        <p class="text-sm text-gray-500 mb-2 fecha-actual"></p>
                        <p class="text-lg font-semibold text-yellow-600 hover:underline">
                            ¿Por qué es importante un reglamento interno actualizado para las grandes empresas en Chile?
                        </p>
                        <p class="text-gray-600 mt-3">
                            En el ámbito empresarial chileno, contar con un reglamento interno actualizado no es solo un...
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // Función para formatear la fecha
    function obtenerFechaActual() {
        const opciones = { day: '2-digit', month: 'long', year: 'numeric' };
        return new Date().toLocaleDateString('es-ES', opciones);
    }

    // Asignar la fecha actual a todos los elementos con la clase "fecha-actual"
    document.querySelectorAll('.fecha-actual').forEach((elemento) => {
        elemento.textContent = obtenerFechaActual();
    });
</script>
