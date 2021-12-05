<?php
    require 'includes/app.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <img loading="lazy" src="build/img/blog3.jpg" alt="imagen">
            </picture>
            <div class="texto-nosotros">
                <strong class="negrita">25 Años de Experiencia</strong>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, ratione minus temporibus rerum laboriosam dicta tenetur ipsa magnam laudantium sunt asperiores maxime. Rem quos nisi odio id asperiores officia. Voluptatum maiores suscipit sequi, temporibus odio fugit cum sunt ratione nostrum quisquam at. Rerum quo quibusdam blanditiis voluptas. Similique, esse ab. Necessitatibus quae eius, perspiciatis voluptas cum numquam velit nisi beatae aspernatur ad. Voluptatem, consequatur. Officiis odio obcaecati perferendis perspiciatis repellendus est culpa. Accusamus recusandae inventore voluptatum nostrum facilis omnis aliquid quidem dignissimos, voluptatem doloribus, beatae quae ut, dolore maiores! Hic illum, eius, ipsam soluta sint recusandae voluptates maxime fugiat sed quis totam inventore iste nisi error voluptas. Rem alias esse quas excepturi consectetur amet veritatis voluptates dolore, labore maxime assumenda porro harum architecto, atque magni voluptate ducimus quisquam nihil, dolorem doloribus beatae facere accusantium? Tenetur aliquid aperiam rerum nesciunt, rem natus ducimus, nihil eos ratione maiores inventore officia ipsam quisquam illum tempore id eveniet quis saepe repellendus magnam corporis iste hic? Ex repudiandae minima rem dicta perspiciatis fugiat corrupti repellat eaque nesciunt fugit. Ipsam temporibus enim provident doloremque veritatis excepturi dolores delectus eaque quae fuga! Doloribus vero provident mollitia dolore animi, minus commodi non quisquam iure itaque, vitae molestias? Mollitia.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia delectus aspernatur, ipsa alias omnis suscipit. Laboriosam labore voluptatibus et laborum officiis delectus blanditiis similique ipsam saepe facere doloribus alias iure, ipsa debitis cumque, sint deleniti natus repudiandae! Dignissimos, quod? Nihil totam similique quas corporis sapiente eaque maxime! Praesentium corporis culpa, corrupti provident, ex est fugit nobis, porro molestiae ipsum reprehenderit.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>

    <?php incluirTemplate('footer'); ?>