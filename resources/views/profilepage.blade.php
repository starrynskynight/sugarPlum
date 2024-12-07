@extends('master')

@section('titlePage', 'Profile')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')
<div class="relative w-full overflow-hidden">
  <img class="block w-full object-cover " src="{{ asset('img/pastry-baker.jpg')}}">
</div>

  <div class="container2 rounded-3xl mt-24 grid grid-cols-2 gap-9 p-9 order-last mx-10" style="background-color: #FFC6C6;">
            
    <div class="flex justify-center items-center h-full">
      <div class="services-text">
        <h1 class="text-5xl text-white">VISI</h1>
        <hr class="w-40" style="border-color: #842A2A; margin-top: 30px;">
        <p class="pt-6 text-xl" style="color: #842A2A;">Menjadi bakery yang dikenal dan dicintai oleh konsumen karena menghadirkan kebahagiaan dalam setiap gigitan, cookies berkualitas tinggi, serta berkomitmen untuk berinovasi dan menjaga kepuasan pelanggan di setiap kesempatan.</p>
      </div>
    </div>

    <div class="teks flex justify-center items-center order-first ">
      <img src="{{asset('img/bake-roti.png')}}" class="block rounded-xl" style="max-width: 90%; max-height: 100%;" alt="">
    </div>
  </div>

<div class="container-profile">
  <div class="card card1">
    <div class="card-content">
      <div class="number">01</div>
      <div class="title">Menggunakan Bahan Bahan Lokal</div>
      <div class="description">
      Mendukung ekonomi lokal dengan menggunakan bahan baku dari petani dan produsen setempat, untuk menjamin kualitas terbaik dan keberlanjutan produk.
      </div>
      <button class="toggle-btn">Read More</button>
    </div>
  </div>
  <div class="card card2">
    <div class="card-content">
      <div class="number">02</div>
      <div class="title">Mengurangi Dampak Lingkungan</div>
      <div class="description">
      Berkomitmen mengurangi jejak karbon melalui kemasan ramah lingkungan, praktik produksi berkelanjutan, dan pengelolaan limbah yang bertanggung jawab.
      </div>
      <button class="toggle-btn">Read More</button>
    </div>
  </div>
  <div class="card card3">
    <div class="card-content">
      <div class="number">03</div>
      <div class="title">Memperluas Jangkauan Pasar</div>
      <div class="description">
      Berfokus pada ekspansi bisnis melalui strategi pemasaran yang efektif dan inovatif, baik secara online maupun offline, untuk menjangkau lebih banyak konsumen di berbagai wilayah.
      </div>
      <button class="toggle-btn">Read More</button>
    </div>
  </div>
  <div class="card card4">
    <div class="card-content">
      <div class="number">04</div>
      <div class="title">Membangun Hubungan Erat Dengan Pelanggan</div>
      <div class="description">
      Menciptakan hubungan jangka panjang dengan pelanggan melalui program loyalitas, komunikasi yang personal, dan pemahaman mendalam terhadap kebutuhan serta preferensi mereka.
      </div>
      <button class="toggle-btn">Read More</button>
    </div>
  </div>
</div>



<script>
    // Tangkap semua card
document.querySelectorAll('.card').forEach((card) => {
  const btn = card.querySelector('.toggle-btn');
  btn.addEventListener('click', () => {
    // Tambah atau hapus class "active" untuk card saat tombol diklik
    card.classList.toggle('active');
    // Ganti teks tombol Read More/Read Less
    btn.textContent = card.classList.contains('active') ? 'Read Less' : 'Read More';
  });
});

</script>

@endsection