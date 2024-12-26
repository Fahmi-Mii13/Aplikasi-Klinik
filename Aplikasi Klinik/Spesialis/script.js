document.addEventListener("DOMContentLoaded", function () {
  const bookingButtons = document.querySelectorAll(".bookingButton");

  bookingButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const popupOverlay = this.parentElement.nextElementSibling;
      popupOverlay.style.display = "block"; 

      const closePopupSpan = popupOverlay.querySelector(".close");
      const closePopupButton = popupOverlay.querySelector(".closePopupButton");

      function closePopup() {
        popupOverlay.style.display = "none"; 
      }

      closePopupSpan.addEventListener("click", closePopup);
      closePopupButton.addEventListener("click", closePopup);

      popupOverlay.addEventListener("click", function (event) {
        if (event.target === popupOverlay) {
          closePopup();
        }
      });
    });
  });
});
