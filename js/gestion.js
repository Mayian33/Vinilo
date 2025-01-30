$(document).ready(function () {
    const modal = $('#Formulario');
    const btnAbrir = $('#abrirpopup');
    const spanCerrar = $('.cerrar')[0];

    btnAbrir.click(() => modal.css('display', 'block'));
    spanCerrar.onclick = () => modal.css('display', 'none');
    
    window.onclick = (event) => {
        if (event.target == modal[0]) {
            modal.css('display', 'none');
        }
    }

    function cargarAlbum() {
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
                            <li class="vinilo-item">
                                <img src="${producto.imagen}" alt="${producto.titulo}">
                                <span class="vinilo-nombre">${producto.titulo}</span>
                                <label class="switch">
                                    <input type="checkbox" class="toggle-visibility" data-id="${producto.id}" ${estado}>
                                    <span class="slider"></span>
                                </label>
                            </li>
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

    // Agregar un nuevo vinilo
    $("#agregar_vinilos").submit(function (event) {
        event.preventDefault();
        let datos = {
            titulo: $("#titulo").val(),
            descripcion: $("#descripcion").val(),
            precio: $("#precio").val(),
            imagen: $("#imagen").val(),
        };

        $.post("./php/agregar_vinilos.php", datos, function (response) {
            if (response.success) {
                alert("Vinilo agregado correctamente");
                $("#agregar_vinilos")[0].reset();
                cargarAlbum();
            } else {
                alert("Error al agregar vinilo");
            }
        }, "json");
    });

    // Guardar estado del switch en localStorage
    $("#listaVinilos").on("change", ".toggle-visibility", function () {
        let id = $(this).data("id");
        let estado = $(this).is(":checked") ? "visible" : "hidden";

        localStorage.setItem(`vinilo_${id}`, estado);
    });

    cargarAlbum();
});
