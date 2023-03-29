<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JW</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('font/FelixTitling.ttf') }}" rel="stylesheet" type="text/css" />
    <style type="text/css">
        @font-face {
            font-family: 'felix-titling-regular';
            src: url('FelixTitling.ttf');
        }

        .title {
            font-family: 'felix-titling-regular';
        }
    </style>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</head>

<body class="antialiased bg-black max-w-7xl mx-auto">
    <!-- NavBar -->
    <div class=" bg-white z-40 w-full mx-auto">
        <header class=" lg:fixed shadow-md  z-50 w-full py-2 flex items-center bg-black">
            <div class="bg-black lg:flex items-center">
                <a href="#inicio" class=" ml-28">
                    <img src="{{ url('imgs/logo.png') }}" alt="{{ __('Jonh Wood') }}" class=" w-80 mx-auto">
                </a>
                <div class=" bg-[url('/imgs/fondo_menu.jpeg')] w-full lg:ml-10"
                    style="background-image: url({{ url('imgs/fondo_menu.png') }})">
                    <!-- bg-gradient-to-r from-gold-600 via-gold-500 to-gold-300 hover:bg-white w-full opacity-20   -->
                    <a href="#inicio"
                        class="text-white font-bold text-lg font-nunito hover:text-gold-300 px-3 rounded py-1 opacity-100">Inicio</a>
                    <a href="#pilares"
                        class="text-white font-bold text-lg font-nunito hover:text-gold-300 px-3 rounded py-1">Pilares</a>
                    <a href="#servicios"
                        class="text-white font-bold text-lg font-nunito hover:text-gold-300 px-3 rounded py-1">Servicio
                        Integral</a>
                    <a href="#propiedades"
                        class="text-white font-bold text-lg font-nunito hover:text-gold-300 px-3 rounded py-1">Propiedades</a>
                    <a href="#franquicias"
                        class="text-white font-bold text-lg font-nunito hover:text-gold-300 px-3 rounded py-1">Franquicias</a>
                    <a href="#contacto"
                        class="text-white font-bold text-lg font-nunito hover:text-gold-300 px-3 rounded py-1">Contacto</a>
                </div>
            </div>
        </header>
    </div>
    <div id="home"
        class="relative flex items-top justify-center bg-black dark:bg-gray-900 sm:items-center py-4 pt-16 ">
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
            <div class=" lg:pt-16 items-center">
                <div class="lg:mt-5 w-full bg-contain bg-no-repeat "
                    style="background-image: url({{ url('imgs/fondo_espiral.png') }}); 
                    background-repeat: no-repeat;
                    background-size: cover    ;
                    position: relative;">
                    <div id="" class=" lg:mt-10 w-full  dark:bg-gray-800 overflow-hidden items-center my-5">
                        <div
                            class=" leading-loose  text-4xl tracking-wider font-nunito font-medium text-gold-300 w-4/5 lg:mt-40 ml-16 ">
                            Somos un servicio de <strong class="font-nunito font-bold">Gestión inmobiliaria</strong> de
                            excelencia con propiedades y
                            oportunidades de inversión en <strong class="font-nunito font-bold">México y Estados
                                Unidos</strong>
                        </div>
                    </div>
                    <div id="pilares" class=" max-w-7xl mx-auto mt-40 ">
                        <x-title>
                            <x-slot name="flex">flex justify-end</x-slot>
                            <x-slot name="title">PILARES</x-slot>
                        </x-title>

                        <div class="w-full grid grid-cols-1 lg:grid-cols-2">
                            <div class=" pl-10 items-center w-full ">

                                <div
                                    class="border-b-4 text-gold-300 lg:text-black border-b-white lg:border-b-gold-300 w-1/2 font-nunito font-bold text-2xl">
                                    Atención Premium
                                </div>
                                <div class="flex items-center">
                                    <div class="w-28 mt-5">
                                        <img src="{{ url('imgs/atencion.png') }}" alt="" class="w-full">
                                    </div>
                                    <div class=" mt-5 pl-16 pr-10 font-nunito text-xl font-light w-2/3">
                                        Nos distinguimos por el compromiso y lealtada que tenemos con nuestros clientes.
                                    </div>
                                </div>
                            </div>
                            <div class="pl-10 lg:pl-0 items-center w-full ">

                                <div class="border-b-4 border-b-gold-300 w-1/3 font-nunito font-bold text-2xl mt-10">
                                    Experiencia
                                </div>
                                <div class="flex items-center">
                                    <div class="w-28 mt-5">
                                        <img src="{{ url('imgs/experiencia.png') }}" alt="" class=" w-full">
                                    </div>
                                    <div class=" mt-5 font-nunito text-xl font-light w-2/3 pr-24 pl-5">
                                        Para que adquiera las mejores propiedades en México y Estados unidos
                                    </div>
                                </div>
                            </div>

                            <div class=" pl-10 lg:pl-8 my-5 items-center w-full ">

                                <div class="border-b-4 border-b-gold-300 w-1/3 font-nunito font-bold text-2xl">
                                    Profesionalización
                                </div>
                                <div class="flex items-center">
                                    <div class="w-28 mt-5">
                                        <img src="{{ url('imgs/profecionalizacion.png') }}" alt=""
                                            class=" w-full">
                                    </div>
                                    <div class=" mt-5 font-nunito text-xl font-light w-2/3 pr-10 pl-5">
                                        Nuestros Agentes son profecionales y siempre están en constante capacitación.
                                    </div>
                                </div>
                            </div>

                            <div class="pl-10 lg:pl-0 pt-10    items-center w-full mb-5">

                                <div class="border-b-4 border-b-gold-300 w-1/3 font-nunito font-bold text-2xl">
                                    Transparencia
                                </div>
                                <div class="flex items-center">
                                    <div class="w-28 mt-5">
                                        <img src="{{ url('imgs/transparencia.png') }}" alt="" class=" w-full">
                                    </div>
                                    <div class=" mt-5 font-nunito text-xl font-light w-2/3 pr-24 pl-5 ">
                                        Por el alto grado de confianza que depositan nuestros clientes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="servicios" class="w-full ">
                    <div class="text-white w-full pt-10 pl-5"
                        style="background-image: url({{ url('imgs/fondo_integrales.png') }}); 
                    background-repeat: no-repeat;
                    background-size: cover;
                    position: relative;">
                        <x-title>
                            <x-slot name="flex"></x-slot>
                            <x-slot name="title">Servicios Integrales</x-slot>
                        </x-title>
                        <div class="grid grid-rows-6 grid-flow-row lg:grid-flow-col gap-2 items-center ">
                            <div class=" font-bold font-nunito text-2xl my-4">
                                <img src="{{ url('imgs/d1.png') }}" alt="" class="w-5 h-5 inline">
                                Coaching
                                inmobiliario
                            </div>
                            <div class=" font-bold font-nunito text-2xl my-4 justify-end ">
                                <img src="{{ url('imgs/d2.png') }}" alt=""
                                    class="w-5 h-5 inline justify-end"> Agentes
                                Internacionales
                            </div>
                            <div class=" font-bold font-nunito text-2xl my-4">
                                <img src="{{ url('imgs/d3.png') }}" alt="" class="w-5 h-5 inline">
                                Asesoría Financiera y de Crédito
                            </div>
                            <div class=" font-bold font-nunito text-2xl my-4">
                                <img src="{{ url('imgs/d1.png') }}" alt="" class="w-5 h-5 inline">
                                Ventas
                                y Atención al Cliente
                            </div>
                            <div class=" font-bold font-nunito text-2xl my-4">
                                <img src="{{ url('imgs/d2.png') }}" alt="" class="w-5 h-5 inline">
                                Asesoría Legal
                            </div>
                            <div class=" font-bold font-nunito text-2xl my-4">
                                <img src="{{ url('imgs/d3.png') }}" alt="" class="w-5 h-5 inline">
                                Marketing y Networking
                            </div>
                            <div class=" font-bold font-nunito text-2xl my-4">
                                <img src="{{ url('imgs/d1.png') }}" alt="" class="w-5 h-5 inline">
                                Registro de propiedad
                            </div>
                            <div class=" font-bold font-nunito text-2xl my-4">
                                <img src="{{ url('imgs/d2.png') }}" alt="" class="w-5 h-5 inline">
                                Inspecciones
                            </div>
                            <div class=" font-bold font-nunito text-2xl my-4">
                                <img src="{{ url('imgs/d3.png') }}" alt="" class="w-5 h-5 inline">
                                Visitas
                                a propiedades
                            </div>
                            <div class=" font-bold font-nunito text-2xl my-4">
                                <img src="{{ url('imgs/d1.png') }}" alt="" class="w-5 h-5 inline">
                                Asesoría Contable
                            </div>
                            <div class=" font-bold font-nunito text-2xl my-4">
                                <img src="{{ url('imgs/d2.png') }}" alt="" class="w-5 h-5 inline">
                                Captación de Propiedades
                            </div>
                        </div>
                        <div class="flex justify-end lg:mr-56 -pt-16">
                            <a href="#" class=" rounded-full bg-gold-300 hover:bg-gold-600 px-10 py-3">Ver
                                más</a>
                        </div>
                    </div>
                </div>
                <div id="propiedades"
                    class="w-full pt-10  first-letter:mt-8 bg-white dark:bg-gray-800 overflow-hidden">
                    <x-title>
                        <x-slot name="flex">flex justify-end</x-slot>
                        <x-slot name="title">propiedades</x-slot>
                    </x-title>

                    <div class="grid grid-cols-1 lg:grid-cols-3 mt-5">

                        <x-properties>
                            <x-slot name='fondo'>{{ url('imgs/casa1.jpeg') }}</x-slot>
                            <x-slot name='what'>Venta Houston</x-slot>
                            <x-slot name='amount'>$123,456,789 USD</x-slot>
                            <x-slot name='name'>Casa en Venta en Club de Golf</x-slot>
                            <x-slot name='where'>Houston, Texas</x-slot>
                            <x-slot name='country'>Estados Unidos</x-slot>
                            <x-slot name='medidas'>1246</x-slot>
                            <x-slot name='construccion'>720</x-slot>
                        </x-properties>
                        <x-properties>
                            <x-slot name='fondo'>{{ url('imgs/casa2.jpeg') }}</x-slot>
                            <x-slot name='what'>Venta Houston</x-slot>
                            <x-slot name='amount'>$123,456,789 USD</x-slot>
                            <x-slot name='name'>Casa en Venta en Club de Golf</x-slot>
                            <x-slot name='where'>Houston, Texas</x-slot>
                            <x-slot name='country'>Estados Unidos</x-slot>
                            <x-slot name='medidas'>1246</x-slot>
                            <x-slot name='construccion'>720</x-slot>
                        </x-properties>

                        <x-properties>
                            <x-slot name='fondo'>{{ url('imgs/casa3.jpeg') }}</x-slot>
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
                <div id="franquicias" class="text-white pl-5 pt-10"
                    style="background-image: url({{ url('imgs/fondo_franquicias.png') }}); 
                    background-repeat: no-repeat;
                    background-size: cover;
                    position: relative;">
                    <x-title>
                        <x-slot name="flex"></x-slot>
                        <x-slot name="title">franquicias</x-slot>
                    </x-title>
                    <div class="px-5 lg:px-24 mt-5 font-nunito text-justify ">
                        Gracias por su interés en crecer con John Woods. Nuestras franquicias aún no están disponibles,
                        pero le pedimos a los interesados llenar el siguiente formulario. Cuando estemos listos para
                        franquiciar, lo contactaremos.
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 text-white px-5 lg:px-24">
                        <form id="form_information">
                            @csrf
                            <x-content-form>
                                <x-slot name='label'>Nombre*</x-slot>
                                <x-slot name='input'>
                                    <x-input-text>
                                        <x-slot name='type'>text</x-slot>
                                        <x-slot name='name'>information_name</x-slot>
                                        <x-slot name='placeholder'>Nombre</x-slot>
                                    </x-input-text>
                                </x-slot>
                            </x-content-form>

                            <x-content-form>
                                <x-slot name='label'>Apellidos*</x-slot>
                                <x-slot name='input'>
                                    <x-input-text>
                                        <x-slot name='type'>text</x-slot>
                                        <x-slot name='name'>information_lastname</x-slot>
                                        <x-slot name='placeholder'>Apellidos</x-slot>
                                    </x-input-text>
                                </x-slot>
                            </x-content-form>

                            <x-content-form>
                                <x-slot name='label'>Correo Electrónico*</x-slot>
                                <x-slot name='input'>
                                    <x-input-text>
                                        <x-slot name='type'>email</x-slot>
                                        <x-slot name='name'>information_email</x-slot>
                                        <x-slot name='placeholder'></x-slot>
                                    </x-input-text>
                                </x-slot>
                            </x-content-form>

                            <x-content-form>
                                <x-slot name='label'>Teléfono*</x-slot>
                                <x-slot name='input'>
                                    <x-input-text>
                                        <x-slot name='type'>phone</x-slot>
                                        <x-slot name='name'>information_phone</x-slot>
                                        <x-slot name='placeholder'></x-slot>
                                    </x-input-text>
                                </x-slot>
                            </x-content-form>

                            <x-content-form>
                                <x-slot name='label'>País*</x-slot>
                                <x-slot name='input'>
                                    <x-input-text>
                                        <x-slot name='type'>text</x-slot>
                                        <x-slot name='name'>information_country</x-slot>
                                        <x-slot name='placeholder'></x-slot>
                                    </x-input-text>
                                </x-slot>
                            </x-content-form>

                            <x-content-form>
                                <x-slot name='label'>Ciudad*</x-slot>
                                <x-slot name='input'>
                                    <x-input-text>
                                        <x-slot name='type'>text</x-slot>
                                        <x-slot name='name'>information_city</x-slot>
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
                                        <x-slot name='name'>information_company</x-slot>
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
                                        <x-slot name='name'>information_comments</x-slot>
                                        <x-slot name='placeholder'></x-slot>
                                    </x-input-text>
                                </x-slot>
                            </x-content-form>


                    </div>
                    <div class="flex justify-end py-10 pr-10">
                        <span class=" rounded-full bg-gold-300 hover:bg-gold-600 px-10 py-3 cursor-pointer "
                            id="btn_send_information">
                            Enviar
                        </span>
                    </div>
                    </form>
                </div>
                <div id="who"
                    class="mt-8 w-full  first-letter:mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div id="contacto" class="w-full flex"
                        style="background-image: url({{ url('imgs/fondo_contacto.png') }}); 
                    background-repeat: no-repeat;
                    background-size: cover;
                    position: relative;">
                        <div class="hidden lg:block w-1/3 relative bg-contain"
                            style="background-image: url({{ url('imgs/fondo_contacto2.png') }}); 
                    background-repeat: no-repeat;
                    background-size: cover;
                    position: relative;">

                        </div>
                        <div class="w-full lg:w-2/3 pl-8">
                            <div class="grid grid-rows-2 text-center w-full ">
                                <div
                                    class=" border-b-4 border-b-black w-full font-dm uppercase text-4xl font-bold text-black ">
                                    Contacto
                                </div>
                                <div class=" fornt-nunito font-regular text-xl">Para obtener más información sobre
                                    nuestros servicios déjanos tus datos y un asesor se comunicará contigo.</div>
                            </div>
                            <div class="form">
                                <form id="form_contact">
                                    @csrf
                                    <div class="grid grid-cols-1 lg:grid-cols-2">
                                        <x-input-contact>
                                            <x-slot name="type">text</x-slot>
                                            <x-slot name="name">contact_name</x-slot>
                                            <x-slot name="placeholder">Nombre</x-slot>
                                        </x-input-contact>
                                        <x-input-contact>
                                            <x-slot name="type">text</x-slot>
                                            <x-slot name="name">contact_lastname</x-slot>
                                            <x-slot name="placeholder">Apellidos</x-slot>
                                        </x-input-contact>

                                        <x-input-contact>
                                            <x-slot name="type">email</x-slot>
                                            <x-slot name="name">contact_email</x-slot>
                                            <x-slot name="placeholder">Correo Electrónico</x-slot>
                                        </x-input-contact>

                                        <x-input-contact>
                                            <x-slot name="type">phone</x-slot>
                                            <x-slot name="name">contact_phone</x-slot>
                                            <x-slot name="placeholder">Teléfono a 10 digitos</x-slot>
                                        </x-input-contact>


                                    </div>
                                    <x-select-contact />
                                    <x-textarea-contact />
                            </div>
                            <div class="flex justify-start py-10 pr-10">
                                <span id="btn_send_contact"
                                    class=" rounded-full bg-gold-600 hover:bg-gold-300 px-10 py-3 cursor-pointer">
                                    Enviar
                                </span>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <div id="footer "
                class="mt-8 w-full grid grid-cols-1 md:grid-cols-2 text-white font-nunito font-light tracking-widest">
                <div>
                    <div class="mb-10 p-10">
                        <img src="{{ url('imgs/logo_footer.png') }}" alt="">
                    </div>
                    <div class=" flex flex-col items-center">
                        <div class="flex items-center">
                            <div class="w-1/4 lg:w-10 mx-2 cursor-pointer">
                                <img src="{{ url('imgs/ico_whats.png') }}" alt="" class="w-10 h-10 ">
                            </div>
                            <div class="w-1/4 lg:w-10 h-10 mx-2 cursor-pointer">
                                <img src="{{ url('imgs/ig_color.png') }}" alt="" class="w-10 h-10 ">
                            </div>
                            <div class="w-1/4 lg:w-10 h-10 mx-2 cursor-pointer">
                                <img src="{{ url('imgs/fb_color.png') }}" alt="" class="w-10 h-10 ">
                            </div>
                            <!--div class="w-10 h-10 mx-2 cursor-pointer">
                                    <img src="{{ url('imgs/tw_color.png') }}" alt="">
                                    </div-->
                            <div class="w-1/4 lg:w-10 h-10 mx-2 cursor-pointer">
                                <img src="{{ url('imgs/tt_color.png') }}" alt="" class="w-10 h-10 ">
                            </div>
                            <!--div class="w-10 h-10 mx-2 cursor-pointer">
                                    <img src="{{ url('imgs/yt_color.png') }}" alt="">
                                </div-->
                        </div>
                        <div class="ml-5 align-text-bottom content-center"> Contáctanos</div>
                    </div>
                    <div class="my-5 w-full text-center">
                        <div>Metepec, Estado de México</div>
                        <div>COPYRIGHT Todos los derechos Reservados</div>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col pl-36 tracking-widest uppercase font-extralight text-xl">
                        <div class="my-5">Nosotros</div>
                        <div class="my-5">Nuestro equipo</div>
                        <div class="my-5">Aviso de privacidad</div>
                    </div>
                    <div class="lg:flex lg:flex-inline lg:items-end">
                        <div class="w-2/3 mx-auto">
                            <img src="{{ url('imgs/security.png') }}" alt="w-56" class="mx-auto animate-pulse">
                        </div>
                        <div class="w-1/3 mx-auto">Certificado de Seguridad</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="notification_error" class="hidden relative z-50 bg-white w-full">
        <div id="notification_bg_error" class="fixed inset-0 h-40 flex bg-green z-50 border-t-8  border-t-red-500">
            <div id="alert_msg" class="m-auto bg-red  ">
            </div>
        </div>
    </div>
    @yield('jquery')
</body>
<script>
    $(document).ready(function() {
        $("#btn_send_contact").on('click', function() {
            if (validar_form_contact()) {
                $.ajax({
                    url: '{{ route('jw.contact') }}',
                    method: 'POST',
                    data: $("#form_contact").serialize(),
                    success: function(response) {
                        show_success(response.contact_name)
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        show_error(xhr.responseJSON.message)
                    }
                })
            } else
                show_error('El formulario de contacto no esta completo')

        })

        $("#btn_send_information").on('click', function() {
            if (validar_form_information()) {
                $.ajax({
                    url: '{{ route('jw.information') }}',
                    method: 'put',
                    data: $("#form_information").serialize(),
                    success: function(response) {
                        show_success(response.information_name)
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        show_error(xhr.responseJSON.message)
                    }
                })
            } else
                show_error('El formulario de franquicias no esta completo')

        })

        function validar_form_information() {
            ern = 0;

            if (!hay_error($("#information_name")))
                ern++

            if (!hay_error($("#information_lastname")))
                ern++

            if (!hay_error($("#information_email")))
                ern++

            if (!hay_error($("#information_phone")))
                ern++

            if (!hay_error($("#information_country")))
                ern++

            if (!hay_error($("#information_city")))
                ern++

            if (ern > 0) {
                show_error("Verifique los campos del formulario de franquicias", 'information');
                return false
            }

            return true
        }

        function validar_form_contact() {
            ern = 0;

            if (!hay_error($("#contact_name")))
                ern++

            if (!hay_error($("#contact_lastname")))
                ern++

            if (!hay_error($("#contact_email")))
                ern++

            if (!hay_error($("#contact_phone")))
                ern++

            if (!hay_error($("#contact_subject")))
                ern++

            if (!hay_error($("#contact_comments")))
                ern++

            if (ern > 0) {
                show_error("Verifique los campos del formulario de contacto", 'contact');
                return false
            }

            return true
        }

        function hay_error(input) {
            input.removeClass('border-b-red-300 validate border-b-green')

            if (input.val() == '') {
                input.addClass('border-b-red-300 validated')
                return false
            }

            input.addClass('border-b-green validated')
            return true;

        }

        function show_error(msg, content) {
            $("#alert_msg").html("<span class='text-red-500 font-semibolt'>" + msg + "</span>")
            $("#notification_bg_error").removeClass('bg-green border-t-green-500')
            $("#notification_bg_error").addClass('bg-red-100 border-t-red-500')
            $("#notification_error").show('bounce', 1000)

            setTimeout(() => {
                $("#notification_error").hide('bounce', 1000)
            }, "5000");

        }

        function show_success(msg) {
            msg = 'Gracias <span class="font-bold">' + msg +
                '</span> por tu información. En breve nos pondremos en contacto contigo'

            $("#alert_msg").html("<span class='text-green-500 font-semibolt'>" + msg + "</span>")
            $("#notification_bg_error").removeClass('bg-red-500 border-t-red-500')
            $("#notification_bg_error").addClass('bg-green-100 border-t-green-500')
            $("#notification_error").show('bounce', 1000)

            setTimeout(() => {
                $("#notification_error").hide('bounce', 1000)
            }, "5000");

            setTimeout(() => {
                $("#notification_error").hide('slow')
                resetform()
            }, "5000");
        }

        function resetform() {
            $("form select").each(function() {
                this.selectedIndex = 0
            });
            $("form input[type=text] , form input[type=email], form input[type=phone], form textarea").each(
                function() {
                    this.value = ''
                });
        }

    })
</script>

</html>
