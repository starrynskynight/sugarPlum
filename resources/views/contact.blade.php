@extends('master')
 
@section('titlePage', 'contact')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css')}}">
@endpush

@section('content')
    
          <div class="form-container">
            <div class="container">
                <div class="contactInfo">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5171.830003915755!2d112.62847678466139!3d-7.285476436601336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd2d22e54fa5%3A0xfd69b48e517afb66!2sCrumbee%20Cookies!5e0!3m2!1sid!2sid!4v1734151968339!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
               
            
                <form id="form" class="contactForm" onsubmit="return validateInputs()">
    <h2 class="text-center pt-0">Kontak Kami</h2>
    <div class="formBox">
        <!-- Nama -->
        <div class="inputBox w100">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" placeholder="Masukkan Nama Anda">
            <small class="error-text">Nama harus diisi.</small>
        </div>

        <!-- Email -->
        <div class="inputBox w50">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan Email Anda">
            <small class="error-text">Email harus diisi.</small>
        </div>
        <!-- Nomor Telepon -->
        <div class="inputBox w50">
            <label for="phone">Nomor Telepon</label>
            <input type="text" name="phone" id="phone" placeholder="Masukkan Nomer Telephone Anda">
            <small class="error-text">Nomer Telepon harus diisi.</small>
        </div>

        <div class="card-box">
                        
        <div class="dropdown-container">
    <button class="dropdown-toggle">Jenis Komentar</button>
    <div class="dropdown-menu">
        <input type="radio" name="komentar" id="menu-1" value="Kebersihan" checked>
        <label for="menu-1">Kebersihan</label>
        <input type="radio" name="komentar" id="menu-2" value="Pelayanan">
        <label for="menu-2">Pelayanan</label>
        <input type="radio" name="komentar" id="menu-3" value="Fasilitas">
        <label for="menu-3">Fasilitas</label>
        <input type="radio" name="komentar" id="menu-4" value="Kualitas Wahana">
        <label for="menu-4">Kualitas Wahana</label>
        <input type="radio" name="komentar" id="menu-5" value="Keamanan">
        <label for="menu-5">Keamanan</label>
        <input type="radio" name="komentar" id="menu-6" value="Lainnya">
        <label for="menu-6">Lainnya</label>
    </div>
    <div class="container2"></div>
</div>

<small class="error-text"></small>
                        </div>

        <!-- Pesan -->
        <div class="inputBox w100">
            <label for="messages">Pesan</label>
            <textarea id="messages" name="messages" placeholder="Tuliskan masukan/kritik Anda di sini..."></textarea>
            <small class="error-text">Pesan harus diisi.</small>
        </div>
        <!-- Tombol Submit -->
         <div class="float-right" style="transform: translateY(-20px);">
        <div class="inputBox w100 text-center items-center">
            <input type="submit" value="Kirim">
        </div>
        </div>
    </div>
</form>
                    </div>
                    </div>
        
        <div class="container2">
            <div class="place">
                <div class="place-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 24 24" style="fill: rgb(132 42 42);transform: ;msFilter:; border: 1px solid #842A2A; color: #842A2A; border-radius: 100%; padding: 15px;" class="mx-auto"><path d="M16.57 22a2 2 0 0 0 1.43-.59l2.71-2.71a1 1 0 0 0 0-1.41l-4-4a1 1 0 0 0-1.41 0l-1.6 1.59a7.55 7.55 0 0 1-3-1.59 7.62 7.62 0 0 1-1.59-3l1.59-1.6a1 1 0 0 0 0-1.41l-4-4a1 1 0 0 0-1.41 0L2.59 6A2 2 0 0 0 2 7.43 15.28 15.28 0 0 0 6.3 17.7 15.28 15.28 0 0 0 16.57 22zM6 5.41 8.59 8 7.3 9.29a1 1 0 0 0-.3.91 10.12 10.12 0 0 0 2.3 4.5 10.08 10.08 0 0 0 4.5 2.3 1 1 0 0 0 .91-.27L16 15.41 18.59 18l-2 2a13.28 13.28 0 0 1-8.87-3.71A13.28 13.28 0 0 1 4 7.41zM20 11h2a8.81 8.81 0 0 0-9-9v2a6.77 6.77 0 0 1 7 7z"></path><path d="M13 8c2.1 0 3 .9 3 3h2c0-3.22-1.78-5-5-5z"></path></svg>
                    <!-- <h1> <i class="fa-solid fa-phone" style="border: 1px solid #842A2A; color: #842A2A; width: 32px;" ></i></h1> -->
                    <p>Tiana: (0343) 613747<br>Budi: (3430) 747316</p>
                    
                </div>
                <div class="place-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 24 24" style="fill: rgb(132 42 42);transform: ;msFilter:; border: 1px solid #842A2A; color: #842A2A; border-radius: 100%; padding: 15px;" class="mx-auto"><path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path><path d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"></path></svg>
                    <p>Karanglo, Sukorejo, <br> Pasuruan, Jawa Timur <br> 67161</p>
                </div>
                <div class="place-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 24 24" style="fill: rgb(132 42 42);transform: ;msFilter:; border: 1px solid #842A2A; color: #842A2A; border-radius: 100%; padding: 15px;" class="mx-auto"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M13 7h-2v6h6v-2h-4z"></path></svg>
                    <p>Sabtu - Kamis: 08.00 - 15.00<br>Jumat: Tutup</p>
                </div>
                <div class="place-item">
                    <div class="outlet">
                    <img src="{{ asset('img/outlet.jpg') }}" alt="Outlet Image">
                    </div>
                </div>
            </div>
        </div>

        
        
        <script>
   const setError = (input, message) => {
    const inputBox = input.parentElement;
    const errorText = inputBox.querySelector('.error-text');
    errorText.innerText = message;
    inputBox.classList.add('error');
};

const setSuccess = (input) => {
    const inputBox = input.parentElement;
    const errorText = inputBox.querySelector('.error-text');
    errorText.innerText = '';
    inputBox.classList.remove('error');
};


    // Fungsi untuk validasi email
    const isValidEmail = (email) => {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    };

    // Fungsi untuk validasi input
    const validateInputs = (event) => {
    event.preventDefault(); // Mencegah form terkirim
    
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const messages = document.getElementById('messages');

    let isValid = true;

    // Validasi Nama
    if (name.value.trim() === '') {
        setError(name, 'Nama harus diisi.');
        isValid = false;
    } else if (/([0-9])/.test(name.value.trim())) {
        setError(name, 'Nama harus berupa huruf.');
        isValid = false;
    } else {
        setSuccess(name);
    }

    // Validasi Email
    if (email.value.trim() === '') {
        setError(email, 'Email harus diisi.');
        isValid = false;
    } else if (!isValidEmail(email.value.trim())) {
        setError(email, 'Masukkan email yang valid.');
        isValid = false;
    } else {
        setSuccess(email);
    }

    // Validasi Nomor Telepon
    if (phone.value.trim() === '') {
        setError(phone, 'Nomor telepon harus diisi.');
        isValid = false;
    } else if (!/^\d+$/.test(phone.value.trim()) || phone.value.trim().length < 8) {
        setError(phone, 'Masukkan nomor telepon yang valid (minimal 8 digit).');
        isValid = false;
    } else {
        setSuccess(phone);
    }

    // Validasi Jenis Komentar
    const komentarInputs = document.querySelectorAll('input[name="komentar"]');
    let komentarChecked = false;

    for (const input of komentarInputs) {
        if (input.checked) {
            komentarChecked = true;
            break;
        }
    }

    if (!komentarChecked) {
        const dropdownContainer = document.querySelector('.dropdown-container');
        setError(dropdownContainer, 'Jenis Komentar harus dipilih!');
        isValid = false;
    } else {
        const dropdownContainer = document.querySelector('.dropdown-container');
        setSuccess(dropdownContainer);
    }

    // Validasi Pesan
    if (messages.value.trim() === '') {
        setError(messages, 'Pesan harus diisi.');
        isValid = false;
    } else {
        setSuccess(messages);
    }

    return isValid; // Return true jika semua validasi berhasil
};

// Tambahkan event listener ke form
document.getElementById('form').addEventListener('submit', function (event) {
    if (!validateInputs(event)) {
        return false; // Jika validasi gagal, hentikan submit
    }
});

</script>
    
@endsection