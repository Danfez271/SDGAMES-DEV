
<div class="font-Kanit bg-[#041333]">


    <div class="grid grid-cols-1">
        <div>
            <div class="relative">

                <header class="bg-[url(../../public/images/homepage/banner.png)] bg-cover min-h-[600px] h-[20vw] bg-center ">
                    <nav class="nav mx-auto justify-self-center w-11/12 max-w-[1200px] truncate font-bold" id="nav">


                        <h2 class="nav__logo">
                            <a href="">
                                <img src="{{ asset('images/homepage/logos/svg/sdgamesblanco.svg') }}" alt="" class="h-16 w-16">
                            </a>

                        </h2>

                        <ul class="nav__links ">

                            <li class="nav__item">
                                <a href="#" class="nav__link hover:text-[#02F2EB]">Inicio</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link hover:text-[#02F2EB]">Catalogo</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link hover:text-[#02F2EB]">Promociones</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link hover:text-[#02F2EB]">Nosotros</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link hover:text-[#02F2EB]">Contacto</a>
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
                        <div class="max-w-[1440px] w-full mx-auto justify-self-center text-white">
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

    <div class="flex flex-row">

        <div class="bg-[url(../../public/images/homepage/psplus/psplusbanner.png)] bg-right-top min-h-[1280px] max-w-full h- flex bg-no-repeat">
            <div class=" flex flex-col basis-2/5">

                <img class=" w-[45vw] ml-14 mt-28 " src="{{asset('images/homepage/psplus/pspluslogo.png')}}" alt="">


                <p class="text-black 2xl:text-2xl xl:text-2xl lg:text-2xl sm:text-3xl xs:text-xl  font-light ml-20 mt-8">
                    Disfruta de cientos de juegos de PS5, PS4, clásicos
                    de PlayStation y beneficios imperdibles de tres
                    planes de suscripción a precios excelentes que
                    desatan el poder de tu consola PlayStation.

                    <br>
                    <br>

                    <span class="text-white 2xl:text-6xl xl:text-6xl lg:text-6xl sm:text-4xl xs:text-xl font-bold uppercase">
                        playstation plus deluxe
                    </span>

                    <br>
                    <br>

                    <span class="text-black 2xl:text-2xl xl:text-2xl lg:text-2xl sm:text-3xl xs:text-xl  font-light">
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

                    <span class="text-black 2xl:text-2xl xl:text-2xl lg:text-2xl sm:text-3xl xs:text-xl font-light">
                        Prueba una selección de los títulos más importantes
                        con límite de tiempo para ayudarte a decidir tu
                        próxima experiencia de juego.</span>
                </p>
                <div class="flex">
                    <div class=" flex 2xl:gap-1 lg:gap-1 xl:gap-1 md:gap-4 sm:gap-0 xs:gap-0 my-14 ml-20">
                        <div class="flex 2xl: lg: md: xs: sm: ">
                            <a href="#" id="" class="2xl:text-5xl xl:text-5xl lg:text-5xl md:text-5xl sm:text-5xl xs:text-sm w-max  text-[#FDB710] font-bold  p-5   text-center rounded-full bg-gradient-to-r from-[#000000] to-[#000000] px-56 py-12 hover:text-[#000000]  hover:bg-gradient-to-r hover:from-white hover:to-white  ">
                                Añadir Plan
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="basis-3/5 grid grid-cols-3 justify-items-center items-end ">

                <a class="w-[80%] pb-[117px]" href="">
                    <img src="{{asset('images/homepage/psplus/gow.png')}}" loading="lazy" class="2xl:w-full xl:w-full lg:w-full md:w-full sm:w-full xs:w-full 2xl:h-auto xl:h-auto lg:h-auto md:h-auto sm:h-auto xs:h-32 rounded-lg hover:brightness-110 " alt="Amazon Prime sdprimetv">
                </a>

                <a class="w-[80%] pb-[117px]" href="">
                    <img src="{{asset('images/homepage/psplus/ghost.png')}}" loading="lazy" class="2xl:w-full xl:w-full lg:w-full md:w-full sm:w-full xs:w-full 2xl:h-auto xl:h-auto lg:h-auto md:h-auto sm:h-auto xs:h-32 rounded-lg hover:brightness-110 " alt="HBO Max sdprimetv">
                </a>


                <a class="w-[80%] pb-[117px]" href="">
                    <img src="{{asset('images/homepage/psplus/granturismo.png')}}" loading="lazy" class="2xl:w-full xl:w-full lg:w-full md:w-full sm:w-full xs:w-full 2xl:h-auto xl:h-auto lg:h-auto md:h-auto sm:h-auto xs:h-32 rounded-lg hover:brightness-110 " alt="Apple Tv sdprimetv">
                </a>

            </div>
        </div>

    </div>
    <div class="bg-[url(../../public/images/homepage/bannermission.png)] bg-center bg-cover min-h-[700px] bg-no-repeat w-full  flex justify-start items-center ">
        <h1 class=" text-white mx-28  ">
            <span class="font-bold text-9xl">SDGames</span> <br> <span class="font-normal text-7xl leading-[2]"> es diversion </span>
            <br>
            <span class="text-3xl font-light justify-center leading-1">
                        ofreciendo un servicio rápido y eficiente <br>
                        en la venta de juegos.
                    </span>

            <div class="">
                <div class=" flex-1 px-1 py-6 hover:fill-[#02F2EB] ">
                    <button class="py-4   px-6 gap-6 font-semibold text-5xl flex w-max *:hover:fill-[#02F2EB]  justify-center items-center rounded-full bg-gradient-to-r from-[#A200FF] to-[#510080]  hover:text-[#02F2EB] hover:fill-[#02F2EB] hover:bg-gradient-to-r hover:from-white hover:to-white ">
                        <svg class="w-12 h-12 inline-flex fill-white   " id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.18 30.26">
                            <g id="ELEMENTS">
                                <g>
                                    <path class="cls-1" d="m0,30.26l2.17-8.09c-1.23-2.22-1.87-4.7-1.87-7.22C.29,6.7,7,0,15.24,0s14.95,6.7,14.95,14.95-6.7,14.95-14.95,14.95c-2.47,0-4.92-.62-7.1-1.81L0,30.26Zm8.54-5.21l.51.31c1.88,1.12,4.02,1.71,6.19,1.71,6.68,0,12.12-5.44,12.12-12.12S21.92,2.83,15.24,2.83,3.12,8.26,3.12,14.95c0,2.21.61,4.38,1.77,6.28l.31.52-1.21,4.52,4.54-1.22Z"/>
                                    <path class="cls-2" d="m20.8,17.02c-.62-.37-1.42-.78-2.14-.48-.56.23-.91,1.1-1.27,1.54-.18.23-.41.26-.69.15-2.09-.83-3.69-2.22-4.84-4.14-.2-.3-.16-.53.07-.81.35-.41.78-.87.88-1.43.09-.55-.16-1.2-.39-1.69-.29-.63-.62-1.52-1.25-1.88-.58-.33-1.34-.14-1.86.28-.89.72-1.32,1.86-1.31,2.98,0,.32.04.64.12.95.18.74.52,1.43.91,2.09.29.5.61.98.95,1.44,1.12,1.52,2.5,2.83,4.11,3.82.8.49,1.67.92,2.56,1.22,1,.33,1.9.68,2.99.47,1.14-.22,2.26-.92,2.71-2.01.13-.32.2-.69.13-1.03-.15-.71-1.11-1.13-1.69-1.47Z"/>
                                </g>
                            </g>
                        </svg>
                        <span> Contactar</span>
                    </button>
                </div>
            </div>
        </h1>
    </div>



    <footer class="bg-[url(../../public/images/homepage/bannerfooter.png)] bg-center bg-cover bg-no-repeat w-full min-h-[700px] text-white ">

            <div class="flex items-center justify-between ">
                <div class=" w-full basis-1/2 m-[20px] flex gap-[50px] px-[45px]">
                    <div class="LOGO ">
                        <div class="box">
                            <figure>
                                <a href="">
                                    <img src="{{ asset('images/homepage/logos/svg/sdgamesblanco.svg') }}" class="h-40 w-40 ml-16 mt-12" alt="">
                                </a>
                            </figure>
                        </div>
                    </div>

                    <div class="box font-light text-2xl mt-52 leading-10 ">

                        <h4 class="text-[#02F2EB] font-semibold"> Accesos Rapido</h4>
                        <a href="">Inicio</a>
                        <br>
                        <a href="">Catalogo</a>
                        <br>
                        <a href="">Promociones</a>
                        <br>
                        <a href="">Contacto</a>

                    </div>

                    <div class="box font-light text-2xl mt-52 leading-10 ml-5 ">
                        <h4 class="text-[#02F2EB] font-semibold "> Otros productos</h4>
                        <a href="">Sdprimetv</a>
                        <br>
                        <a href="">Sdpanel</a>
                    </div>
                </div>

                <div class="w-full basis-1/2 m-[5px] flex gap-[95px] px-[15px] h-full  justify-center justify-items-center pt-52">


                    <a href="#" class="h-[100px] w-[70px] flex items-center">
                        <img src="{{ asset('images/homepage/iconsocial/svg/telegram.svg') }}" alt="Telegram">
                    </a>


                    <a href="#" class="h-[100px] w-[40px] flex items-center">
                        <img src="{{ asset('images/homepage/iconsocial/svg/facebokk.svg') }}"  alt="Facebook" >
                    </a>


                    <a href="#" class="h-[100px] w-[70px] flex items-center">
                        <img src="{{ asset('images/homepage/iconsocial/svg/ig.svg') }}" alt="Instagram">
                    </a>



                    <a href="#" class="h-[100px] w-[70px] flex items-center">
                        <img src="{{ asset('images/homepage/iconsocial/svg/tiktiok.svg') }}" alt="Tik Tok">
                    </a>


                </div>
            </div>

        <div class="grupo-2 text-4xl  text-center mt-52 pb-10 font-extralight">
            <small>SdGames Derechos reservados 2024</small>
        </div>
    </footer>
</div>






