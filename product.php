<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="assets/css/productos_styles.css">
    <link rel="stylesheet" href="assets/css/stilos.css">
    <link rel="stylesheet" href="assets/css/footer.css">

</head>

<body>

    <?php require_once 'templates/header.html'; ?>

    <section class="contenido-productos">

        <div id="menu">

            <h2>Filtrar</h2>

            <ul>
                <li><a href="#" onclick="mostrarContenido('medicamentos')">Medicamentos</a></li>
                <li><a href="#" onclick="mostrarContenido('bienestar')">Bienestar</a></li>
                <li><a href="#" onclick="mostrarContenido('belleza')">Belleza</a></li>
                <li><a href="#" onclick="mostrarContenido('cuidado')">Cuidado personal</a></li>
            </ul>
        </div>

        <div class="icono-menu" onclick="toggleMobileMenu()">
            <img src="assets/img/menu.svg" alt="">
        </div>

        <div id="mobile-menu">

            <h2>Filtrar</h2>

            <div class="contenedor-lista">
                <ul>
                    <li><a href="#" onclick="mostrarContenido('medicamentos')">Medicamentos</a></li>
                    <li><a href="#" onclick="mostrarContenido('bienestar')">Bienestar</a></li>
                    <li><a href="#" onclick="mostrarContenido('belleza')">Belleza</a></li>
                    <li><a href="#" onclick="mostrarContenido('cuidado')">Cuidado personal</a></li>
                </ul>
            </div>
        </div>

        <div id="contenido">
            <div id="medicamentos">

                <h2>Medicamentos</h2>
                <?php require_once 'cardProduct.html'; ?>
            </div>

            <div id="bienestar" style="display: none;">
                <h2>Bienestar</h2>

              
            </div>

            <div id="belleza" style="display: none;">
                <h2>Belleza</h2>
                <p>Consejos y productos para cuidar tu belleza.</p>
            </div>

            <div id="cuidado" style="display: none;">
                <h2>Cuidado personal</h2>
                <p>Consejos y productos para el cuidado personal.</p>
            </div>
        </div>

    </section>

    <?php require_once 'templates/footer.html'; ?>

    <script src="assets/js/NavegacionProductos.js"></script>
    <script src="assets/js/MenuMovil.js"></script>

</body>

</html>