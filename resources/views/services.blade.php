@extends('master')
 
@section('titlePage', 'Services')

@section('content')

    <main  class="flex flex-col justify-center items-center w-full min-h-screen" style="margin-right: 20%; background-color: #F6B0BB">
    <section class="mx-24">
        <div class="grid grid-cols-2 gap-4 h-screen w-full">
            <div class="flex justify-center items-center h-full">
                <img src="{{ asset('img/outlet-services.png') }}" class="block ml-6" style="max-width: 90%; max-height: 100%;" alt="">
            </div>

            <div class="teks flex justify-center items-center">
                <div class="apa">
                <h1 class="text-6xl text-white pb-6">Sugar Plum<br> Beyond Services</h1>
                <hr class="w-80">
                <p class="text-white pt-6">Sugar Plum adalah toko kue modern yang menyediakan berbagai macam kue inovatif sesuai tren terkini. Selain menjual kue, kami juga menawarkan layanan event catering untuk berbagai acara, delivery ke lokasi pelanggan, dan internal delivery untuk kebutuhan khusus perusahaan. Dengan kualitas terbaik dan layanan ramah, kami siap melengkapi momen spesial Anda.</p>
                </div>
            </div>
        </div>

        <div class="container2 rounded-3xl mt-24 grid grid-cols-2 gap-9 p-9 order-last" style="background-color: #FFC6C6;">
            
            <div class="flex justify-center items-center h-full">
                <img src="{{asset('img/catering_services.jpg')}}" class="block ml-6" style="max-width: 90%; max-height: 100%;" alt="">
            </div>


            <div class="teks flex justify-center items-center order-first ml-6">
                <div class="services-text">
                <h1 class="text-3xl text-white">Event Catering</h1>
                <hr class="w-64" style="border-color: #842A2A; margin-top: 30px;">
                <p class="pt-6" style="color: #842A2A;"><b>Event Catering</b> dari Sugar Plum menawarkan layanan penyediaan hidangan yang elegan dan lezat untuk berbagai acara spesial Anda. Kami menghadirkan pilihan menu yang beragam, mulai dari kue hingga hidangan penutup, yang dirancang untuk menciptakan pengalaman tak terlupakan bagi tamu Anda. Dengan perhatian terhadap detail dan kualitas terbaik, kami siap membantu menyempurnakan momen istimewa Anda.</p>
                </div>
            </div>
        </div>


        <div class="container3 rounded-3xl mt-24 grid grid-cols-2 gap-9 p-9 order-first" style="background-color: #FFC6C6;">
            
        <div class="flex justify-center items-center h-full">
                <img src="{{asset('img/delivery_service.jpg')}}" class="block ml-6" style="max-width: 90%; max-height: 100%;" alt="">
            </div>


            <div class="teks flex justify-center items-center order-last ml-6">
                <div class="services-text">
                <h1 class="text-3xl text-white">Delivery</h1>
                <hr class="w-64" style="border-color: #842A2A; margin-top: 30px;">
                <p class="pt-6" style="color: #842A2A;"><b>Event Catering</b> dari Sugar Plum menawarkan layanan penyediaan hidangan yang elegan dan lezat untuk berbagai acara spesial Anda. Kami menghadirkan pilihan menu yang beragam, mulai dari kue hingga hidangan penutup, yang dirancang untuk menciptakan pengalaman tak terlupakan bagi tamu Anda. Dengan perhatian terhadap detail dan kualitas terbaik, kami siap membantu menyempurnakan momen istimewa Anda.</p>
                </div>
            </div>
        </div>

        <div class="container4 rounded-3xl mt-24 grid grid-cols-2 gap-9 p-9 order-last" style="background-color: #FFC6C6;">
            
        <div class="flex justify-center items-center h-full">
                <img src="{{asset('img/internal_service.jpg')}}" class="block ml-6" style="max-width: 90%; max-height: 100%;" alt="">
            </div>


            <div class="teks flex justify-center items-center order-first ml-6">
                <div class="services-text">
                <h1 class="text-3xl text-white">Event Catering</h1>
                <hr class="w-64" style="border-color: #842A2A; margin-top: 30px;">
                <p class="pt-6" style="color: #842A2A;"><b>Event Catering</b> dari Sugar Plum menawarkan layanan penyediaan hidangan yang elegan dan lezat untuk berbagai acara spesial Anda. Kami menghadirkan pilihan menu yang beragam, mulai dari kue hingga hidangan penutup, yang dirancang untuk menciptakan pengalaman tak terlupakan bagi tamu Anda. Dengan perhatian terhadap detail dan kualitas terbaik, kami siap membantu menyempurnakan momen istimewa Anda.</p>
                </div>
            </div>
        </div>
 
    </section>
    </main>

@endsection