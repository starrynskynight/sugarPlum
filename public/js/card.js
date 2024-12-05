document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Fungsi untuk membuka/menutup dropdown
    dropdownToggle.addEventListener('click', function (e) {
        e.preventDefault();
        dropdownMenu.classList.toggle('expan');
    });

    // Tutup dropdown saat klik di luar
    document.addEventListener('click', function (e) {
        if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.remove('expan');
        }
    });

    // Update teks dropdown dan tutup menu
    dropdownMenu.addEventListener('click', function (e) {
        if (e.target.tagName === 'LABEL') {
            const selectedText = e.target.textContent;
            dropdownToggle.textContent = selectedText;
            dropdownMenu.classList.remove('expan');
        }
    });
});