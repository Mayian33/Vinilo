fetch('catalogoMostrar.php')
    .then(response => response.json())
    .then(data => {
        let catalogo = document.getElementById('catalogo');
        data.forEach(producto => {
            let card = document.createElement('div');
            card.classList.add('card');
            card.innerHTML = `
            <img src="${producto.imagen}" alt="${producto.titulo}">
            <h3>${producto.titulo}</h3>
            <p>${producto.descripcion}</p>
            <p><strong>Precio: $${producto.precio}</strong></p>
        `;
            catalogo.appendChild(card);
        });
    })
    .catch(error => console.error('Error:', error));