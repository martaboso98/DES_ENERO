<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despliegue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!-- Barra de navegación-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="index.html">K-MARA</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#galeria">Galería</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="main-container">
        <div class="container">

            <?php include_once("saludo.php")?>

            <!-- Galería -->
            <section id="galeria" class="py-5">
                <figure>
                    <img src="CAM1.PNG">
                    <figcaption>Canon EOS 2000D + Objetivo Canon EF-S 18-55 mm (471€)</figcaption>
                </figure>
                
                <figure>
                    <img src="CAM2.PNG">
                    <figcaption>Cámara VBA510K002 NIKON (1413€)</figcaption>
                </figure>

                <figure>
                    <img src="CAM3.PNG">
                    <figcaption>Cámara EOS 850D + EF-S 18-135 CANON (1497€)</figcaption>
                </figure>

                <figure>
                    <img src="CAM4.PNG">
                    <figcaption>Cámara deportiva GoPro Hero 12 (449€)</figcaption>
                </figure>

                <figure>
                    <img src="CAM5.PNG">
                    <figcaption>Cámara instantánea Fujifilm Instax Mini 12 (84€)</figcaption>
                </figure>
                
                <figure>
                    <img src="CAM6.PNG">
                    <figcaption>Cámara EVIL Sony Alpha 6100 + Objetivo SELP1650 (803€)</figcaption>
                </figure>
            </section>

            <!-- Formulario de contacto -->
            <section id="contacto" class="py-5">
                <div class="formulario">
                    <h2 class="text-center p-3">Contacta con nosostros</h2>
                    <form action="mailto:martabo_so@hotmail.com" method="post" enctype="text/plain">
                        <div class="datos">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="visitor_name" pattern="[A-Za-z\s]{3,20}" required>
                        </div>
                        <div class="datos">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="visitor_email" placeholder="ejemplo@email.com"
                                required>
                        </div>
                        <div class="datos">
                            <label for="message">Mensaje</label>
                            <textarea id="message" name="visitor_message" placeholder="Escribe tu mensaje aquí."
                                required></textarea>
                        </div>
                        <button type="submit" class="botonEnviar">Enviar</button>
                    </form>
                </div>
            </section>

        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-white justificado">
                    <h5>CONTACTO</h5>
                    <p>
                        Si desea ponerse en contacto con nosotros, le invitamos a utilizar nuestro formulario de
                        contacto. Por favor, complete los campos requeridos con su nombre, dirección de correo
                        electrónico y el mensaje que desea enviarnos. Estaremos encantados de recibir su
                        retroalimentación o responder a sus preguntas.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-white justificado">
                    <h5>GALERÍA</h5>
                    <p>
                        Explore nuestra galería que presenta una selección de nuestros productos más vendidos. Descubra
                        la calidad y variedad de nuestros artículos a través de imágenes que destacan sus
                        características y detalles. Estamos seguros de que encontrará algo que se adapte a sus
                        necesidades y gustos.
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center p-3 text-white">
            <p class="text-center p-3 text-white">© 2020 Copyright: Marta Borreguero Soria</p>
        </div>
    </footer>

</body>

</html>