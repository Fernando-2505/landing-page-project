<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page - Empresa Ficticia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <!-- Header -->
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <h1 class="float-start">Empresa Ficticia</h1>
            <nav class="float-end">
                <a href="#servicios" class="text-white">Servicios</a> | 
                <a href="#contacto" class="text-white">Contacto</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h2>Bienvenidos a Empresa Ficticia</h2>
            <p>Ofrecemos soluciones personalizadas para su negocio</p>
            <a href="#contacto" class="btn btn-primary">Contáctanos</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="services">
        <div class="container">
            <h2>Nuestros Servicios:</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Servicio 1</h3>
                    <p>Descripción del servicio 1.</p>
                </div>
                <div class="col-md-4">
                    <h3>Servicio 2</h3>
                    <p>Descripción del servicio 2.</p>
                </div>
                <div class="col-md-4">
                    <h3>Servicio 3</h3>
                    <p>Descripción del servicio 3.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contacto" class="contacto p-5">
        <div class="container">
            <h2>Contáctanos</h2>
            <form action="php/procesar_contacto.php" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Empresa Ficticia. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
