document.addEventListener("DOMContentLoaded", function () {
  // Pilih semua tombol booking
  const bookingButtons = document.querySelectorAll(".bookingButton");

  // Tambahkan event listener untuk setiap tombol booking
  bookingButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Cari elemen popup terdekat untuk tombol yang ditekan
      const popupOverlay = this.parentElement.nextElementSibling;
      popupOverlay.style.display = "block"; // Tampilkan popup

      // Tambahkan event listener untuk menutup popup
      const closePopupSpan = popupOverlay.querySelector(".close");
      const closePopupButton = popupOverlay.querySelector(".closePopupButton");

      function closePopup() {
        popupOverlay.style.display = "none"; // Sembunyikan popup
      }

      closePopupSpan.addEventListener("click", closePopup);
      closePopupButton.addEventListener("click", closePopup);

      // Tutup popup jika area luar konten diklik
      popupOverlay.addEventListener("click", function (event) {
        if (event.target === popupOverlay) {
          closePopup();
        }
      });
    });
  });
});
