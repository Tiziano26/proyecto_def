<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/registro.css">
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark" style="border: 1px solid black;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">GymShark</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="rutinas.php">Rutinas</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Productos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="proteina.php">Proteinas</a></li>
                  <li><a class="dropdown-item" href="aminoacidos.php">Aminoacidos</a></li>
                  <li><a class="dropdown-item" href="multivitaminicos.php">Multivitaminicos</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="accesorios.php">Accesorios</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
            </ul>

            <button id="loginBtn" class="btn btn-outline-success ">Iniciar Sesion</button>
    <div id="loginModal" class="modal">
        <div class="formulario">
            <span class="close">&times;</span>
            <h1>Iniciar Sesion</h1>
            <form method="post">
                <div class="username">
                    <input type="text" required>
                    <label>Usuario</label>
                </div>
                <div class="password">
                    <input type="password" required>
                    <label>Contraseña</label>
                </div>
                <div class="recordar">¿Olvido su contraseña</div>
                    <input type="submit" value="Iniciar">
                <div class="cuenta">
                    Ya tengo una cuenta <a href="#">aca</a>
                </div>
                    
                
               
            </form>
        </div>
    </div>
    <button id="loginBtn1" class="btn btn-outline-success">Registrarse</button>
    <div id="loginModal1" class="modal">
        <div class="formulario">
            <span class="close1">&times;</span>
            <h1>Registrarme</h1>
            <form method="post">
                <div class="nombre">
                    <input type="text" required>
                    <label>Nombre</label>
                </div>
                <div class="apellido">
                    <input type="text" required>
                    <label>Apellido</label>
                </div>
                <div class="usuario">
                    <input type="text" required>
                    <label>Usuario</label>
                </div>
                <div class="mail">
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="password">
                    <input type="password" required>
                    <label>Contraseña</label>
                </div>
                <div class="password">
                    <input type="password" required>
                    <label>Repetir contraseña</label>
                </div>
                    <input type="submit" value="Registrarme" >
                <div class="cuenta">
                    Ya tengo una cuenta <a href=" ../login/login.html" >aca</a>
                </div>
                    
                
               
            </form>
        </div>
    </div>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
        <div class="carrito">
            <li><a href="">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAN1JREFUSEvNlN0RATEUhb/thE7ohFeKQBG8ohI6oRPmmM1Mdjeb3E3EuK9Jzpdz/xoqR1NZn58CXq2bJ3AF9t9w5ztwAKe7BO6lkFCKVsC5FRekKEKAGfBoVYtdjBVZDuQkN1THuR6PAXwXOZAkQKI3YJGjDhxcF8bmwBU7h6H0yEV00HLTdAHW7lepSdaw7SZakLggn0gBclx0NFOAqcXupMfiQHfUSeooSwwG0+JAwpZaaG8NVosVYPl98I4VcAQ2wAnY9pRiZ8kuclr+Ku9/KnZmBlR3UL0G/wt4A6frJhn9OGNiAAAAAElFTkSuQmCC"/>
            </a></li>
        </div>
      </nav>
    </header>

   <div class="container-items">
    <div class = "item">
        <figure>
            <img src="imagenes/prote princi.jpg" alt="">
        </figure>
        <div class="info-product">
            <h2>Proteina</h2>
            <p class="precio">$35.000</p>
            <button>Comprar</button>
        </div>
    </div>

    <div class = "item">
        <figure>
            <img src="imagenes/amino princi.jpg" alt="">
        </figure>
        <div class="info-product">
            <h2>Aminoacidos</h2>
            <p class="precio">$10.000</p>
           <button> <a href="seleccion.html">Añadir al carrito</a></button>
        </div>
    </div>

    <div class="item">
        <figure>
            <img src="imagenes/multivi princi.avif" alt="">
        </figure>
        <div class="info-product">
            <h2>Multivitaminicos</h2>
            <p class="precio">$3.500</p>
            <button> <a href="seleccion.html">Añadir al carrito</a></button>
        </div>
    </div>

    <div class = "item">
        <figure>
            <img src="imagenes/tobillera.jpg" alt="">
        </figure>
        <div class="info-product">
            <h2>Tobillera</h2>
            <p class="precio">$5.000</p>
            <button> <a href="seleccion.html">Añadir al carrito</a></button>
        </div>
    </div>

    <div class = "item">
        <figure>
            <img src="" alt="">
        </figure>
        <div class="info-product">
            <h2>Ejemplo</h2>
            <p class="precio">$90</p>
            <button>Añadir al carrito</button>
        </div>
    </div>

    <div class = "item">
        <figure>
            <img src="" alt="">
        </figure>
        <div class="info-product">
            <h2>Ejemplo</h2>
            <p class="precio">$90</p>
            <button>Añadir al carrito</button>
        </div>
    </div>

    <div class = "item">
        <figure>
            <img src="" alt="">
        </figure>
        <div class="info-product">
            <h2>Ejemplo</h2>
            <p class="precio">$90</p>
            <button>Añadir al carrito</button>
        </div>
    </div>  

    <div class="item">
        <figure>
            <img src="" alt="">
        </figure>
        <div class="info-product">
            <h2>Ejemplo</h2>
            <p class="precio">$90</p>
            <button>Añadir al carrito</button>
        </div>
    </div>

    <div class="item">
        <figure>
            <img src="" alt="">
        </figure>
        <div class="info-product">
            <h2>Ejemplo</h2>
            <p class="precio">$90</p>
            <button>Añadir al carrito</button>
        </div>
    </div>








    
    </div>
</div>

<footer>
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li>
            <a href="#" class="nav-link px-2 text-muted">Home</a>
        </li>
        <li>
            <a href="#" class="nav-link px-2 text-muted">Features</a>
        </li>
        <li>
            <a href="#" class="nav-link px-2 text-muted">Pricing</a>
        </li>
        <li>
            <a href="#" class="nav-link px-2 text-muted">FAQs</a>
        </li>
        <li>
            <a href="#" class="nav-link px-2 text-muted">aAbout</a>
        </li>
    </ul>
    <p class="text-center text-muted">fasjkdbfkbkasbdfkbasdkb</p>
<footer>
<script src="../js/registro.js"></script>
<script src="../js/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>