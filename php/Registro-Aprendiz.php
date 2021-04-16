<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Aprendiz</title>
    <link rel="stylesheet" href="../css/Registro-Aprendiz.css">
    <!-- FUENTE EB GARAMOND -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@600&display=swap" rel="stylesheet">
    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- FUENTE EB GARAMOND -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@600&display=swap" rel="stylesheet">
    <!-- FONT OSWALD -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <!-- M PLUS Rounded 1c -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400&display=swap"
        rel="stylesheet">
    <!-- ESTILO NAV-->
    <link rel="stylesheet" href="../css/nav.css">
</head>

<body>
    <!-- NAV HEADER-->
    <header>
        <nav>
            <a href="../index.html">Inicio</a>
            <hr width="1" size="40">
            <a href="../html/About-us.html">Nosotros</a>
            <hr width="1" size="40">
            <a href="../html/Contacto.html">Contacto</a>
            <hr width="1" size="40">
            <a href="../html/Registro-home.html">Registrate</a>
            <hr width="1" size="40">
            <a href="../html/Login.html" id="nav-border">Login</a>
        </nav>
        <section class="textos-header">
            <h1>SOLUTION FOR ASSITANCE</h1>
            <h2><i> ¡Bienvenido al equipo!</i></h2>
        </section>
        <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M-8.74,15.28 C104.68,83.38 351.30,90.28 499.15,8.39 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: rgb(255, 255, 255);"></path>
            </svg></div>
        <!--<div class="bandera-margin">
            <img src="../img/Bandera Aprendiz.svg" alt="" class="bandera">
        </div> -->


        <!-- CUERPO REGISTRO APRENDIZ -->
        <form method="POST" id="form" autocomplete="off">
            <div class="form">
                <!-- IMAGEN USUARIO APRENDIZ-->
                <div class="imagen-usuario">
                    <img src="../img/IMAGEN USUARIO.png" alt="">
                    <h1>Usuario</h1>
                </div>

                <!--Nombres 1-->
                <div class="grupo">
                    <input type="text" name="nombre1" id="nombre1" class="name" required><span class="barra"></span>
                    <label for="">Primer nombre</label>
                </div>
                <!--Nombres 2-->
                <div class="grupo">
                    <input type="text" name="nombre2" id="nombre2" class="name" required><span class="barra"></span>
                    <label for="">Segundo nombre</label>
                </div>

                <!--Apellido 1-->
                <div class="grupo">
                    <input type="text" name="apellido1" id="apellido1" required><span class="barra"></span>
                    <label for="">Primer apellido</label>
                </div>

                <!--Apellido 2-->
                <div class="grupo">
                    <input type="text" name="apellido2" id="apellido2" required><span class="barra"></span>
                    <label for="">Segundo apellido</label>
                </div>

                <!--Sexo-->
                <div class="grupo">
                    <select name="sexo" class="select" id="tipo_sexo" name="tipo_sexo">
                        <!-- Opciones de la lista -->
                        <!-- Opción por defecto -->
                        <option selected style="color: black; background: rgb(197, 197, 197);">Seleccione su sexo
                        </option>
                        <option value="Masculino" style="color: black;">Masculino</option>
                        <option value="Femenino" style="color: black;">Femenino</option>
                    </select>
                </div>
                <!-- TIPO DE DOCUMENTO -->
                <div class="grupo">
                    <input type="number" name="documento" id="documento" required><span class="barra"></span>
                    <label for="">Numero de documento de identidad</label>

                    <select name="combo" class="select1" name="tipo_documento" id="tipo_documento" required>
                        <!-- Opciones de la lista -->
                        <option value="2" selected style="color: black; background: rgb(197, 197, 197);">Seleccione un
                            tipo
                            de documento</option> <!-- Opción por defecto -->
                        <option value="TI" style="color: black;">Tarjeta de identidad</option>
                        <option value="CC" style="color: black;">Cedula de ciudadanía</option>
                        <option value="CE" style="color: black;">Cedula de Extranjería</option>
                        <option value="PT" style="color: black;">Pasaporte</option>

                    </select>
                </div>
                <!--INPUT NACIONALIDAD-->
                <div class="grupo">
                    <input type="text" name="nacionalidad" id="nacionalidad" required><span class="barra"></span>
                    <label for="">Nacionalidad</label>
                </div>

                <!--INPUT CORREO-->
                <div class="grupo">
                    <input type="email" name="email" id="email" required><span class="barra"></span>
                    <label for="">Correo electrónico</label>
                </div>

                <!--Contraseña-->
                <div class="grupo">
                    <input type="password" name="password" id="password" required><span class="barra"></span>
                    <label for="">Contraseña</label>
                </div>

                <!-- Confirmar contraseña -->
                <div class="grupo">
                    <input type="password" name="password2" id="password2" required><span class="barra"></span>
                    <label for="">Confirmar contraseña</label>
                </div>
                <!-- TIPO DE ROL -->
                <div class="grupo">
                    <select name="tipo_rol" class="select" id="tipo_rol" required>
                        <!-- Opciones de la lista -->
                        <option selected style="color: black; background: rgb(197, 197, 197);">Seleccione un
                            tipo
                            de rol</option> <!-- Opción por defecto -->
                        <option value="Aprendiz" style="color: black;">Aprendiz</option>
                        <option value="Instructor" style="color: black;">Instructor</option>
                    </select>
                </div>
                <!-- INPUT CELULAR -->
                <div class="grupo">
                    <input type="number" name="celular" id="celular" required><span class="barra"></span>
                    <label for="">Numero celular</label>
                </div>                
                <button type="submit">Registrate</button>
                <p class="warnings" id="warnings"></p>
            </div>
        </form>
        <!--FOOTER-->
        <section class="footer">
            <footer class="contenedor">
                <div class="footer-container">
                    <div class="content-footer">
                        <ul class="footer-i">
                            <li>
                                <a href="https://www.instagram.com/efficiency_in_taking_care/" target='_blank'>
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/adsi.proyectosena/about?section=overview"
                                    target='_blank'>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/efficiency_in" target='_blank'>
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <p class="footer__Copyright">Copyright © 2020 by Solution For Assistance. (SFA)
                        </p>
                    </div>
                </div>
            </footer>
        </section>
        <script src="../js/Registro-Aprendiz.js "></script>
</body>
</html>