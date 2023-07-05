<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="aestilo.css">
</head>
<body>

<header class="caja">
        <nav class="navbar">
            <div>
                <a href="#" class="logo"><img src="imagenes/Logos/attk.png"></a>
            </div>
            <div class="nav-links">
                <ul>
                    <li class="active"><a href="principal.html">Inicio</a></li>
                    <li><a href="casa.html">Alojamiento</a></li>
                    <li><a href="#">Informacion</a></li>
                    <li><a href="EQUIPO/equipo.html">Nosotros</a></li>
                    <li><a href="#">Ayuda</a></li>
                </ul>
            </div>
            
            <div class="subinicio">
                <div class="iniciosesion">
                    <a href="Login/Inicio Sesion/index.html	"><img src="imagenes/logos/iniciar sesion.png"></a>
                </div>
            </div>	
    
            <img src="Imagenes/Logos/menu-btn.png" alt="menuhamburger" class="menu-hamburger">
        </nav>
            <main id="hero">
            <video muted autoplay loop>
                <source src="./Imagenes/Fondos/Villsa Carlos Paz, Córdoba, Argentina.mp4">
            </video>
                <div class="capa"></div>
            </main>
</header>

    <form method="post">
        <h1>Crear Cuenta</h1>
        <input type="text" name="nombre" placeholder="Nombre completo">
        <input type="password" name="contraseña" placeholder="contra">
        <input type="text" name="dni" placeholder="dni">
        <input type="text" name="gmail" placeholder="gmail">
        <input type="submit" name="register">
    </form>
    <?php
    include("doxregistrar.php")
    ?>
 <footer class="footer">
        <div class="containerb">
            <div class="footer-row">
                <div class="footer-links">
                    <h4>Informacion</h4>
                    <ul>
                        <li><a href="#">Miembros</a></li>
                        <li><a href="#">Nuestros Servicios</a></li>
                        <li><a href="#">Terminos Y Condiciones</a></li>
                        <li><a href="#">Asociados</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Navegar</h4>
                    <ul>
                        <li><a href="#">Inmuebles</a></li>
                        <li><a href="#">Hoteles</a></li>
                        <li><a href="#">Venta</a></li>
                        <li><a href="#">Propiedades</a></li>
                    </ul>
                </div>
    
                <div class="footer-links">
                    <h4>Clientes</h4>
                    <ul>
                        <li><a href="Login/Inicio Sesion/index.html	">Iniciar Sesion</a></li>
                        <li><a href="Login/FORMULARIO/indexform.html">Registrarse</a></li>
                        <li><a href="principal.html">Volver al inicio</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Siguenos</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/Municipiovcp/?locale=es_LA"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/villacarlospazoficial/"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/secturismovcpaz?lang=es"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </footer>


</body>
<script>
    const menuHamburger = document.querySelector(".menu-hamburger")
    const navLinks = document.querySelector(".nav-links")
    const iniciosesion = document.querySelector(".iniciosesion")
    const subinicio = document.querySelector(".subinicio")
    const sesion = document.querySelector(".sesion")

    menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu')
    iniciosesion.classList.toggle('mobile-menu')
    subinicio.classList.toggle('mobile-menu')
    sesion.classList.toggle('mobile-menu')
    })

    window.addEventListener("scroll", function(){
        var navbar = document.querySelector(".navbar");
        navbar.classList.toggle("abajo",window.scrollY>0);
    })
</script>
</html>