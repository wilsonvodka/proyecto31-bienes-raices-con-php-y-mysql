<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>>

<main class="contenedor seccion texto-centrado">
    <h2>Casa en venta frente al bosque</h2>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="icono-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni tempora expedita quae qui id
            debitis odit quidem in voluptatum ipsam natus ipsum, voluptas temporibus! Voluptate quia dolorum
            perferendis earum quaerat? Eveniet illo ab fugit doloremque id distinctio ipsa hic ratione vel eos odit
            saepe quo quis quam eum ipsam et aperiam, cumque accusantium perferendis deleniti. Aut nam consequuntur
            nobis.</p>
    </div>

</main>
<?php
incluirTemplate('footer');
?>