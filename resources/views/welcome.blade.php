<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JW</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://www.dafontfree.net/embed/ZmVsaXgtdGl0bGluZy1yZWd1bGFyJmRhdGEvMjQvZi8xMjQzNzgvRmVsaXhUaXRsaW5nLnR0Zg"
        rel="stylesheet" type="text/css" />
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</head>

<body class="antialiased bg-black">
    <!-- NavBar -->
    <div class=" bg-white z-40">
        <header class="fixed shadow-md  z-50 w-full px-5 py-2 flex items-center bg-black">
            <div class="bg-black flex items-center w-full">
                <a href="#inicio" class="">
                    <img src="{{ url('imgs/logo.png') }}" alt="{{ __('Jonh Wood') }}" class=" h-44">
                </a>
                <div class=" bg-[url('/imgs/fondo_menu.jpeg')] w-full"
                    style="background-image: url({{ url('imgs/fondo_menu.png') }})">
                    <!-- bg-gradient-to-r from-gold-600 via-gold-500 to-gold-300 hover:bg-white w-full opacity-20   -->
                    <a href="#inicio"
                        class="text-white font-bold text-3xl font-nunito hover:text-gold-300 px-3 rounded py-1 opacity-100">Inicio</a>
                    <a href="#pilares"
                        class="text-white font-bold text-3xl font-nunito hover:text-gold-300 px-3 rounded py-1">Pilares</a>
                    <a href="#servicios"
                        class="text-white font-bold text-3xl font-nunito hover:text-gold-300 px-3 rounded py-1">Servicio
                        Integral</a>
                    <a href="#propiedades"
                        class="text-white font-bold text-3xl font-nunito hover:text-gold-300 px-3 rounded py-1">Propiedades</a>
                    <a href="#franquicias"
                        class="text-white font-bold text-3xl font-nunito hover:text-gold-300 px-3 rounded py-1">Franquicias</a>
                    <a href="#contacto"
                        class="text-white font-bold text-3xl font-nunito hover:text-gold-300 px-3 rounded py-1">Contacto</a>
                </div>
            </div>
        </header>
    </div>
    <div id="home"
        class="relative flex items-top justify-center bg-black dark:bg-gray-900 sm:items-center py-4 pt-16 max-w-7xl mx-auto">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="">
            <div class=" pt-16 pb-4 items-center">
                <div class="my-5 w-full bg-contain bg-no-repeat "
                    style="background-image: url({{ url('imgs/fondo_espiral.png') }}); 
                    background-repeat: no-repeat;
                    background-size: contain    ;
                    position: relative;">
                    <div id=""
                        class=" mt-16 w-full  dark:bg-gray-800 overflow-hidden items-center my-5">
                        <div
                            class=" leading-normal text-5xl tracking-wide font-nunito font-medium text-gold-300 w-4/5 mt-56 ml-16 ">
                            Somos un servicio de <strong class="font-nunito font-bold">Gestión inmobiliaria</strong> de
                            excelencia con propiedades y
                            oportunidades de inversión en <strong class="font-nunito font-bold">México y Estados
                                Unidos</strong>
                        </div>
                    </div>
                    <div id="pilares" class=" mt-72 w-full ">
                        <div class="flex justify-end">
                            <div class=" border-b-8 border-b-gold-300 w-2/6 font-felix text-6xl font-bold">
                                PILARES
                            </div>
                        </div>
                        <div class="w-full grid grid-cols-2">
                            <div class=" p-5 items-center w-full ">

                                <div class="border-b-4 border-b-gold-300 w-full font-nunito font-bold text-5xl">
                                    Atención Premium
                                </div>
                                <div class="flex">
                                    <div class="w-1/3 mt-5">
                                        <img src="{{ url('imgs/atencion.png') }}" alt="" class=" w-40 h-40">
                                    </div>
                                    <div class=" mt-5 font-nunito text-4xl font-light w-2/3">
                                        Nos distinguimos por el compromiso y lealtada que tenemos con nuestros clientes.
                                    </div>
                                </div>
                            </div>
                            <div class=" p-5 items-center w-full ">

                                <div class="border-b-4 border-b-gold-300 w-full font-nunito font-bold text-5xl mt-24">
                                    Experiencia
                                </div>
                                <div class="flex">
                                    <div class="w-1/3 mt-5">
                                        <img src="{{ url('imgs/experiencia.png') }}" alt=""
                                            class=" w-40 h-40">
                                    </div>
                                    <div class=" mt-5 font-nunito text-4xl font-light w-2/3">
                                        Para que adquiera las mejores propiedades en México y Estados unidos
                                    </div>
                                </div>
                            </div>

                            <div class=" p-5 items-center w-full ">

                                <div class="border-b-4 border-b-gold-300 w-full font-nunito font-bold text-5xl">
                                    Profesionalización
                                </div>
                                <div class="flex">
                                    <div class="w-1/3 mt-5">
                                        <img src="{{ url('imgs/profecionalizacion.png') }}" alt=""
                                            class=" w-40 h-40">
                                    </div>
                                    <div class=" mt-5 font-nunito text-4xl font-light w-2/3">
                                        Nuestros Agentes son profecionales y siempre están en constante capacitación.
                                    </div>
                                </div>
                            </div>

                            <div class=" p-5 items-center w-full ml-24 ">

                                <div class="border-b-4 border-b-gold-300 w-full font-nunito font-bold text-5xl">
                                    Transparencia
                                </div>
                                <div class="flex">
                                    <div class="w-1/3 mt-5">
                                        <img src="{{ url('imgs/transparencia.png') }}" alt=""
                                            class=" w-40 h-40">
                                    </div>
                                    <div class=" mt-5 font-nunito text-4xl font-light w-2/3">
                                        Por el alto grado de confianza que depositan nuestros clientes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="servicios" class="mt-8 w-full ">
                    <div class="text-white w-full"
                        style="background-image: url({{ url('imgs/fondo_integrales.png') }}); 
                    background-repeat: no-repeat;
                    background-size: contain;
                    position: relative;">

                        <div class="border-b-8 border-b-gold-300 w-3/6 font-felix text-6xl font-bold mb-5 mt-16 ">
                            Servicios Integrales
                        </div>
                        <div class="grid grid-rows-6 grid-flow-col gap-2 items-center">
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d1.png') }}" alt="" class="w-20 h-20 inline"> Coaching
                                inmobiliario
                            </div>
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d2.png') }}" alt="" class="w-20 h-20 inline"> Agentes
                                Internacionales
                            </div>
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d3.png') }}" alt="" class="w-20 h-20 inline">
                                Asesoría Financiera y de Crédito
                            </div>
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d1.png') }}" alt="" class="w-20 h-20 inline">
                                Ventas
                                y Atención al Cliente
                            </div>
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d2.png') }}" alt="" class="w-20 h-20 inline">
                                Asesoría Legal
                            </div>
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d3.png') }}" alt="" class="w-20 h-20 inline">
                                Marketing y Networking
                            </div>
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d1.png') }}" alt="" class="w-20 h-20 inline">
                                Registro de propiedad
                            </div>
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d2.png') }}" alt="" class="w-20 h-20 inline">
                                Inspecciones
                            </div>
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d3.png') }}" alt="" class="w-20 h-20 inline">
                                Visitas
                                a propiedades
                            </div>
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d1.png') }}" alt="" class="w-20 h-20 inline">
                                Asesoría Contable
                            </div>
                            <div class=" font-bold font-nunito text-5xl my-5">
                                <img src="{{ url('imgs/d2.png') }}" alt="" class="w-20 h-20 inline">
                                Captación de Propiedades
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <a href="#" class=" rounded-full bg-gold-300 hover:bg-gold-600 px-10 py-3">Ver
                                más</a>
                        </div>
                    </div>
                </div>
                <div id="propiedades"
                    class="mt-8 w-full  first-letter:mt-8 bg-white dark:bg-gray-800 overflow-hidden">
                    <div class="flex justify-end">
                        <div class=" border-b-8 border-b-gold-300 w-2/6 font-felix text-6xl font-bold">
                            Loremipsu
                        </div>
                    </div>
                    <div class="grid grid-cols-3 mt-5">
                        
                        <x-properties >
                            <x-slot name='fondo'>{{url('imgs/casa1.jpeg')}}</x-slot>
                            <x-slot name='what'>Venta Houston</x-slot>
                            <x-slot name='amount'>$123,456,789 USD</x-slot>
                            <x-slot name='name'>Casa en Venta en Club de Golf</x-slot>
                            <x-slot name='where'>Houston, Texas</x-slot>
                            <x-slot name='country'>Estados Unidos</x-slot>
                            <x-slot name='medidas'>1246</x-slot>
                            <x-slot name='construccion'>720</x-slot>
                        </x-properties>
                        <x-properties >
                            <x-slot name='fondo'>{{url('imgs/casa2.jpeg')}}</x-slot>
                            <x-slot name='what'>Venta Houston</x-slot>
                            <x-slot name='amount'>$123,456,789 USD</x-slot>
                            <x-slot name='name'>Casa en Venta en Club de Golf</x-slot>
                            <x-slot name='where'>Houston, Texas</x-slot>
                            <x-slot name='country'>Estados Unidos</x-slot>
                            <x-slot name='medidas'>1246</x-slot>
                            <x-slot name='construccion'>720</x-slot>
                        </x-properties>

                        <x-properties >
                            <x-slot name='fondo'>{{url('imgs/casa3.jpeg')}}</x-slot>
                            <x-slot name='what'>Venta Houston</x-slot>
                            <x-slot name='amount'>$123,456,789 USD</x-slot>
                            <x-slot name='name'>Casa en Venta en Club de Golf</x-slot>
                            <x-slot name='where'>Houston, Texas</x-slot>
                            <x-slot name='country'>Estados Unidos</x-slot>
                            <x-slot name='medidas'>1246</x-slot>
                            <x-slot name='construccion'>720</x-slot>
                        </x-properties>
                    </div>
                    <div class="flex justify-end py-10 pr-10">
                        <a href="#" class=" rounded-full bg-gold-300 hover:bg-gold-600 px-10 py-3">Ver
                            más</a>
                    </div>
                </div>
                <div id="franquicias"
                    class="mt-8 w-full  first-letter:mt-8 overflow-hidden " 
                    style="background-image: url({{ url('imgs/fondo_franquicias.png') }}); 
                    background-repeat: no-repeat;
                    background-size: contain;
                    position: relative;">
                    <div class="border-b-8 border-b-gold-300 w-3/6 font-felix text-6xl text-gold-300 content-end font-bold mb-5 mt-16 ">
                        Franquicias
                    </div>
                    <div class="grid grid-cols-2 text-white mt-24 px-24">
                        <x-content-form>
                            <x-slot name='label'>Nombre*</x-slot>
                            <x-slot name='input'>
                                <x-input-text>
                                    <x-slot name='type'>text</x-slot>
                                    <x-slot name='name'>nombre</x-slot>
                                    <x-slot name='placeholder'>Nombre</x-slot>
                                </x-input-text>
                            </x-slot>
                        </x-content-form>

                        <x-content-form>
                            <x-slot name='label'>Apellidos*</x-slot>
                            <x-slot name='input'>
                                <x-input-text>
                                    <x-slot name='type'>text</x-slot>
                                    <x-slot name='name'>apellidos</x-slot>
                                    <x-slot name='placeholder'>Apellidos</x-slot>
                                </x-input-text>
                            </x-slot>
                        </x-content-form>

                        <x-content-form>
                            <x-slot name='label'>Correo Electrónico*</x-slot>
                            <x-slot name='input'>
                                <x-input-text>
                                    <x-slot name='type'>email</x-slot>
                                    <x-slot name='name'>email</x-slot>
                                    <x-slot name='placeholder'></x-slot>
                                </x-input-text>
                            </x-slot>
                        </x-content-form>
                        
                        <x-content-form>
                            <x-slot name='label'>Teléfono*</x-slot>
                            <x-slot name='input'>
                                <x-input-text>
                                    <x-slot name='type'>phone</x-slot>
                                    <x-slot name='name'>telefono</x-slot>
                                    <x-slot name='placeholder'></x-slot>
                                </x-input-text>
                            </x-slot>
                        </x-content-form>

                        <x-content-form>
                            <x-slot name='label'>País*</x-slot>
                            <x-slot name='input'>
                                <x-input-text>
                                    <x-slot name='type'>text</x-slot>
                                    <x-slot name='name'>pais</x-slot>
                                    <x-slot name='placeholder'></x-slot>
                                </x-input-text>
                            </x-slot>
                        </x-content-form>

                        <x-content-form>
                            <x-slot name='label'>Ciudad*</x-slot>
                            <x-slot name='input'>
                                <x-input-text>
                                    <x-slot name='type'>text</x-slot>
                                    <x-slot name='name'>ciudad</x-slot>
                                    <x-slot name='placeholder'></x-slot>
                                </x-input-text>
                            </x-slot>
                        </x-content-form>

                        <x-content-form>
                            <x-slot name='label'>Actualmente trabajas en el sector inmobiliario</x-slot>
                            <x-slot name='input'>
                                <x-radios />
                            </x-slot>
                        </x-content-form>

                        <x-content-form>
                            <x-slot name='label'>Si trabajas en el sector inmobiliarios en qué empresa</x-slot>
                            <x-slot name='input'>
                                <x-input-text>
                                    <x-slot name='type'>text</x-slot>
                                    <x-slot name='name'>empresa</x-slot>
                                    <x-slot name='placeholder'></x-slot>
                                </x-input-text>
                            </x-slot>
                        </x-content-form>

                        <x-content-form>
                            <x-slot name='label'>Capital Liquido (en dólares)</x-slot>
                            <x-slot name='input'>
                                <x-select />
                            </x-slot>
                        </x-content-form>

                        <x-content-form>
                            <x-slot name='label'>Comentarios adicionales</x-slot>
                            <x-slot name='input'>
                                <x-input-text>
                                    <x-slot name='type'>text</x-slot>
                                    <x-slot name='name'>comentarios</x-slot>
                                    <x-slot name='placeholder'></x-slot>
                                </x-input-text>
                            </x-slot>
                        </x-content-form>
                        
                       
                    </div>  
                    <div class="flex justify-end py-10 pr-10">
                        <a href="#" class=" rounded-full bg-gold-300 hover:bg-gold-600 px-10 py-3">
                            Enviar
                        </a>
                    </div>        
                </div>
                <div id="who"
                    class="mt-8 w-full  first-letter:mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div id="contacto" class="w-full flex"
                    style="background-image: url({{ url('imgs/fondo_contacto.png') }}); 
                    background-repeat: no-repeat;
                    background-size: cover;
                    position: relative;">
                    <div class="w-1/3 relative bg-contain"
                    style="background-image: url({{ url('imgs/fondo_contacto2.png') }}); 
                    background-repeat: no-repeat;
                    background-size: cover;
                    position: relative;">
                        
                    </div>
                    <div class="w-2/3 pl-8">
                        <div class="grid grid-rows-2 text-center w-full ">
                            <div class="  border-b-8 border-b-black w-full font-felix text-6xl font-bold text-black align-bottom ">
                                Contacto
                            </div>
                            <div class=" fornt-nunito font-regular text-4xl">Para obtener más información sobre nuestros servicios déjanos tus datos y un asesor se comunicará contigo.</div>
                        </div>
                        <div class="form">
                            <div class="grid grid-cols-2">
                                <x-input-contact>
                                    <x-slot name="type">text</x-slot>
                                    <x-slot name="name">contact_name</x-slot>
                                    <x-slot name="placeholder">Nombre</x-slot>
                                </x-input-contact>
                                <x-input-contact>
                                    <x-slot name="type">text</x-slot>
                                    <x-slot name="name">contact_apellidos</x-slot>
                                    <x-slot name="placeholder">Apellidos</x-slot>
                                </x-input-contact>

                                <x-input-contact>
                                    <x-slot name="type">email</x-slot>
                                    <x-slot name="name">contact_email</x-slot>
                                    <x-slot name="placeholder">Correo Electrónico</x-slot>
                                </x-input-contact>
                                
                                <x-input-contact>
                                    <x-slot name="type">number</x-slot>
                                    <x-slot name="name">contact_phone</x-slot>
                                    <x-slot name="placeholder">Teléfono a 10 digitos</x-slot>
                                </x-input-contact>

                                
                            </div>
                            <x-select-contact />
                            <x-textarea-contact />
                        </div>
                        <div class="flex justify-start py-10 pr-10">
                            <a href="#" class=" rounded-full bg-gold-300 hover:bg-gold-600 px-10 py-3">
                                Enviar
                            </a>
                        </div>        
                    </div>

                    </div>
                </div>
            </div>
            <div id="footer "
                    class="mt-8 w-full grid grid-cols-2 text-white font-nunito font-light tracking-widest">
                    <div>
                        <div class="mb-10">
                            <img src="{{url('imgs/logo_footer.png')}}" alt="">
                        </div>
                        <div class="flex">
                            <div class="flex">
                                <div class="w-10 h-10 mx-2 cursor-pointer">
                                    <img src="{{url('imgs/ico_whats.png')}}" alt="">
                                </div>
                                <div class="w-10 h-10 mx-2 cursor-pointer">
                                    <img src="{{url('imgs/ig_color.png')}}" alt="">
                                </div>
                                <div class="w-10 h-10 mx-2 cursor-pointer">
                                    <img src="{{url('imgs/fb_color.png')}}" alt="">
                                </div>
                                <div class="w-10 h-10 mx-2 cursor-pointer">
                                    <img src="{{url('imgs/tw_color.png')}}" alt="">
                                    </div>
                                <div class="w-10 h-10 mx-2 cursor-pointer">
                                    <img src="{{url('imgs/tt_color.png')}}" alt="">
                                    </div>
                                <div class="w-10 h-10 mx-2 cursor-pointer">
                                    <img src="{{url('imgs/yt_color.png')}}" alt="">
                                </div>
                            </div>
                            <div class="ml-5 align-text-bottom content-center"> Contáctanos</div>
                        </div>
                        <div class="my-5">
                            <div>Metepec, Estado de México</div>
                            <div>COPYRIGHT Todos los derechos Reservados</div>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col pl-36 tracking-widest uppercase font-extralight text-2xl">
                            <div class="my-5">Nosotros</div>
                            <div class="my-5">Nuestro equipo</div>
                            <div class="my-5">Aviso de privacidad</div>
                        </div>
                        <div class="flex flex-inline items-end">
                            <div class="w-2/3">
                                <img src="{{url('imgs/security.png')}}" alt="">
                            </div>
                            <div class="w-1/3">Certificado de Seguridad</div>
                        </div>
                    </div>
            </div>
            
        </div>
    </div>
    @yield('jquery')
</body>
<script>
    $(document).ready(function() {
        console.log('jalou madre foca');
    })
</script>

</html>
