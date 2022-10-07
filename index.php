<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo_p.css">
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="JS/funciones.js"></script>
    
    <title>MY_PORTAFOLIO_Q</title>
</head>
<body>
    <!--Seccion número 1 - sobre mi / about me-->
    <div class="seccion1" id="seccion1">
        <header>
            
            
            <nav class="navbar">
                <div class="logo">
                    <h2>Q <span>._</span>E.</h2>
                    <label for="minimizar">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </label>
                </div>
                <input type="checkbox" name="click" id="minimizar">
                <ul>
                    <li><a href="#seccion1" class="about">About Me</a></li>
                    <li><a href="#secction2" class="portf" >Portafolio</a></li>
                    <li><a href="#seccion3" class="contact">Contact</a></li>
                </ul>
                
            </nav>
        </header>
        <main class="menu">
            <div class="fronEnd">
                <h3>FrontEnd</h3><br>
                <p>Soy graduado de Lic. en Gerencia De Comercio Electrónico, sin embargo me he enfocado a realizar
                    pequeños proyectos utilizando tecnoligas de programacion como es el javascript, CSS y HTML. esto en el lado del client(Frontend) </p>
            </div>
            <div class="foto">
                <h3>Hola, soy Evelio Quijano</h3>
                <img src="IMG/fondo.png" alt="">
            </div>
            <div class="backEnd">
                <h3>BackEnd</h3><br>
                <p>Las tecnolgias que utilizo para realizar pequeños proyectos propios en lado del servidor(BackEnd), son las siguientes:
                    Php,mysql,python. </p>
            </div>
        </main>
    </div>

    <!-- seccion número 2 - PORTAFOLIO-->

    <div class="secction2" id="secction2">
        <div class="title"><h2>My Portafolio</h2></div>
        <div class="card_content"></div>
        
    </div>


    <!--Seccion número 3 - contacto-->
    <div class="seccion3" id="seccion3">
        <h2>Contáctame</h2>
        <div class="formulario">
            <form action="index.php">
                <h4>contactar</h4>
                <input type="text" name="" id="nombre_c" placeholder="Nombre">
                <input type="email" name="" id="e_mail" placeholder="Correo Electrónico">
                <textarea name="" id="message" placeholder="Ingrese su mensaje"></textarea>
                <input type="submit" value="Enviar mensaje" class="boton">
            </form>
        </div>
    </div>

    <!-- Seccion del footer-->

    <footer class ="footer">
        <div class="redes"><p class="unoL">
            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        </div>
        <div class="info_legal">
            <h4>Evelio Quijano</h4>
            <p class="pie">copyright &#169 2022, Quijano, Evelio</p>
            <div class="legal">
                <a href="http://" target="_blank" rel="noopener noreferrer">Informacion legal</a><span>|</span>
                <a href="http://" target="_blank" rel="noopener noreferrer">Politica de privacidad</a> 
            </div>
        </div>
    </footer>
    
    <script src="https://kit.fontawesome.com/271fe0c940.js" crossorigin="anonymous"></script>
    
</body>
</html>