


// Fungsi untuk menampilkan notifikasi
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.textContent = message;
    notification.classList.add('notification', type); // Tipe success atau error
    document.body.appendChild(notification);
    
    // Menghilangkan notifikasi setelah beberapa detik
    setTimeout(() => notification.classList.add('fade-out'), 2000);
    setTimeout(() => notification.remove(), 3000);
}

// Fungsi untuk menambahkan produk ke keranjang
function addToCart(productId) {
    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ product_id: productId }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            updateCartCount(); // Update jumlah produk di keranjang
            showNotification('Produk berhasil ditambahkan ke keranjang!'); // Tampilkan notifikasi
        } else {
            showNotification('Terjadi kesalahan. Coba lagi nanti.', 'error'); // Tampilkan notifikasi error
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Terjadi kesalahan. Coba lagi nanti.', 'error');
    });
}

// Update jumlah produk di keranjang
function updateCartCount() {
    console.log('Fetching cart count...');
    fetch('/cart-count')
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Cart count response:', data);
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.textContent = data.count || 0;
            }
        })
        .catch(error => {
            console.error('Error fetching cart count:', error);
        });
}

function checkout() {
    fetch('/checkout', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showNotification(data.message); // Tampilkan notifikasi
            setTimeout(() => window.location.reload(), 3000); // Reload halaman setelah notifikasi
        } else {
            showNotification('Checkout gagal.', 'error'); // Notifikasi error
        }
    })
    .catch(error => {
        console.error('Error during checkout:', error);
        showNotification('Terjadi kesalahan. Coba lagi nanti.', 'error');
    });
}



// Tambahkan event listener ke tombol checkout
document.addEventListener('DOMContentLoaded', () => {
    const checkoutButton = document.getElementById('checkout-button');
    if (checkoutButton) {
        checkoutButton.addEventListener('click', checkout);
    } else {
        console.error('Checkout button tidak ditemukan di DOM!');
    }
});


// Menambahkan event listener pada tombol "Add to Cart"
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function () {
        const productId = this.dataset.id; // Ambil ID produk dari atribut data-id
        addToCart(productId); // Panggil fungsi untuk menambahkan produk ke keranjang
    });
});


// Fungsi format Rupiah
function formatRupiah(amount) {
    return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(amount);
}

// Fungsi untuk menghitung total saat halaman dimuat (pastikan fungsi ini didefinisikan)
function calculateTotal() {
    const subtotal = parseFloat(document.getElementById('subtotal').textContent.replace(/[^0-9.-]+/g,""));
    const tax = parseFloat(document.getElementById('tax').textContent.replace(/[^0-9.-]+/g,""));
    const shipping = parseFloat(document.getElementById('shipping').textContent.replace(/[^0-9.-]+/g,""));

    const total = subtotal + tax + shipping;
    document.getElementById('total').textContent = formatRupiah(total);
}


// Fungsi untuk menampilkan notifikasi
function showCheckoutNotification() {
    const notification = document.getElementById('checkout-notification');
    if (notification) {
        notification.style.display = 'block'; // Menampilkan notifikasi
    }
}

// Fungsi untuk checkout dan tampilkan modal
function checkout() {
    showCheckoutNotification(); // Tampilkan notifikasi saat checkout diproses

    fetch('/checkout', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Notifikasi checkout sudah ditampilkan, sekarang simpan data atau lakukan redirect
            setTimeout(() => {
                window.location.href = '/cart'; // Atau halaman lain setelah sukses
            }, 3000); // Tunggu 3 detik sebelum redirect atau tampilkan notifikasi lebih lanjut
        } else {
            showNotification('Checkout gagal.', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Terjadi kesalahan.', 'error');
    });
}

// Pasang listener ke tombol checkout
document.addEventListener('DOMContentLoaded', () => {
    const checkoutButton = document.getElementById('checkout-button');
    if (checkoutButton) {
        checkoutButton.addEventListener('click', checkout);
    } else {
        console.error('Checkout button tidak ditemukan di DOM!');
    }
});
