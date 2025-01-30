// boton de cerrar de la ventana emergente

   // Obtener el modal y el icono de cierre
   const modal = document.getElementById("modal");
   const closeButton = document.getElementById("enableIcon");

   // Agregar evento de clic al icono para cerrar el modal
   closeButton.addEventListener("click", function() {
       modal.style.display = "none";
   });