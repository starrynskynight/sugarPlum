@extends('master')

@section('titlePage', 'Profile')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')

<div class="container-profile">
  <div class="card">
    <div class="card-content">
      <div class="number">01</div>
      <div class="title">Menggunakan Bahan Bahan Lokal</div>
      <div class="description">
      Mendukung ekonomi lokal dengan menggunakan bahan baku dari petani dan produsen setempat, untuk menjamin kualitas terbaik dan keberlanjutan produk.
      </div>
      <button class="toggle-btn">Read More</button>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="number">02</div>
      <div class="title">Mengurangi Dampak Lingkungan</div>
      <div class="description">
      Berkomitmen mengurangi jejak karbon melalui kemasan ramah lingkungan, praktik produksi berkelanjutan, dan pengelolaan limbah yang bertanggung jawab.
      </div>
      <button class="toggle-btn">Read More</button>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="number">03</div>
      <div class="title">Memperluas Jangkauan Pasar</div>
      <div class="description">
      Berfokus pada ekspansi bisnis melalui strategi pemasaran yang efektif dan inovatif, baik secara online maupun offline, untuk menjangkau lebih banyak konsumen di berbagai wilayah.
      </div>
      <button class="toggle-btn">Read More</button>
    </div>
  </div>
  <div class="card">
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