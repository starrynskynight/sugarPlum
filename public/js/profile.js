document.querySelectorAll(".toggle-btn").forEach((button) => {
    button.addEventListener("click", function () {
      const card = this.closest(".card");
      card.classList.toggle("active"); // Tambah/hapus class "active"
      this.textContent = card.classList.contains("active")
        ? "Read Less"
        : "Read More"; // Ubah teks tombol
    });
  });
  