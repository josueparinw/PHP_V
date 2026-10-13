<h2>Películas</h2>
<section class="pelis-total">
    <?php foreach ($peliculas as $pelicula): ?>

        <div class="item">
            <?php pintarTarjeta($pelicula); ?>
        </div>

    <?php
    endforeach;
    ?>
</section>


<hr>
<h2>Películas de Acción</h2>
<section class="pelis-accion">
    <?php foreach ($peliculas as $pelicula):
        if ($pelicula["genero"]==="accion"):
    ?>

        <div class="item">
            <?php pintarTarjeta($pelicula); ?>
        </div>

    <?php
        endif;
    endforeach;
    ?>
</section>