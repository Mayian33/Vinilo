<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Catalogo</title>
  <link rel="preload" href="css/catalogo.css" as="style" />
  <link href="css/catalogo.css" rel="stylesheet" />
  <script src="js/catalogo.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="logo">
        <img src="./img/logoblanco.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#historia">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#multimedia">Multimedia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#destacado">Destacados</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="title-catalogue">
      <h2 class="title">Catalogo<span style="color:#ca4212;">Albums</span></h2>
    </div>

    <div class="container-description">
      <div class="descrip-boton">
        <p class="descripcion">Catagologo de los albumes de Abba de éxito y más novedosos</p>

        <a href="#modal">
          <button class="boton-anadir">
            Añadir Album
          </button>
        </a>
      </div>

      <!-- Modal -->
      <div id="modal" class="modal">
        <h2>Formulario</h2>
        <form id="surveyForm" action="catalogo.php" method="post">
          <label for="text">Nombre:</label><br>
          <input type="text" id="titulo" name="titulo" required><br><br>
          <label for="text">Descripción:</label><br>
          <input type="text" id="descripcion" name="descripcion" required><br>
          <label for="number">Precio:</label><br>
          <input type="number" id="precio" name="precio" required><br>
          <label for="text">Imagen:</label><br>
          <input type="text" id="imagen" name="imagen" required><br>
          <br>
          <button type="submit">Enviar</button>
        </form>
        <!-- Icono de cruz en la esquina superior derecha -->
        <a class="close-btn">
          <img src="./icons/cerrar.png" alt="Botón cerrar" style="width: 24px; height: 24px; cursor: pointer;"
            id="enableIcon">
        </a>
      </div>
      <!-- Fondo oscuro -->
      <div class="overlay"></div>

    

      <section class="cards">
        <article class="card card--1">
          <div class="card__info-hover">
            <svg class="card__like" viewBox="0 0 24 24">
              <path fill="#000000"
                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
            </svg>
            <div class="card__clock-info">
              <svg class="card__clock" viewBox="0 0 24 24">
                <path
                  d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time">15 min</span>
            </div>

          </div>
          <div class="card__img"></div>
          <a href="#" class="card_link">
            <div class="card__img--hover"></div>
          </a>
          <div class="card__info">
            <span class="card__category">1974</span>
            <h3 class="card__title">aaa</h3>
            <span class="card__by">by <a href="#" class="card__author" title="author">ABBA</a></span>
            <br>
            <div class="iconos">
              <div class="icono-boton">
                <img src="./icons/habilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
              <div class="icono-boton">
                <img src="./icons/deshabilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
            </div>
          </div>
        </article>

        <article class="card card--2">
          <div class="card__info-hover">
            <svg class="card__like" viewBox="0 0 24 24">
              <path fill="#000000"
                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
            </svg>
            <div class="card__clock-info">
              <svg class="card__clock" viewBox="0 0 24 24">
                <path
                  d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time">5 min</span>
            </div>

          </div>
          <div class="card__img"></div>
          <a href="#" class="card_link">
            <div class="card__img--hover"></div>
          </a>
          <div class="card__info">
            <span class="card__category"> 1979</span>
            <h3 class="card__title">Voulez-vous</h3>
            <span class="card__by">by <a href="#" class="card__author" title="author">ABBA</a></span><br>
            <div class="iconos">
              <div class="icono-boton">
                <img src="./icons/habilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
              <div class="icono-boton">
                <img src="./icons/deshabilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
            </div>
          </div>
        </article>

        <article class="card card--3">
          <div class="card__info-hover">
            <svg class="card__like" viewBox="0 0 24 24">
              <path fill="#000000"
                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
            </svg>
            <div class="card__clock-info">
              <svg class="card__clock" viewBox="0 0 24 24">
                <path
                  d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time">15 min</span>
            </div>

          </div>
          <div class="card__img"></div>
          <a href="#" class="card_link">
            <div class="card__img--hover"></div>
          </a>
          <div class="card__info">
            <span class="card__category">1975</span>
            <h3 class="card__title">ABBA</h3>
            <span class="card__by">by <a href="#" class="card__author" title="author">ABBA</a></span>
            <br>
            <div class="iconos">
              <div class="icono-boton">
                <img src="./icons/habilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
              <div class="icono-boton">
                <img src="./icons/deshabilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
            </div>
          </div>
        </article>

        <article class="card card--4">
          <div class="card__info-hover">
            <svg class="card__like" viewBox="0 0 24 24">
              <path fill="#000000"
                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
            </svg>
            <div class="card__clock-info">
              <svg class="card__clock" viewBox="0 0 24 24">
                <path
                  d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time">5 min</span>
            </div>

          </div>
          <div class="card__img"></div>
          <a href="#" class="card_link">
            <div class="card__img--hover"></div>
          </a>
          <div class="card__info">
            <span class="card__category">1976</span>
            <h3 class="card__title">Arrival</h3>
            <span class="card__by">by <a href="#" class="card__author" title="author">ABBA</a></span>
            <br>
            <div class="iconos">
              <div class="icono-boton">
                <img src="./icons/habilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
              <div class="icono-boton">
                <img src="./icons/deshabilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
            </div>
          </div>
        </article>

        <article class="card card--5">
          <div class="card__info-hover">
            <svg class="card__like" viewBox="0 0 24 24">
              <path fill="#000000"
                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
            </svg>
            <div class="card__clock-info">
              <svg class="card__clock" viewBox="0 0 24 24">
                <path
                  d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time">5 min</span>
            </div>

          </div>
          <div class="card__img"></div>
          <a href="#" class="card_link">
            <div class="card__img--hover"></div>
          </a>
          <div class="card__info">
            <span class="card__category">1981</span>
            <h3 class="card__title">The visitors</h3>
            <span class="card__by">by <a href="#" class="card__author" title="author">ABBA</a></span>
            <br>
            <div class="iconos">
              <div class="icono-boton">
                <img src="./icons/habilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
              <div class="icono-boton">
                <img src="./icons/deshabilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
            </div>
        </article>

        <article class="card card--6">
          <div class="card__info-hover">
            <svg class="card__like" viewBox="0 0 24 24">
              <path fill="#000000"
                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
            </svg>
            <div class="card__clock-info">
              <svg class="card__clock" viewBox="0 0 24 24">
                <path
                  d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time">5 min</span>
            </div>

          </div>
          <div class="card__img"></div>
          <a href="#" class="card_link">
            <div class="card__img--hover"></div>
          </a>
          <div class="card__info">
            <span class="card__category">1980</span>
            <h3 class="card__title">Super Trouper</h3>
            <span class="card__by">by <a href="#" class="card__author" title="author">ABBA</a></span>
            <br>
            <div class="iconos">
              <div class="icono-boton">
                <img src="./icons/habilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
              <div class="icono-boton">
                <img src="./icons/deshabilitar.png" alt="Botón Habilitar"
                  style="width: 24px; height: 24px; cursor: pointer;" id="enableIcon">
              </div>
            </div>
          </div>
        </article>
      </section>
    </div>
  </div>
</body>

</html>