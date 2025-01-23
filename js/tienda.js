$(document).ready(function () {
    // Función para cargar los discos
    function cargar_items() {
      $.ajax({
        type: "GET",
        url: "./php/tienda.php", // Ajusta la ruta si es necesario
        dataType: "JSON",
        success: function (response) {
          if (response.success) {
            renderizarProductos(response.datos);
          } else {
            $("#muestra").html("<p>No hay productos disponibles</p>");
          }
        },
        error: function (xhr, status, error) {
          console.error("Error al cargar los productos:", error);
          $("#muestra").html("<p>Ocurrió un error al cargar los productos</p>");
        },
      });
    }
  
    // Función para renderizar los discos
    function renderizarProductos(productos) {
      let html = "";
      productos.forEach((producto) => {
        html += `
          <div class="vinilos-muestra">
            <img src="${producto.imagen}" alt="${producto.titulo}">
            <h2>${producto.titulo}</h2>
            <p>${producto.descripcion}</p>
            <span>${producto.precio} €</span>
          </div>
        `;
      });
      $("#muestra").html(html);
    }
  
    // Función para filtrar productos por el buscador
    function buscarProductos(termino) {
      $.ajax({
        type: "GET",
        url: "./php/tienda.php", // Ajusta la ruta si es necesario
        dataType: "JSON",
        success: function (response) {
          if (response.success) {
            const productosFiltrados = response.datos.filter((producto) =>
              producto.titulo.toLowerCase().includes(termino.toLowerCase())
            );
            renderizarProductos(productosFiltrados);
          } else {
            $("#muestra").html("<p>No hay productos disponibles</p>");
          }
        },
        error: function (xhr, status, error) {
          console.error("Error al buscar los productos:", error);
        },
      });
    }
  
    // Evento para el buscador
    $("#buscador").on("input", function () {
      const termino = $(this).val();
      if (termino.trim() === "") {
        cargar_items(); // Carga todos los productos si el buscador está vacío
      } else {
        buscarProductos(termino);
      }
    });
  
    // Carga inicial de productos
    cargar_items();
  });
  