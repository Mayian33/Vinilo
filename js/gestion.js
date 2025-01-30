$(document).ready(function () {
    function cargaralbum() {
        $.ajax({
            url: "./php/gestion.php",
            method: "GET",
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    let html = "";
                    response.datos.forEach((producto) => {
                        let estado = localStorage.getItem(`vinilo_${producto.id}`) === "hidden" ? "" : "checked";

                        html += `
                            <div class="vinilo-item">
                                <img src="${producto.imagen}" alt="${producto.titulo}">
                                <label class="switch">
                                    <input type="checkbox" class="toggle-visibility" data-id="${producto.id}" ${estado}>
                                    <span class="slider"></span>
                                </label>
                            </div>
                        `;
                    });
                    $("#listaVinilos").html(html);
                }
            },
            error: function () {
                console.error("Error al cargar los vinilos");
            }
        });
    }

    $("#formAgregar").submit(function (event) {
        event.preventDefault();
        let datos = {
            titulo: $("#titulo").val(),
            descripcion: $("#descripcion").val(),
            precio: $("#precio").val(),
            imagen: $("#imagen").val(),
        };

        $.post("agregar_vinilos.php", datos, function (response) {
            if (response.success) {
                alert("Vinilo agregado correctamente");
                $("#agregar_vinilos")[0].reset();
                cargaralbum();
            } else {
                alert("Error al agregar vinilo");
            }
        }, "json");
    });

    $("#listaVinilos").on("change", ".toggle-visibility", function () {
        let id = $(this).data("id");
        let estado = $(this).is(":checked") ? "visible" : "hidden";

        localStorage.setItem(`vinilo_${id}`, estado);
    });

    cargaralbum();
});
