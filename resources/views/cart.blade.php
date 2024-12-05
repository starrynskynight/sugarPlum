@extends('master')

@section('titlePage', 'Cart')

@push('styles')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('css/cart.css')}}" rel="stylesheet">

@endpush

@section('content')



<div class="wrapper">
    <h1>Shopping Cart</h1>
    <div class="project">
    @if(isset($message))
                <p>{{ $message }}</p>
            @else
        <div class="shop">
            @foreach ($cartItems as $item)
            <div class="box">
                <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}">
                <div class="content">
                    <h3>{{ $item->product->name }}</h3>
                    <h4>Price: Rp {{ number_format($item->product->price, 0, ',', '.') }}</h4>
                    <p class="unit">
                        Quantity:
                        <button class="btn-minus" onclick="location.href='{{ route('cart.update', ['id' => $item->id, 'quantity' => -1]) }}'">-</button>
                        <span>{{ $item->quantity }}</span>
                        <button class="btn-plus" onclick="location.href='{{ route('cart.update', ['id' => $item->id, 'quantity' => 1]) }}'">+</button>
                    </p>
                    <p class="btn-area">
                        <button onclick="location.href='{{ route('cart.remove', $item->id) }}'">Remove</button>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        <div class="right-bar">
            <p><span>Subtotal</span> <span>Rp {{ number_format($subtotal ?? 0, 0, ',', '.') }}</span></p>
            <hr>
            <p><span>Tax (5%)</span> <span>Rp {{ number_format($tax ?? 0, 0, ',', '.') }}</span></p>
            <hr>
            <p><span>Shipping</span> <span>Rp {{ number_format($shipping ?? 0, 0, ',', '.') }}</span></p>
            <hr>
            <p><span>Total</span> <span>Rp {{ number_format($total ?? 0, 0, ',', '.') }}</span></p>
            <a href="javascript:void(0)" class="checkout" id="checkout-button">
                <i class="fa fa-shopping-cart"></i> Checkout
            </a>
        </div>
    </div>
</div>

<!-- Modal untuk notifikasi checkout -->
<div id="checkout-notification" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #842A2A; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); text-align: center;">
    <p>Pesanan sedang diproses...</p>
</div>


<!-- Tambahkan CSS untuk modal -->
<style>
    #checkout-notification {
    background-color: #842A2A; /* Hijau untuk sukses */
    color: #FFF6DF;
    padding: 15px;
    border-radius: 8px;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    z-index: 9999;
    width: 300px;
    height: 80px;
    line-height: 50px;
}

</style>

<script src="{{ asset('js/cart.js') }}"></script>

@endsection
