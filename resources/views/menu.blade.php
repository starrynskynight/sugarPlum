@extends('master')
 
@section('titlePage', 'Menu')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('Owlcarousel/dist/assets/owl.theme.default.css') }}">
<link rel="stylesheet" href="{{ asset('Owlcarousel/dist/assets/owl.carousel.css') }}">
@endpush

@section('content')
<style>
    .content {
        margin-top: 120px;
    }
</style>
<div class="sidebar-menu">
    <div class="logo-menu">
        <div class="title-menu">
            <div class="menu-name">Menu</div>
        </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="navlist-menu">
        <li>
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li>
        <li>
            <a href="#bread">
            <img src="{{asset('img/bread.png')}}" alt="">
            <span class="links-name">Bread</span>
            </a>
            <span class="tooltip">Bread</span>
        </li>
        <li>
            <a href="#danish">
            <img src="{{asset('img/croissant.png')}}" alt="">
            <span class="links-name">Danish</span>
            </a>
            <span class="tooltip">Danish</span>
        </li>
        <li>
            <a href="#cookie">
            <img src="{{asset('img/cookies.png')}}" alt="">
            <span class="links-name">Cookie</span>
            </a>
            <span class="tooltip">Cookie</span>
        </li>
        <li>
            <a href="#cupcake">
                <img src="{{asset('img/cupcake.png')}}" alt="">
            <span class="links-name">Cupcake</span>
            </a>
            <span class="tooltip">Cupcake</span>
        </li>
        <li>
            <a href="#donut">
            <img src="{{asset('img/donut.png')}}" alt="">
            <span class="links-name">Donut</span>
            </a>
            <span class="tooltip">Donut</span>
        </li>
        <li>
            <a href="#slice cake">
            <img src="{{asset('img/slice_cake.png')}}" alt="">
            <span class="links-name">Slice Cake</span>
            </a>
            <span class="tooltip">Slice Cake</span>
        </li>
        <li>
            <a href="#whole cake">
            <img src="{{asset('img/whole_cake.png')}}" alt="">
            <span class="links-name">Whole Cake</span>
            </a>
            <span class="tooltip">Whole Cake</span>
        </li>
    </ul>
</div>

<div class="menu-content">
    <h1>OUR SPECIAL MENU FOR TODAY</h1>
    <div class="owl-carousel owl-theme container-menu">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset ('img/matcha_mochi.png')}}" alt="">
                </div>
                <div class="card-body">
                    <h3>Mochi Crisp</h3>
                    <div class="container-card">
                    <h2>Rp26.000</h2>
                    <div class="plus">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset ('img/matcha_mochi.png')}}" alt="">
                </div>
                <div class="card-body">
                    <h3>Mochi Crisp</h3>
                    <div class="container-card">
                    <h2>Rp26.000</h2>
                    <div class="plus">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset ('img/matcha_mochi.png')}}" alt="">
                </div>
                <div class="card-body">
                    <h3>Mochi Crisp</h3>
                    <div class="container-card">
                    <h2>Rp26.000</h2>
                    <div class="plus">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset ('img/matcha_mochi.png')}}" alt="">
                </div>
                <div class="card-body">
                    <h3>Mochi Crisp</h3>
                    <div class="container-card">
                    <h2>Rp26.000</h2>
                    <div class="plus">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset ('img/matcha_mochi.png')}}" alt="">
                </div>
                <div class="card-body">
                    <h3>Mochi Crisp</h3>
                    <div class="container-card">
                    <h2>Rp26.000</h2>
                    <div class="plus">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @foreach($categories as $category)
        <div class="{{ strtolower($category->name) }}-container" id="{{ strtolower($category->name) }}">
            <h1>{{ $category->name }}</h1>
            <div class="owl-carousel owl-theme container-menu">
                @foreach($category->products as $product)
                    <div class="card">
                        <div class="card-image">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        </div>
                        <div class="card-body">
                            <h3>{{ $product->name }}</h3>
                            <div class="container-card">
                                <h2>Rp{{ number_format($product->price, 0, ',', '.') }}</h2>
                                <div class="plus">
                                    <button class="add-to-cart" data-id="{{ $product->id }}">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

<div id="toast" style="display:none; position: fixed; top: 20px; right: 20px; background: green; color: white; padding: 10px; border-radius: 5px; z-index: 1000;">
    Produk telah ditambahkan ke keranjang!
</div>



<style>
    .notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    z-index: 1000;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    animation: fade-in-out 3s ease-in-out;
}

@keyframes fade-in-out {
    0%, 100% {
        opacity: 0;
        transform: translateY(-10px);
    }
    10%, 90% {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>

<script src="{{ asset('js/cart.js') }}"></script>



<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar-menu");
    let search = document.querySelector(".bx-search");

    btn.onclick = function() {
        sidebar.classList.toggle('active');
    }
    search.onclick = function() {
        sidebar.classList.toggle('active');
    }
</script>
<script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('Owlcarousel/dist/owl.carousel.js')}}"></script>
<script>
    $(".owl-carousel").owlCarousel({
        center: true,
        loop: true,
        dots: true,
        nav: true,
        autoplay: true,
        smartSpeed: 1000,
        responsiveClass: true,   
        responsive: {
            0: {
                items: 1,
            },
            1000: {
                items: 3,
            }
        }
    })
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.querySelector('.sidebar-menu');
    const footer = document.querySelector('footer');

    function adjustSidebar() {
        const footerRect = footer.getBoundingClientRect();
        const sidebarHeight = sidebar.offsetHeight;

        // Jika sidebar lebih tinggi dari footer, atur posisi sidebar
        if (footerRect.top < sidebarHeight) {
            sidebar.style.position = 'absolute';
            sidebar.style.top = `${window.scrollY + footerRect.top - sidebarHeight}px`;
        } else {
            sidebar.style.position = 'fixed';
            sidebar.style.top = '0';
        }
    }

    window.addEventListener('scroll', adjustSidebar);
    window.addEventListener('resize', adjustSidebar); // Untuk menangani perubahan ukuran jendela
});
</script>

@endsection