
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  // carousel2
  const swiper2 = new Swiper('.swiper-carousel2', {
      speed: 400,
      spaceBetween: 100,
      slidesPerView: 3,
      pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      on: {
          slideChange: function () {
              updateActiveCard(); // Panggil fungsi update setiap kali slide berubah
          },
      },
  });

  const cards = document.querySelectorAll('.card');

function updateActiveCard() {
  const middleIndex = Math.floor(swiper2.activeIndex + swiper2.params.slidesPerView / 2);
  
  cards.forEach((card, index) => {
      card.classList.remove('active', 'left', 'right'); // Hapus semua class sebelumnya

      if (index === middleIndex) {
          card.classList.add('active'); // Elemen tengah
      } else if (index === middleIndex - 1) {
          card.classList.add('left'); // Elemen kiri
      } else if (index === middleIndex + 1) {
          card.classList.add('right'); // Elemen kanan
      }
  });
}

// Panggil saat slide berubah
swiper.on('slideChange', updateActiveCard);

// Inisialisasi awal
updateActiveCard();
