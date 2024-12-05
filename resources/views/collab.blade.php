@extends('master')
 
@section('titlePage', 'Collaboration')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/collab.css') }}">
@endpush

@section('content')

  
<div class="image-container">
  <img src="{{ asset('img/itzy_collab.jpeg')}}">
  <div class="text">
    <div class="teks-ccp"> Collaboration </div>
  </div>
</div>

<div class="section-special">
  <h1 class="main-title">SPECIAL 5TH WITH ITZY</h1>
  <div class="image-special">
    <img src="{{ asset('img/itzy_special.jpeg')}}" alt="ITZY celebration">
    <div class="text-overlay">
      <h2>DISCOVER OUR EXCLUSIVE COLLECTION</h2>
      <p>
        Gain access to special products created through collaborations with ITZY. 
        Available for a limited time only. Don’t miss the chance to own these unique pieces!
      </p>
    </div>
  </div>
</div>

<h1 class="main-title">ITZY FAVOURITES</h1>

<div class="container">
    <div class="card" onclick="toggleCard(this)">
      <div class="front">
        <h3>Read Message</h3>
        <div class="image-idol">
        <img src="{{ asset('img/lia.jpg')}}" alt="">
        </div>
      </div>
      <div class="back">
        <h3>SWEET MESSAGE FROM LIA</h3>
        <div class="card-contain">
          <div class="image-idol">
          <img src="{{ asset('img/lia.jpg')}}" alt="">
          </div>
          <div class="message">
          <p>"Sugarplum’s Unicorn Cupcakes are pure magic! 🦄🧁They’re colorful, fluffy, and the frosting is so sweet and dreamy. It’s like a little bite of happiness!"</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card" onclick="toggleCard(this)">
      <div class="front">
        <h3>READ MESSAGE</h3>
        <div class="image-idol">
        <img src="{{ asset('img/Yuna.jpg')}}" alt="">
        </div>
      </div>
      <div class="back">
        <h3>SWEET MESSAGE FROM YUNA</h3>
        <div class="card-contain">
          <div class="image-idol">
          <img src="{{ asset('img/Yuna.jpg')}}" alt="">
          </div>
          <div class="message">
          <p>"Sugarplum’s Vanilla Donuts are my absolute favorite!  They’re soft, fluffy, and that sweet vanilla glaze is just perfect. It’s the best treat for any day!”</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card" onclick="toggleCard(this)">
      <div class="front">
        <h3>Read Message</h3>
        <div class="image-idol">
        <img src="{{ asset('img/chaeryong.jpg')}}" alt="">
        </div>
      </div>
      <div class="back">
        <h3>SWEET MESSAGE FROM CHAERYONG</h3>
        <div class="card-contain">
          <div class="image-idol">
          <img src="{{ asset('img/chaeryong.jpg')}}" alt="">
          </div>
          <div class="message">
          <p>"You have to try Sugarplum’s Mini Bubblegum Cake!  It’s so fun and colorful, with a sweet bubblegum flavor that’s just irresistible. Every bite feels like a party!"</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card" onclick="toggleCard(this)">
      <div class="front">
        <h3>Read Message</h3>
        <div class="image-idol">
        <img src="{{ asset('img/Yeji.jpg')}}" alt="">
        </div>
      </div>
      <div class="back">
        <h3>SWEET MESSAGE FROM YEJI</h3>
        <div class="card-contain">
          <div class="image-idol">
          <img src="{{ asset('img/Yeji.jpg')}}" alt="">
          </div>
          <div class="message">
          <p>"Sugarplum’s Soft Chewy Chocolate Cookies are a dream! 🍪 They’re rich, gooey, and full of melty chocolate goodness. Once you start, you can’t stop!"</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card" onclick="toggleCard(this)">
      <div class="front">
        <h3>Read Message</h3>
        <div class="image-idol">
        <img src="{{ asset('img/ryujin.jpg')}}" alt="">
        </div>
      </div>
      <div class="back">
        <h3>SWEET MESSAGE FROM RYUJIN</h3>
        <div class="card-contain">
          <div class="image-idol">
          <img src="{{ asset('img/ryujin.jpg')}}" alt="">
          </div>
          <div class="message">
          <p>"Sugarplum’s Tiramisu is amazing! 🍮 It’s light, creamy, and has the perfect coffee flavor. Every bite feels so indulgent. You’ve got to try it!”</p>
          </div>
        </div>
      </div>
    </div>
    

  <script src="{{ asset('js/collab.js')}}"></script>

@endsection