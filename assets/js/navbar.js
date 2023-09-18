
  // Obtén el modal y el botón para abrirlo
  var modal = document.getElementById("myModal");
  var openModalButton = document.getElementById("openModal");

  // Cuando se hace clic en el botón de hamburguesa, muestra el modal
  openModalButton.addEventListener("click", function () {
    modal.style.display = "block";
  });

  // Cuando se hace clic en la "X" (cerrar), cierra el modal
  var closeBtn = document.getElementsByClassName("close")[0];
  closeBtn.addEventListener("click", function () {
    modal.style.display = "none";
  });

  // Cierra el modal si se hace clic fuera de él
  window.addEventListener("click", function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });

