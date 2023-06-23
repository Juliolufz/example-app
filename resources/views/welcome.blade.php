<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="{{asset('https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/estilos.css' )}}">
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css')}}">
        <title>Realidad Virtual</title>
    </head>
    <body>

                <header class="encabezado">
                    <div class="contenedor-navegacion">
                        <div class="contenido-navegacion contenedor">
                            <div class="logo">
                                <h2><span >Vir</span><span>tu</span><span>al</span>
                                    <span>Re</span><span>ali</span><span>ty</span>
                                </h2>
                            </div>
                            <nav class="navegacion ocultar">
                                <a href="#">Inicio</a>
                                <a href="#">Sobre Nosotros</a>
                                <a href="#">Autor Principal</a>
                                <a href="#">Contacto</a>
                                <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                                    @if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                            @auth
                                                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar seccion</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </div>
                            </nav>
                            <div class="hamburguesa">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>

                    <div class="contenido-header">
                        <div class="contenedor-encabezado">
                            <div class="texto-encabezado">
                                <h2>
                                    <span>Bienvenido Al Mundo Celestial</span>

                                </h2>
                            </div>
                            <video autoplay loop muted>
                                <source src="video/istockphoto-1399563313-640_adpp_is_DeWatermark.mp4">
                            </video>
                        </div>
                    </div>
                </header>

                <div class="contenedor-nosotros contenedor">
                    <div class="texto-nosotros">
                        <h1>¡la tienda de realidad virtual Celestial!</h1>
                        <p>
                            Nos complace darles la bienvenida a nuestra tienda de tecnología de vanguardia, donde podrán descubrir
                            un mundo de experiencias inmersivas y sorprendentes. En Celestial, ofrecemos una amplia variedad de
                            dispositivos de realidad virtual,
                            desde gafas de realidad virtual portátiles hasta sistemas de realidad virtual de alta gama para PC y
                            consolas.
                        </p>
                    </div>
                    <div class="imagenes-nosotros">
                        <div class="imagen1">
                            <img data-src="img/imagen1.jpg" alt="mujer con gafas ">
                        </div>
                        <div class="imagenes2">
                            <img data-src="img/imagen2.jpg" alt="gafas virtual">
                        </div>
                    </div>
                </div>

                <section class="menu contenedor">
                    <h2 class="texto-vr">Lo mas comprado</h2>
                    <div class="botones-platillos">
                        <button class="todos btn btn-morado">Todos</button>
                        <button class="gafasvrcons btn btn-morado">gafas-vr-consola</button>
                        <button class="gafasvrpc btn btn-morado">gafas-vr-pc</button>
                        <button class="gafasvrcelular btn btn-morado">gafas-vr-celular</button>
                        <button class="pcgamer btn btn-morado">pc-gamer</button>
                    </div>

                    <div class="platillos">
                        <div class="platillo" data-platillo="vrconsolas">
                            <img data-src="img/imagen-vr-consolas.webp" alt="vrconsolas">
                            <h2>k2</h2>
                            <p>son un dispositivo que se coloca en la cabeza y que permite experimentar una realidad virtual
                                inmersiva mientras se juega en una consola de videojuegos. Estas gafas muestran una pantalla
                                dividida en dos imágenes, una para cada ojo, que se combinan para crear una imagen tridimensional.
                                Además, suelen contar con sensores de movimiento y controles para que el usuario pueda interactuar
                                con el entorno virtual de manera más natural y fluida</p>
                            <div class="precio">
                                <p>$2500</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>


                        <div class="platillo" data-platillo="vrconsolas">
                            <img data-src="img/imagen-vr-consolas.2.webp" alt="vrconsolas">
                            <h2>k24</h2>
                            <p>son un dispositivo que se coloca en la cabeza y que permite experimentar una realidad virtual
                                inmersiva mientras se juega en una consola de videojuegos. Estas gafas muestran una pantalla
                                dividida en dos imágenes, una para cada ojo, que se combinan para crear una imagen tridimensional.
                                Además, suelen contar con sensores de movimiento y controles para que el usuario pueda interactuar
                                con el entorno virtual de manera más natural y fluida</p>
                            <div class="precio">
                                <p>$2500</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>

                        <div class="platillo" data-platillo="vrconsolas">
                            <img data-src="img/imagen-vr-consolas.3.jpeg" alt="vrconsolas">
                            <h2>tm23</h2>
                            <p>son un dispositivo que se coloca en la cabeza y que permite experimentar una realidad virtual
                                inmersiva mientras se juega en una consola de videojuegos. Estas gafas muestran una pantalla
                                dividida en dos imágenes, una para cada ojo, que se combinan para crear una imagen tridimensional.
                                Además, suelen contar con sensores de movimiento y controles para que el usuario pueda interactuar
                                con el entorno virtual de manera más natural y fluida</p>
                            <div class="precio">
                                <p>$2500</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>

                        <div class="platillo" data-platillo="pc">
                            <img data-src="img/imagen-vr-pc.jpg" alt="pc">
                            <h2>pc1000</h2>
                            <p>son un dispositivo que se coloca en la cabeza y que permite experimentar una realidad virtual
                                inmersiva mientras se juega en una consola de videojuegos. Estas gafas muestran una pantalla
                                dividida en dos imágenes, una para cada ojo, que se combinan para crear una imagen tridimensional.
                                Además, suelen contar con sensores de movimiento y controles para que el usuario pueda interactuar
                                con el entorno virtual de manera más natural y fluida</p>
                            <div class="precio">
                                <p>$2500</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>

                        <div class="platillo" data-platillo="pc">
                            <img data-src="img/imagen-vr-pc.2.jpeg" alt="pc">
                            <h2>pc1001</h2>
                            <p>son un dispositivo que se coloca en la cabeza y que permite experimentar una realidad virtual
                                inmersiva mientras se juega en una consola de videojuegos. Estas gafas muestran una pantalla
                                dividida en dos imágenes, una para cada ojo, que se combinan para crear una imagen tridimensional.
                                Además, suelen contar con sensores de movimiento y controles para que el usuario pueda interactuar
                                con el entorno virtual de manera más natural y fluida</p>
                            <div class="precio">
                                <p>$2500</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>

                        <div class="platillo" data-platillo="pc">
                            <img data-src="img/imagen-vr-pc.3-cable.jpg" alt="pc">
                            <h2>pc1002</h2>
                            <p>son un dispositivo que se coloca en la cabeza y que permite experimentar una realidad virtual
                                inmersiva mientras se juega en una consola de videojuegos. Estas gafas muestran una pantalla
                                dividida en dos imágenes, una para cada ojo, que se combinan para crear una imagen tridimensional.
                                Además, suelen contar con sensores de movimiento y controles para que el usuario pueda interactuar
                                con el entorno virtual de manera más natural y fluida</p>
                            <div class="precio">
                                <p>$2500</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>


                        <div class="platillo" data-platillo="celular">
                            <img data-src="img/imagen-vr-celular.webp" alt="celular">
                            <h2>ck 25</h2>
                            <p>son un dispositivo que se coloca en la cabeza y que permite experimentar una realidad virtual
                                inmersiva mientras se juega en una consola de videojuegos. Estas gafas muestran una pantalla
                                dividida en dos imágenes, una para cada ojo, que se combinan para crear una imagen tridimensional.
                                Además, suelen contar con sensores de movimiento y controles para que el usuario pueda interactuar
                                con el entorno virtual de manera más natural y fluida</p>
                            <div class="precio">
                                <p>$2500</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>

                        <div class="platillo" data-platillo="celular">
                            <img data-src="img/imagen-vr-celular.2.jpg" alt="celular">
                            <h2>ckl 100</h2>
                            <p>son un dispositivo que se coloca en la cabeza y que permite experimentar una realidad virtual
                                inmersiva mientras se juega en una consola de videojuegos. Estas gafas muestran una pantalla
                                dividida en dos imágenes, una para cada ojo, que se combinan para crear una imagen tridimensional.
                                Además, suelen contar con sensores de movimiento y controles para que el usuario pueda interactuar
                                con el entorno virtual de manera más natural y fluida</p>
                            <div class="precio">
                                <p>$2500</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>

                        <div class="platillo" data-platillo="celular">
                            <img data-src="img/imagen-vr-celular.3.jpg" alt="celular">
                            <h2>ckl1001</h2>
                            <p>son un dispositivo que se coloca en la cabeza y que permite experimentar una realidad virtual
                                inmersiva mientras se juega en una consola de videojuegos. Estas gafas muestran una pantalla
                                dividida en dos imágenes, una para cada ojo, que se combinan para crear una imagen tridimensional.
                                Además, suelen contar con sensores de movimiento y controles para que el usuario pueda interactuar
                                con el entorno virtual de manera más natural y fluida</p>
                            <div class="precio">
                                <p>$2500</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>

                        <div class="platillo" data-platillo="pcgamer">
                            <img data-src="img/imagen-pcgamer.webp" alt="pcgamer">
                            <h2>cbg aming</h2>
                            <p>Torre de PC: La torre de un PC gamer suele ser más grande y llamativa que la de un PC convencional,
                                con una carcasa robusta y con iluminación LED.
                                Procesador: Un procesador de gama media-alta, como un Intel Core i5 o un AMD Ryzen 5, con al menos
                                cuatro núcleos y una velocidad de reloj de al menos 3 GHz.
                                Tarjeta gráfica: Una tarjeta gráfica dedicada de al menos 4 GB de memoria, como una NVIDIA GeForce
                                GTX 1650 o una AMD Radeon RX 5500 XT.
                                Memoria RAM: Al menos 8 GB de memoria RAM, aunque lo ideal sería contar con 16 GB para un mejor
                                rendimiento en juegos exigentes.
                                Disco duro: Un disco duro de alta capacidad, de al menos 1 TB, para almacenar juegos, aplicaciones y
                                archivos multimedia.
                                Fuente de alimentación: Una fuente de alimentación de alta potencia, de al menos 500 vatios, para
                                proporcionar suficiente energía a los componentes del PC.
                                Refrigeración: Un sistema de refrigeración adecuado, como un ventilador o un sistema de
                                refrigeración líquida, para mantener los componentes frescos durante el juego.
                                Periféricos: Un teclado, un ratón y un monitor de alta resolución para disfrutar de una experiencia
                                de juego óptima.
                                Ten en cuenta que esta es solo una descripción general de los componentes que suelen tener los PC
                                gamers. La configuración exacta dependerá del presupuesto y de las necesidades de cada persona.
                            </p>
                            <div class="precio">
                                <p>$25000</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>

                        <div class="platillo" data-platillo="pcgamer">
                            <img data-src="img/imagen-pcgamer.2.jpeg" alt="pcgamer">
                            <h2>plt gaming</h2>
                            <p>Torre de PC: La torre de un PC gamer suele ser más grande y llamativa que la de un PC convencional,
                                con una carcasa robusta y con iluminación LED.
                                Procesador: Un procesador de gama media-alta, como un Intel Core i5 o un AMD Ryzen 5, con al menos
                                cuatro núcleos y una velocidad de reloj de al menos 3 GHz.
                                Tarjeta gráfica: Una tarjeta gráfica dedicada de al menos 4 GB de memoria, como una NVIDIA GeForce
                                GTX 1650 o una AMD Radeon RX 5500 XT.
                                Memoria RAM: Al menos 8 GB de memoria RAM, aunque lo ideal sería contar con 16 GB para un mejor
                                rendimiento en juegos exigentes.
                                Disco duro: Un disco duro de alta capacidad, de al menos 1 TB, para almacenar juegos, aplicaciones y
                                archivos multimedia.
                                Fuente de alimentación: Una fuente de alimentación de alta potencia, de al menos 500 vatios, para
                                proporcionar suficiente energía a los componentes del PC.
                                Refrigeración: Un sistema de refrigeración adecuado, como un ventilador o un sistema de
                                refrigeración líquida, para mantener los componentes frescos durante el juego.
                                Periféricos: Un teclado, un ratón y un monitor de alta resolución para disfrutar de una experiencia
                                de juego óptima.
                                Ten en cuenta que esta es solo una descripción general de los componentes que suelen tener los PC
                                gamers. La configuración exacta dependerá del presupuesto y de las necesidades de cada persona.</p>
                            <div class="precio">
                                <p>$2800</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>

                        <div class="platillo" data-platillo="pcgamer">
                            <img data-src="img/imagen-pcgamer.3.jpg" alt="pcgamer">
                            <h2>dba programing</h2>
                            <p>Torre de PC: La torre de un PC gamer suele ser más grande y llamativa que la de un PC convencional,
                                con una carcasa robusta y con iluminación LED.
                                Procesador: Un procesador de gama media-alta, como un Intel Core i5 o un AMD Ryzen 5, con al menos
                                cuatro núcleos y una velocidad de reloj de al menos 3 GHz.
                                Tarjeta gráfica: Una tarjeta gráfica dedicada de al menos 4 GB de memoria, como una NVIDIA GeForce
                                GTX 1650 o una AMD Radeon RX 5500 XT.
                                Memoria RAM: Al menos 8 GB de memoria RAM, aunque lo ideal sería contar con 16 GB para un mejor
                                rendimiento en juegos exigentes.
                                Disco duro: Un disco duro de alta capacidad, de al menos 1 TB, para almacenar juegos, aplicaciones y
                                archivos multimedia.
                                Fuente de alimentación: Una fuente de alimentación de alta potencia, de al menos 500 vatios, para
                                proporcionar suficiente energía a los componentes del PC.
                                Refrigeración: Un sistema de refrigeración adecuado, como un ventilador o un sistema de
                                refrigeración líquida, para mantener los componentes frescos durante el juego.
                                Periféricos: Un teclado, un ratón y un monitor de alta resolución para disfrutar de una experiencia
                                de juego óptima.
                                Ten en cuenta que esta es solo una descripción general de los componentes que suelen tener los PC
                                gamers. La configuración exacta dependerá del presupuesto y de las necesidades de cada persona.</p>
                            <div class="precio">
                                <p>$3000</p>
                                <button><i class="fa-solid fa-basket-shopping fa-bounce" style="color: #253041;">comprar</i></button>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="carousel contenedor">
                    <div class="carousel--contenedor">
                        <button  aria-label="Anterior" class="carouselanterior" style="color: #253041;">
                            <i class="fa-duotone fa-chevrons-rigt"></i>
                        </button>

                        <div class="glider">
                            <div class="carousel--elemento">
                                <img data-src="img/bloo-carousel4k.jpeg" alt="juego1">
                            </div>

                            <div class="carousel--elemento">
                                <img data-src="img/img-carrusel.2.webp" alt="juego2">
                            </div>

                            <div class="carousel--elemento">
                                <img data-src="img/img-carrusel.3.jpeg" alt="juego3">
                            </div>

                            <div class="carousel--elemento">
                                <img data-src="img/img-carrusel.4.png" alt="juego4">
                            </div>

                            <div class="carousel--elemento">
                                <img data-src="img/batmanarkhamvranalisis-carousel.webp" alt="juego5">
                                <i class="fa-duotone fa-chevrons-right"></i>
                            </div>
                        </div>
                        <button  aria-label="Siguiente" class="carouselsiguiente">
                            <i class="fa-duotone fa-chevrons-left"></i>
                        </button>
                    </div>
                </div>
                <div role="tablist" class="carouselindicadores"></div>


                <div class="formulario-contacto contenedor">
                    <div class="informacion-contacto">
                        <h3>contactanos</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Piccadilly Circus, Londres W1J 0DA, Reino Unido</p>
                        <p><i class="fa-solid fa-envelope-circle-check"> juli31@gmail.com</i></p>
                        <p><i class="fa-solid fa-circle-phone">+57 304 441 22 88</i></p>
                        <div class="redes-sociales">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-twitch"></i>
                        </div>
                    </div>

                    <form class="formulario">
                        <div class="input-formulario">
                            <label for="nombre">Nombre</label>
                            <input type="text" placeholder="Nombre" id="nombre">
                        </div>

                        <div class="input-formulario">
                            <label for="apellido">Apellido</label>
                            <input type="text" placeholder="Apellido" id="apellido">
                        </div>

                        <div class="input-formulario">
                            <label for="correo">Correo</label>
                            <input type="email" placeholder="email" id="correo">
                        </div>

                        <div class="input-formulario">
                            <label for="telefono">Correo</label>
                            <input type="number" placeholder="numero" id="numero">
                        </div>

                        <div class="input-formulario">
                            <label for="mensaje">Mensaje</label>
                            <textarea></textarea>
                        </div>

                        <div class="input-formulario">
                            <input type="submit" class="btn btn-morado" value="enviar">
                        </div>
                    </form>
                </div>

                <div class="pie-pagina ">
                    <div class="contenedor-piepagina contenedor">
                        <div class="info">
                            <h3>Direccion</h3>
                            <p>Piccadilly Circus, Londres W1J 0DA, Reino Unido</p>
                        </div>

                        <div class="info">
                            <h3>Dias especiales</h3>
                            <p>viernes y sabados 8am - 12am</p>
                        </div>

                        <div class="info">
                            <h3>Horarios </h3>
                            <p>lunes a sabados 7am - 6pm</p>
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-twitch"></i>
                        </div>

                        <div class="info">
                            <h3>Noticias </h3>
                            <p>suscribete para resivir informacion de los dias especiales</p>
                            <input type="email" placeholder="Tu correo">
                            <input type="submit" class="btn btn-morado" value="Suscribirse">
                        </div>

                    </div>
                </div>

                <footer class="footer">
                    <p>Todos los derechos reservados &copy; 2023 virtual reality,desarrollado por julio </p>
                </footer>

                <script src="{{asset('https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.js')}}"></script>
                <script src="https://kit.fontawesome.com/8bb0ae9e38.js" crossorigin="anonymous"></script>
                <script src="{{asset('js/app.js') }}"></script>
    </body>
</html>
