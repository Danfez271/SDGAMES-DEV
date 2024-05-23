<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


        <title>{{ $title ?? 'SDGAMES' }}</title>

        @vite(['resources/css/app.css' , 'resources/js/app.js' , 'resources/css/estilos.css'])
        @livewireStyles
    </head>
    <body class="font-Kanit">

        <main>
        {{ $slot }}
        </main>
        @livewireStyles
        <footer class="bg-[url(../../public/images/homepage/bannerfooter.png)] bg-center bg-cover bg-no-repeat w-full min-h-[700px] text-white ">

<div class="flex justify-center text-center sm:text-start items-center sm:justify-between  flex-col sm:flex-row   ">
    <div class=" w-full sm:basis-1/2 basis-full 2xl:flex-cols-4  xl:flex-cols-4 md:flex-cols-4 sm:m-[20px] flex gap-[50px] px-[45px] lg:gap-[35px] lg:px-[30px] md:gap-[25px] md:px-[22px] sm:px-[5px] sm:gap-[5px] sm:flex-cols-4  xs:gap-[1px] xs:px-[10px] py-[10px] xs:flex-col sm:flex-row   ">
        <div class="LOGO flex justify-center sm:justify-start">
                    <a cl href="/">
                        <img src="{{ asset('images/homepage/logos/svg/sdgamesblanco.svg') }}" class="h-40 w-40 sm:ml-16 sm:mt-12 lg:ml-11  mt-16 mb-10       " alt="">
                    </a>
        </div>


        <div class="box font-light text-2xl  leading-10 sm:mt-60 xs:mt-[10vw] sm:ml-0  ">

            <h4 class="text-[#02F2EB] font-semibold"> Accesos Rapido</h4>
            <a href="/">Inicio</a>
            <br>
            <a href="">Catalogo</a>
            <br>
            <a href="">Promociones</a>
            <br>
            <a href="">Contacto</a>

        </div>

        <div class="box font-light text-2xl  leading-10   sm:mt-60 xs:mt-[10vw] sm:ml-0  ">
            <h4 class="text-[#02F2EB] font-semibold "> Otros productos</h4>
            <a href="https://sdprimetv.com">Sdprimetv</a>
            <br>
            <a href="https://sdprimetvpanel.com">Sdpanel</a>
        </div>
    </div>

    <div class="w-full sm:basis-1/2 basis-full sm:m-[5px] flex gap-[95px] h-full justify-center justify-items-center pt-52 lg:m-0 lg:gap-[65px] md:gap-[47px] sm:gap-[40px] md:flex-row sm:flex-col flex-row sm:items-center xs:gap-[40px] xs:items-center xs:pt-20 ">


        <a href="#" class="h-[100px] w-[70px] flex items-center lg:h-[100px] lg:w-[70px] md:h-[50px] md:w-[35px] sm:h-[44px] sm:w-[30px] xs:h-[50px] xs:w-[35px]">
            <img src="{{ asset('images/homepage/iconsocial/svg/telegram.svg') }}" alt="Telegram">
        </a>


        <a href="#" class="h-[100px] w-[40px] flex items-center lg:h-[100px] lg:w-[40px] md:h-[50px] md:w-[20px] sm:h-[44px] sm:w-[18px] xs:h-[50px] xs:w-[20px] ">
            <img src="{{ asset('images/homepage/iconsocial/svg/facebokk.svg') }}"  alt="Facebook" >
        </a>


        <a href="#" class="h-[100px] w-[70px] flex items-center lg:h-[100px] lg:w-[70px] md:h-[50px] md:w-[35px] sm:h-[44px] sm:w-[30px] xs:h-[50px] xs:w-[35px]">
            <img src="{{ asset('images/homepage/iconsocial/svg/ig.svg') }}" alt="Instagram">
        </a>



        <a href="#" class="h-[100px] w-[70px]  flex items-center lg:h-[100px] lg:w-[70px] md:h-[50px] md:w-[35px] sm:h-[44px] sm:w-[30px] xs:h-[50px] xs:w-[35px]">
            <img src="{{ asset('images/homepage/iconsocial/svg/tiktiok.svg') }}" alt="Tik Tok">
        </a>


    </div>
</div>

<div class="grupo-2 sm:text-4xl  text-center mt-52 pb-10 font-extralight md:mt-20 xs:mt-10 xs:text-2xl ">
    <small>SdGames Derechos reservados <br class="sm:hidden">2024.</small>
</div>
</footer>
    </body>
</html>
