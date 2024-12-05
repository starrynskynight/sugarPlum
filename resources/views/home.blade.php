@extends('master')
 
@section('titlePage', 'Home')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ asset('Owlcarousel/assets/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ asset('Owlcarousel/assets/owl.theme.default.min.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tienne:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Tienne:wght@400;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
@endpush

@section('content')

<div class="isi-home">

<div class="owl-carousel owl-theme">
        <div class="wrapper">
            <div class="item1 grid grid-cols-3  w-full h-screen">
                
                    <div class="text ml-20 flex-[1] flex flex-col justify-center items-start ">
                    <p class="text-3xl mb-6 ">Turn Everyday Moments into Sweet Joy</p>
                    <a href="menu" class="text-white bg-amber-100 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900" type="button">Check it out!</a>
                </div>
                <div class="gambar flex-[2] flex flex-col justify-center items-center mt-9">
                    <div class="donut-carousel owl-carousel owl-theme">
                        <div class="donut-item">
                            <div class="nama">
                                <p class="kiri overflow-visible text-9xl text-center text-transparent translate-y-5 z-10" stroke="red">Donut</p>
                                </div>
                            <img src="{{ asset('img/donutg.png')}}" class="z-0 flex justify-center items-center" style="width: 70%;" alt="">
                        
                        </div>
                        <div class="donut-item">
                            <div class="nama">
                            <p class="kiri overflow-visible text-9xl text-center text-transparent translate-y-5 z-10" stroke="red">Cake</p>
                            </div>
                            <img src="{{ asset('img/cakeg.png')}}" class="z-0" style="width: 70%;" alt="">
                        </div>
                        <div class="donut-item">
                            <div class="nama">
                                <p class="kiri overflow-visible text-9xl text-center text-transparent translate-y-5 z-10 mb-6" stroke="red">Cookie</p>
                                </div>
                            <img src="{{ asset('img/cookieg.png')}}" class="z-0" style="width: 70%;" alt="">
                        </div>
                    </div>
                </div>
                <div class="poster flex-[1] flex justify-center items-center">
                    <img src="{{ asset('img/promo.png')}}" alt="" class="w-1/2 border-8 rounded-xl border-amber-100" style="border-radius: 20px;">
                </div>
            </div>
           
        </div>
  

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script>
        
    var owl = $('.owl-carousel');

    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        animateOut: 'fadeOut',
        autoplay: true,
       
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
    });

   
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[2000])
        });
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        });
        
        

    </script>

<div class="owl-carousel owl-theme mt-10">
<div class="item relative">
  <div class="background w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/bahan.jpg') }}');">
    <div class="absolute card-1 top-1/4 right-8 bg-red-600 bg-opacity-70 text-white p-6 rounded-md w-1/3">
      <h2 class="text-2xl font-bold mb-2">FRESH</h2>
      <hr class="w-24 mx-auto border-t-2 border-white">
      <p class="mt-4 text-sm">
      Kami menjaga kelezatan kue dengan menggunakan bahan segar seperti telur, tepung premium, dan mentega pilihan yang diolah dengan teliti di dapur kami yang bersih. Hasilnya, kue kami selalu segar, lezat, dan menggugah selera di setiap gigitan, memberikan rasa yang otentik dan berkualitas sepanjang hari.
      </p>
      <p class="mt-4 text-center text-sm">1/4</p>
    </div>
  </div>
</div>



  <!-- Tambahkan slide lainnya -->
  <div class="item relative">
  <div class="background w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/kualitas.jpg') }}');">
    <div class="absolute card-1 top-1/4 right-8 bg-red-600 bg-opacity-70 text-white p-6 rounded-md w-1/3">
      <h2 class="text-2xl font-bold mb-2">HIGH QUALITY</h2>
      <hr class="w-24 mx-auto border-t-2 border-white">
      <p class="mt-4 text-sm">
        Kami selalu memprioritaskan kualitas dalam setiap produk yang kami hasilkan. Mulai dari pemilihan bahan baku hingga proses pengolahan, semua dilakukan dengan standar yang ketat. Kue-kue kami dipanggang dengan penuh cinta, sehingga setiap produk yang sampai di tangan Anda memiliki rasa yang lezat, tekstur yang sempurna, dan tampilan yang memikat.
      </p>
      <p class="mt-4 text-center text-sm">2/4</p>
    </div>
  </div>
</div>

<div class="item relative">
  <div class="background w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/bakery1.png') }}');">
    <div class="absolute card-1 top-1/4 right-8 bg-red-600 bg-opacity-70 text-white p-6 rounded-md w-1/3">
      <h2 class="text-2xl font-bold mb-2">HYGIENIC</h2>
      <hr class="w-24 mx-auto border-t-2 border-white">
      <p class="mt-4 text-sm">
      Kebersihan tidak hanya menjaga dapur tetap rapi, tetapi mencakup seluruh proses produksi. Kami menerapkan standar kebersihan ketat dari penyimpanan bahan baku hingga pengemasan. Kami percaya bahwa kebersihan yang terjaga akan menghasilkan kue-kue yang tidak hanya lezat, tetapi juga sehat dan aman untuk dinikmati oleh Customer.
      </p>
      <p class="mt-4 text-center text-sm">3/4</p>
    </div>
  </div>
</div>

<div class="item relative">
  <div class="background w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/macammacam.jpeg') }}');">
    <div class="absolute card-1 top-1/4 right-8 bg-red-600 bg-opacity-70 text-white p-6 rounded-md w-1/3">
      <h2 class="text-2xl font-bold mb-2">FLAVOR VARIETY</h2>
      <hr class="w-24 mx-auto border-t-2 border-white">
      <p class="mt-4 text-sm">
      Kami menghadirkan beragam pilihan rasa, dari vanila dan cokelat klasik hingga matcha, red velvet, dan salted caramel. Dengan proporsi bahan yang tepat dan kreativitas, kami menghadirkan pengalaman unik di setiap gigitan. Kami terus berinovasi mengikuti tren kuliner agar Anda selalu menemukan kue yang sesuai dengan selera dan suasana hati.
      </p>
      <p class="mt-4 text-center text-sm">4/4</p>
    </div>
  </div>
</div>

  <!-- Tambahkan slide lainnya -->
</div>



<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });
    });
</script>
@endsection