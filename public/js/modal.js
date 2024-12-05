document.addEventListener('DOMContentLoaded', function() {
    const modalButtons = document.querySelectorAll('[data-modal-toggle]');

    modalButtons.forEach(button => {
        button.addEventListener('click', function() {
            const modalId = this.getAttribute('data-modal-target');
            const modal = document.getElementById(modalId);

            if (modal) {
                modal.classList.toggle('hidden'); // Tampilkan/Sembunyikan modal
                modal.setAttribute('aria-hidden', modal.classList.contains('hidden') ? 'true' : 'false');
            }
        });
    });
});
