<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Contacto</h1>
            <p>¿Tienes alguna pregunta? Escríbeme y te responderé lo antes posible.</p>
        </header>

        <form class="contact-form" id="contactForm">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" id="submitBtn">
                <span id="btnText">Enviar Mensaje</span>
                <div class="loader" id="loader"></div>
            </button>
        </form>

        <div class="contact-info">
            <div class="contact-card">
                <h3><i class="fas fa-envelope"></i> Email</h3>
                <p>contacto@tudominio.com</p>
            </div>
            <div class="contact-card">
                <h3><i class="fas fa-phone"></i> Teléfono</h3>
                <p>+123 456 7890</p>
            </div>
            <div class="contact-card">
                <h3><i class="fas fa-map-marker-alt"></i> Dirección</h3>
                <p>Ciudad, País</p>
            </div>
        </div>
    </div>
    
</body>
 <footer>
        <p>&copy; 2023 Tu Nombre. Todos los derechos reservados.</p>
    </footer>
</html>