<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripcion del Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Incluye la hoja de estilos de Font Awesome -->
    <link rel="stylesheet" href="assets/css/DescripcionProducto.css">
    <link rel="stylesheet" href="assets/css/stilos.css">
   <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body class="body">
<?php require_once 'templates/header.html'; ?>
          
            <main class="mainDescripcionProducto">

                <section class="contenedorDosSeccionesPrincipales" >
                        <div class="imgYestrellas">
                           

                            <div class="calificacion">

                                <img src="assets/img/acetaminofen.png" alt="Medicamento">
                                <section class="contenedorDescriccionProducto">
            
                                    <h2>Nombre del Producto</h2>
                                    <p class="descripcion">
                                        Descripción detallada que explica las características, usos, contraindicaciones, etc., del medicamento.
                                    </p>


                                    <div class="precios">
                                        <p class="precio-sin-descuento">$100.00</p>
                                        <p class="precio-con-descuento">$80.00</p>
                                    </div>

                                    

                                    <div class="contendoraBOTONES">
                                        <button class="agregar-al-carrito">Agregar al Carrito</button>
                                        <button class="continuar-compra">Continuar con la Compra</button>
                                    </div>

                                </section>
                             
                                
                            </div>
                       </div>
                         <!-- contenedor que descibe los productos  -->
                        <div class="conte-descripcion-comentario">    <!-- este div me sirve coomo contenedor  a la descriccion y a los comentarios  -->
                                <!-- contedor de las graficas  -->
                                <div class="estrellas">
                                    <h2>Evaluación del Producto</h2>
                                    <div class="clasificacion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1"><i class="fas fa-star"></i></label>
                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2"><i class="fas fa-star"></i></label>
                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3"><i class="fas fa-star"></i></label>
                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4"><i class="fas fa-star"></i></label>
                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5"><i class="fas fa-star"></i></label>
                                    </div>
                                    <!-- 5 graficas que representan las la calificasion por estrellas -->
                                    <div class="estrella">
                                        5 estrellas
                                        <div class="barra">
                                            <div class="votos">0</div>
                                        </div>
                                        <span class="cantidad">0 votos</span>
                                    </div>
                                    
                                    <!-- Repite esta estructura para las demás estrellas -->
                                    <div class="estrella">
                                        4 estrellas
                                        <div class="barra">
                                            <div class="votos">0</div>
                                        </div>
                                        <span class="cantidad">0 votos</span>
                                    </div>
                                    
                                    <div class="estrella">
                                        3 estrellas
                                        <div class="barra">
                                            <div class="votos">0</div>
                                        </div>
                                        <span class="cantidad">0 votos</span>
                                    </div>
                                    
                                    <div class="estrella">
                                        2 estrellas
                                        <div class="barra">
                                            <div class="votos">0</div>
                                        </div>
                                        <span class="cantidad">0 votos</span>
                                    </div>
                                    
                                    <div class="estrella">
                                        1 estrella
                                        <div class="barra">
                                            <div class="votos">0</div>
                                        </div>
                                        <span class="cantidad">0 votos</span>
                                    </div>
                                </div>
                             <!-- el anterior es el contenedor de las graficas  -->
                                <section class="contenedorDejarComentario">

                                    <div class="container">
                                    
                                        <div class="rating">
                                        <h2 class="heading">Califica este producto</h2>
                                        <form action="#" method="post">
                                                <div class="stars">
                                                    <input type="radio" id="star5" class="star-input" name="rating" value="5">
                                                    <label for="star5" class="star-label"><i class="fas fa-star"></i></label>
                                                    <input type="radio" id="star4" class="star-input" name="rating" value="4">
                                                    <label for="star4" class="star-label"><i class="fas fa-star"></i></label>
                                                    <input type="radio" id="star3" class="star-input" name="rating" value="3">
                                                    <label for="star3" class="star-label"><i class="fas fa-star"></i></label>
                                                    <input type="radio" id="star2" class="star-input" name="rating" value="2">
                                                    <label for="star2" class="star-label"><i class="fas fa-star"></i></label>
                                                    <input type="radio" id="star1" class="star-input" name="rating" value="1">
                                                    <label for="star1" class="star-label"><i class="fas fa-star"></i></label>
                                                </div>

                                            <section class="contenedorCampotexUSER">
                                                    <div class="user-icon"><i class="fas fa-user"></i></div>
                                                    <textarea name="comment" id="comment" class="comment-input" placeholder="Escribe tu comentario aquí"></textarea>
                                                    <button type="submit" class="submit-button">Enviar</button>
                                            </section>
                                        </form>
                                        </div>
                                    </div>

                                </section>

                              

                                
            
                        </div>   <!-- este div me sirve coomo contenedor  a la descriccion y a los comentarios  -->    
                </section>  
                <!-- en esta seccion se visualizara los comentarios  que le dejen a los productos  -->
                <section class="visualizarComentarios">

                    <div class="comentarios">
                        <div class="comentario">
                            <img src="assets/img/acetaminofen.png" alt="Usuario 1">
                            <div class="info-comentario">
                                <span class="nombre-usuario">Maria Cruz de Toledo</span>
                                <span class="fecha-publicacion">15 de septiembre de 2023</span>
                                <p class="contenido-comentario">el producto llego muy rapido los recomiendo .</p>
                            </div>
                        </div>
                        
                        <div class="comentario">
                            <img src="assets/img/acetaminofen.png" alt="Usuario 2">
                            <div class="info-comentario">
                                <span class="nombre-usuario">Sangra Correo Toledo</span>
                                <span class="fecha-publicacion">14 de septiembre de 2023</span>
                                <p class="contenido-comentario">muy buen medicamento </p>
                            </div>
                        </div>
                        
                        <!-- Puedes agregar más comentarios siguiendo la misma estructura -->
                    </div>

                </section>      
            </main> 
            <?php require_once 'templates/footer.html'; ?>
            <script src="assets/js/MenuMovil.js"></script>  
     
</body>
</html>