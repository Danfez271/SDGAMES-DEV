
<div class="font-Kanit bg-[#041333]">


    <div class="grid grid-cols-1">
        <div>
            <div class="relative">

                <header class="hero">
                    <nav class="nav container font-bold" id="nav">


                        <h2 class="nav__logo">
                            <a href="">
                                <img src="{{ asset('images/homepage/logos/svg/sdgamesblanco.svg') }}" alt="" class="h-16 w-16">
                            </a>

                        </h2>

                        <ul class="nav__links ">

                            <li class="nav__item">
                                <a href="#" class="nav__link">Inicio</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Catalogo</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Promociones</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Nosotros</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Contacto</a>
                            </li>

                        </ul>



                        <a href="#nav" class="nav__hamburguer">
                            <img src="{{asset('images/homepage/menu.svg')}}" alt="" class="nav__icon">
                        </a>

                        <a href="#" class="nav__close">
                            <img src="{{asset('images/homepage/close.svg')}}" alt=""  class="nav__icon">
                        </a>

                    </nav>
                    <div>
                        <div class="TextoB">
                            <div class=" sm:top-56 xs:top-52 sm:left-4 sm:right-4 xs:right-4 xs:ml-5 md:mx-auto 2xl:ml-16 lg:ml-16 md:w-11/12 text-white md:top-52 lg:top-52 xl:top-56 2xl:top-80 left-12 right-1/4 lg:w-45 xs:pt-10 " id="TBienvenida">
                                <h1 class="xl:text-7xl 7xl:text-7xl lg:text-7xl sm:justify-start sm:text-6xl xs:text-3xl mb-4 text-montserrat md:text-6xl font-bold" >
                                    ¡Tu <span class="text-cyan-400"> destino gamer </span> <br>esta aqui!
                                </h1>

                                <br>

                                <div class=" flex flex-wrap 2xl:gap-4 lg:gap-4 xl:gap-4 md:gap-4 sm:gap-0 xs:gap-0 my-auto ">
                                    <div class="flex-1 2xl:basis-0 lg:basis-0 md:basis-0 xs:basis-full sm:basis-full ">
                                             <a href="#" id="" class="2xl:text-3xl xl:text-3xl lg:text-4xl md:text-4xl sm:text-4xl xs:text-sm  text-white font-bold  p-3.5 mt-5  text-center rounded-full bg-gradient-to-r from-[#A200FF] to-[#510080] px-14 hover:text-[#A200FF]  hover:bg-gradient-to-r hover:from-white hover:to-white  ">
                                            Explora nuestros juegos!
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 bg-[#041333]" id="catalog">
        <div class=" pt-2 text-center justify-center pl-12">
            <h2 class="text-white 2xl:text-6xl xl:text-6xl lg:text-4xl sm:text-5xl xs:text-5xl mb-4">
                Juegos mas populares</h2>
            <h3 class="text-white 2xl:text-xl xl:text-xl lg:text-xl sm:text-xl xs:text-xl mb-4 font-light">
                Venta y distribución de los juegos más populares del mercado.
            </h3>
        </div>

        <div class="grid 2xl:gap-2 xl:gap-2 lg:gap-2 md:gap-1 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 md:grid-cols-3 xs:gap-2 2xl:flex-none lg:flex-none md:flex xs:flex sm:flex xs:flex-row sm:flex-row xs:flex-wrap sm:flex-wrap sm:gap-2 xs:justify-center sm:justify-center  py-7" id="catalog_service">
            <div class="2xl:p-2 lg:p-2 md:p-2 rounded-lg hover:p-0 2xl:w-1/5 lg:w-1/5 md:w-1/3 xs:w-1/3 sm:w-1/3 transition-all 2xl:-ml-0 xl:-ml-0 lg:-ml-0 md:-ml-1 xs:-ml-1 sm:-ml-1 xs:p-1 sm:p-1" id="service_item">
                <a href="/streaming/netflix-premium">
                    <img src="{{asset('images/homepage/mostpopular/fifa.png')}}" loading="lazy" class="2xl:w-full xl:w-full lg:w-full md:w-full sm:w-full xs:w-full 2xl:h-auto xl:h-auto lg:h-auto md:h-auto sm:h-auto xs:h-32 rounded-lg hover:brightness-150 " alt="Netflix Premium sdprimetv">
                </a>
            </div>
            <div class="2xl:p-2 lg:p-2 md:p-2 rounded-lg hover:p-0 2xl:w-1/5 lg:w-1/5 md:w-1/3 xs:w-1/3 sm:w-1/3 transition-all 2xl:-ml-0 xl:-ml-0 lg:-ml-0 md:-ml-1 xs:-ml-1 sm:-ml-1 xs:p-1 sm:p-1" id="service_item">
                <a href="/streaming/hbo-max">
                    <img src="{{asset('images/homepage/mostpopular/wz.png')}}" loading="lazy" class="2xl:w-full xl:w-full lg:w-full md:w-full sm:w-full xs:w-full 2xl:h-auto xl:h-auto lg:h-auto md:h-auto sm:h-auto xs:h-32 rounded-lg hover:brightness-150 " alt="HBO Max sdprimetv">
                </a>
            </div>
            <div class="2xl:p-2 lg:p-2 md:p-2 rounded-lg hover:p-0 2xl:w-1/5 lg:w-1/5 md:w-1/3 xs:w-1/3 sm:w-1/3 transition-all 2xl:-ml-0 xl:-ml-0 lg:-ml-0 md:-ml-1 xs:-ml-1 sm:-ml-1 xs:p-1 sm:p-1" id="service_item">
                <a href="/streaming/amazon-prime">
                    <img src="{{asset('images/homepage/mostpopular/gta.png')}}" loading="lazy" class="2xl:w-full xl:w-full lg:w-full md:w-full sm:w-full xs:w-full 2xl:h-auto xl:h-auto lg:h-auto md:h-auto sm:h-auto xs:h-32 rounded-lg hover:brightness-150 " alt="Amazon Prime sdprimetv">
                </a>
            </div>
            <div class="2xl:p-2 lg:p-2 md:p-2 rounded-lg hover:p-0 2xl:w-1/5 lg:w-1/5 md:w-1/3 xs:w-1/3 sm:w-1/3 transition-all 2xl:-ml-0 xl:-ml-0 lg:-ml-0 md:-ml-1 xs:-ml-1 sm:-ml-1 xs:p-1 sm:p-1" id="service_item">
                <a href="/streaming/apple-tv">
                    <img src="{{asset('images/homepage/mostpopular/minecraft.png')}}" loading="lazy" class="2xl:w-full xl:w-full lg:w-full md:w-full sm:w-full xs:w-full 2xl:h-auto xl:h-auto lg:h-auto md:h-auto sm:h-auto xs:h-32 rounded-lg hover:brightness-150 " alt="Apple Tv sdprimetv">
                </a>
            </div>
        </div>
    </div>

    <div class="PlaystationSection flex bg-no-repeat">
            <h2  class="pspluslogo justify-start pt-32 w-2/5 mx-20 ">

                <img class=" " src="{{asset('images/homepage/psplus/pspluslogo.png')}}" alt="">

                <br>
                <span class="text-black 2xl:text-3xl xl:text-3xl lg:text-3xl sm:text-3xl xs:text-xl  font-light">
                    Disfruta de cientos de juegos de PS5, PS4, clásicos
                    de PlayStation y beneficios imperdibles de tres
                    planes de suscripción a precios excelentes que
                    desatan el poder de tu consola PlayStation. </span>

                <br>
                <br>

                <span class="text-white 2xl:text-6xl xl:text-6xl lg:text-6xl sm:text-4xl xs:text-xl font-bold uppercase">
                    playstation plus deluxe
                </span>

                <br>
                <br>

                <span class="text-black 2xl:text-3xl xl:text-3xl lg:text-3xl sm:text-3xl xs:text-xl  font-light">
                    Disfruta de todos los beneficios de PlayStation Plus
                    de los planes Extra y Essential, además de
                    beneficios exclusivos, como pruebas de juegos y
                    catálogo de clásicos. </span>

                <br>
                <br>

                <span class="text-white 2xl:text-6xl xl:text-6xl lg:text-6xl sm:text-4xl xs:text-xl font-bold ">
                    Pruebas de juegos
                </span>

                <br>
                <br>

                <span class="text-black 2xl:text-3xl xl:text-3xl lg:text-3xl sm:text-3xl xs:text-xl  font-light">
                    Prueba una selección de los títulos más importantes
                    con límite de tiempo para ayudarte a decidir tu
                    próxima experiencia de juego.</span>

                <br>
                <div class="flex">
                    <div class=" flex 2xl:gap-1 lg:gap-1 xl:gap-1 md:gap-4 sm:gap-0 xs:gap-0 my-20 ">
                        <div class="flex 2xl: lg: md: xs: sm: ">
                            <a href="#" id="" class="2xl:text-5xl xl:text-5xl lg:text-5xl md:text-5xl sm:text-5xl xs:text-sm w-max  text-[#FDB710] font-bold  p-5   text-center rounded-full bg-gradient-to-r from-[#000000] to-[#000000] px-56 py-12 hover:text-[#000000]  hover:bg-gradient-to-r hover:from-white hover:to-white  ">
                                Añadir Plan
                            </a>
                        </div>
                    </div>
                </div>
            </h2>


        <div class="grid-">

            <div class="2xl:p-2 lg:p-72 md:p-72 rounded-lg hover:p-0 2xl:w-1/5 lg:w-3/5 md:w-3/5 xs:w-3/12 sm:w-1/3 transition-all 2xl:-ml-0 xl:-ml-0 lg:-ml-0 md:-ml-1 xs:-ml-1 sm:-ml-1 xs:p-1 sm:p-1" id="service_item">
                <a href="">
                    <img src="{{asset('images/homepage/psplus/ghost.png')}}" loading="lazy" class="2xl:w-full xl:w-full lg:w-full md:w-full sm:w-full xs:w-full 2xl:h-auto xl:h-auto lg:h-auto md:h-auto sm:h-auto xs:h-32 rounded-lg hover:brightness-150 " alt="HBO Max sdprimetv">
                </a>
            </div>
            <div class="2xl:p-2 lg:p-2 md:p-2 rounded-lg hover:p-0 2xl:w-1/5 lg:w-1/5 md:w-1/3 xs:w-1/3 sm:w-1/3 transition-all 2xl:-ml-0 xl:-ml-0 lg:-ml-0 md:-ml-1 xs:-ml-1 sm:-ml-1 xs:p-1 sm:p-1" id="service_item">
                <a href="">
                    <img src="{{asset('images/homepage/psplus/gow.png')}}" loading="lazy" class="2xl:w-full xl:w-full lg:w-full md:w-full sm:w-full xs:w-full 2xl:h-auto xl:h-auto lg:h-auto md:h-auto sm:h-auto xs:h-32 rounded-lg hover:brightness-150 " alt="Amazon Prime sdprimetv">
                </a>
            </div>
            <div class="2xl:p-2 lg:p-2 md:p-2 rounded-lg hover:p-0 2xl:w-1/5 lg:w-1/5 md:w-1/3 xs:w-1/3 sm:w-1/3 transition-all 2xl:-ml-0 xl:-ml-0 lg:-ml-0 md:-ml-1 xs:-ml-1 sm:-ml-1 xs:p-1 sm:p-1" id="service_item">
                <a href="">
                    <img src="{{asset('images/homepage/psplus/granturismo.png')}}" loading="lazy" class="2xl:w-full xl:w-full lg:w-full md:w-full sm:w-full xs:w-full 2xl:h-auto xl:h-auto lg:h-auto md:h-auto sm:h-auto xs:h-32 rounded-lg hover:brightness-150 " alt="Apple Tv sdprimetv">
                </a>
            </div>


        </div>

    </div>





    <footer>

        <div class="foot1 bg-no-repeat w-full min-h-screen flex justify-start items-center gap-7">
                <h2 class="text-8xl text-white mx-12 ">
                    <span class="font-bold">SDGames</span> <br> es diversion
                    <br>
                    <span class="text-xl font-light">
                        ofreciendo un servicio rápido y eficiente
                        en la venta de juegos.
                    </span>
                    <a href="">
                    </a>
                </h2>



        </div>

        <div class="footfinal bg-no-repeat w-full min-h-screen">

        </div>


    </footer>





</div>






