function toggleCard(card) {
  // Tutup kartu lain yang sedang terbuka
  document.querySelectorAll('.card.expanded').forEach((expandedCard) => {
    if (expandedCard !== card) {
      expandedCard.classList.remove('expanded');
    }
  });

  // Toggle kartu yang diklik
  card.classList.toggle('expanded');
}
