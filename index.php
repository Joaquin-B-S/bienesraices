<?php
    require 'includes/app.php';
    incluirTemplate('header', $inicio = true); 
?>

    <main class="contenedor seccion">
        <h2>Más Sobre Nosotros</h2>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, doloribus hic natus, sunt rerum adipisci atque earum numquam minus recusandae maiores magnam, est officiis esse ipsum porro. Eum, inventore nobis.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, doloribus hic natus, sunt rerum adipisci atque earum numquam minus recusandae maiores magnam, est officiis esse ipsum porro. Eum, inventore nobis.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, doloribus hic natus, sunt rerum adipisci atque earum numquam minus recusandae maiores magnam, est officiis esse ipsum porro. Eum, inventore nobis.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en venta</h2>
        <?php 
            $limite = 3;
            include 'includes/templates/anuncios.php'
        ?>
        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nulla quaerat provident neque rerum</p>
        <a href="contacto.php" class="boton-amarillo">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="imagen blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito en: <span>20/10/2021</span>por: <span>Admin</span></p>
                    </a>
                    <p>Consejos para construir una terrza en el techo de tu casa</p>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="imagen blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito en: <span>20/10/2021</span>por: <span>Admin</span></p>
                    </a>
                    <p>Maximiza el espacio en tu hogar con esta guia</p>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates reprehenderit error, quos qui at dignissimos eum odio dicta sapiente minus similique, quia nulla ipsam laudantium. Praesentium odit ducimus earum dolorum.
                </blockquote>
                <p>- Joaquin Baeza </p>
            </div>
        </section>
    </div>
<?php incluirTemplate('footer'); ?>