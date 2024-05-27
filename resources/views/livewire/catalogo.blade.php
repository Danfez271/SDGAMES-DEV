@php
    $paginas = range('1', '20');
    $abecedario = range('A', 'Z');
@endphp

<div class="font-Kanit bg-[#041333]">

    <div class="grid grid-cols-1">
        <div>
            <div class="relative">

                <header class="flex flex-col bg-[url(../../public/images/catalog/bannercatalogo.png)] bg-cover min-h-[600px] h-[20vw] bg-center lg:md:min-h-[40vw]  sm:pt-2">
                    <nav class="nav sm:mx-20  xs:mx-12 lg:mx-24 justify-self-center  max-w-[1200px] truncate font-bold flex " id="nav">

                        <h2 class="nav__logo">
                            <a href="/">
                                <img src="{{ asset('images/homepage/logos/svg/sdgamesblanco.svg') }}" alt="" class="h-24 w-24">
                            </a>

                        </h2>


                        <ul class="nav__links ">

                            <li class="nav__item">
                                <a href="/" class="nav__link hover:rounded-full hover:bg-gradient-to-r hover:from-cyan-800 hover:to-cyan-800 lg:px-4 md:px-2  ">Inicio</a>
                            </li>
                            <li class="nav__item">
                                <a href="/catalogo" class="nav__link hover:rounded-full hover:bg-gradient-to-r hover:from-cyan-800 hover:to-cyan-800 lg:px-4 md:px-2">Catalogo</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link hover:rounded-full hover:bg-gradient-to-r hover:from-cyan-800 hover:to-cyan-800 lg:px-4 md:px-2">Promociones</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link hover:rounded-full hover:bg-gradient-to-r hover:from-cyan-800 hover:to-cyan-800 lg:px-4 md:px-2" >Contacto</a>
                            </li>

                        </ul>



                        <a href="#nav" class="nav__hamburguer">
                            <img src="{{asset('images/homepage/menu.svg')}}" alt="" class="nav__icon">
                        </a>

                        <a href="#" class="nav__close">
                            <img src="{{asset('images/homepage/close.svg')}}" alt=""  class="nav__icon">
                        </a>

                    </nav>

                    <div class="object h-full flex flex-col justify-end lg:pb-[6vw]">

                        <h1 class = "text-center 2xl:text-[200px] lg:text-[150px] xs:text-9xl text-white font-semibold"> Bienvenidos</h1>
                        <h2 class = "text-center 2xl:text-[50px] lg:text-[40px] xs:text-7xl  text-white font-semibold ">Aquí encontraras todos tus títulos favoritos</h2>

                    </div>



                </header>
            </div>
        </div>
    </div>

    <!-- CATALOGO CONTENIDO -->

    <div class="bg-black min-h-[800px]  ">

        <div class="flex justify-center pt-14">

            <form action="/busqueda" class="max-w-[70vw] w-full px-4 ">
                <div class="relative">
                    <input type="text" name="q" class="w-full h-20 p-10 rounded-full bg-white text-normal text-3xl" placeholder="Buscar">

                        <button type="submit" class="absolute inset-y-0 right-0 flex items-center px-[4vw] text-gray-700 bg-[#A200FF] rounded-r-full">
                                <svg class="text-teal-400 h-10 w-10 fill-black dark:text-teal-300" width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.178 45.57C39.1105 45.57 38.1943 45.1807 37.4561 44.4147L26.8293 33.4505L25.3666 34.2408C22.9508 35.5451 20.2981 36.2071 17.4837 36.2071C7.84359 36.2071 0 28.0874 0 18.1088C0 13.2471 1.82428 8.68814 5.13663 5.27065C8.4305 1.87165 12.815 0 17.4837 0C22.1525 0 26.5277 1.87165 29.8147 5.26834C33.1189 8.68468 34.9397 13.2448 34.9397 18.1076C34.9397 21.0422 34.272 23.9051 33.0069 26.3879L32.2917 27.7917L42.8804 38.6183C44.4355 40.2046 44.4447 42.8434 42.9 44.3812L42.8723 44.4089L42.8457 44.4378C41.9272 45.4221 40.78 45.5689 40.178 45.5689L40.178 45.57ZM17.1337 4.32328C10.0653 4.32328 4.31519 10.2271 4.31519 17.4837C4.31519 24.7404 10.0653 30.6453 17.1337 30.6453C24.202 30.6453 29.9221 24.7404 29.9221 17.4837C29.9221 10.2271 24.1847 4.32328 17.1337 4.32328Z" fill="white"/>
                                </svg>
                        </button>
                </div>
            </form>
         </div>

        <div class="mt-[7vw] ml-[15vw]">
            <h5 class="font-normal text-2xl text-start text-white">Buscar alfabeticamente</h5>
        </div>

        <div class="mx-[14vw] flex justify-between mb-12 mt-12">
            @foreach ($abecedario as $letra)
                <a href="#" class="font-light text-2xl text-white hover:text-[#A200FF]"><?=$letra?></a>
            @endforeach



        </div>

        <!-- SELECTS  -->
                <div class="flex justify-center gap-12">

                    <select id="" class="py-1 block w-80 font-semibold  rounded-full text-3xl  text-center bg-white text-black ">
                        <option selected="">Categoria</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>

                    <div class=" flex gap-4">

                        <button class="py-1 w-32 font-semibold rounded-full text-3xl text-center bg-white text-black hover:bg-cyan-500">
                            <a href="">PS4</a>
                        </button>

                        <button class="py-1 w-32 font-semibold rounded-full text-3xl text-center bg-white text-black  hover:bg-cyan-800">
                            <a href="">PS5</a>
                        </button>

                        <button class="py-1 w-32 font-semibold rounded-full text-3xl text-center bg-white text-black  hover:bg-green-600">
                            <a href="">XBOX</a>
                        </button>

                        <button class="py-1 w-32 font-semibold rounded-full text-3xl text-center bg-white text-black  hover:bg-purple-700">
                            <a href="">PC</a>
                        </button>

                    </div>

                </div>



        <!-- PANELES DE JUEGOS -->

        <div class="  mt-14 px-[14vw] w-full  ">
            <div class="grid grid-cols-3 grid-rows-2  justify-items-center *:rounded-[60px]">
                <img src="{{asset('images/homepage/mostpopular/minecraft.png')}}" alt="Imagen 1" class="">
                <img src="{{asset('images/homepage/mostpopular/minecraft.png')}}" alt="Imagen 2" class="">
                <img src="{{asset('images/homepage/mostpopular/minecraft.png')}}" alt="Imagen 3" class="">
                <img src="{{asset('images/homepage/mostpopular/minecraft.png')}}" alt="Imagen 4" class="">
                <img src="{{asset('images/homepage/mostpopular/minecraft.png')}}" alt="Imagen 5" class="">
                <img src="{{asset('images/homepage/mostpopular/minecraft.png')}}" alt="Imagen 6" class="">
            </div>
        </div>

        <!-- NUMERO DE PAGINAS -->
        <div class="mx-[18vw] flex justify-between ">


            <button class="scale-75 ">
                <svg width="47" height="65" viewBox="0 0 47 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M46 63.1654L0.889384 32.5L46 1.83456V63.1654Z" fill="white" stroke="#707070"/>
                </svg>
            </button>




            @foreach ($paginas as $page)
                <a href="#" class="font-light text-2xl text-white hover:text-[#A200FF] mb-12 mt-12"><?=$page?></a>
            @endforeach

            <button class="scale-75 ">
                <svg width="47" height="64" viewBox="0 0 47 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 1.33455L45.6106 32L0.5 62.6654V1.33455Z" fill="white" stroke="#707070"/>
                </svg>
            </button>


        </div>

        <!-- LOGOS -->

        <div class="pt-[5vw] pb-[10vw] w-full flex justify-center gap-24 scale-90">


            <img class="h-[100px] " src="{{asset('images/catalog/logosdev/blizzard.png')}}" alt="">

            <img class="h-[100px] " src="{{asset('images/catalog/logosdev/electronicarts.png')}}" alt="">

            <img class="h-[100px] " src="{{asset('images/catalog/logosdev/klipartz.png')}}" alt="">

            <img class="h-[100px] " src="{{asset('images/catalog/logosdev/ubisoftlogo.png')}}" alt="">


        </div>

    </div>

</div>
