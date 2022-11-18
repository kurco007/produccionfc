<?php get_header(); ?>

</div>
<div class="area-produccion">

    <div class="produccion">
        <div class="seccion">
            <div class="seccion1">
                <div class="coyotas">
                    <h2>Coyotas</h2>
                    <table style="width: 100%;">
                        <tr>
                            <th>Espigueros Totales</th>
                            <th>Espigueros y charolas por Sabor</th>

                        </tr>
                    </table>
                    <div class="contenido">
                        <div class="estantes">

                            <h1> <?php the_field('espigueros_totales_coyotas'); ?></h1>
                        </div>

                        <div class="sabores">
                            <div class="cantidad">
                                <p> <?php the_field('cajeta_coyotas'); ?> y
                                    <?php the_field('charolas_cajeta_coyotas'); ?> </p>
                                <p> <?php the_field('jamoncillo'); ?> y
                                    <?php the_field('charolas_jamoncillo_coyotas'); ?> </p>
                                <p> <?php the_field('piloncillo'); ?> y
                                    <?php the_field('charolas_piloncillo_coyotas'); ?> </p>
                                <p> <?php the_field('nuez'); ?> y <?php the_field('charolas_nuez_coyotas'); ?> </p>

                            </div>
                            <div class="sabor">
                                <p>Cajeta</p>
                                <p>Jamoncillo</p>
                                <p>Piloncillo</p>
                                <p>Nuez</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mini-coyotas">
                    <h2>Mini Coyotas</h2>
                    <table style="width: 100%;">
                        <tr>
                            <th>Espiqueros Totales</th>
                            <th>Espigueros por Sabor</th>
                        </tr>
                    </table>
                    <div class="contenido">
                        <div class="estantes">
                            <h1> <?php the_field('espigueros_totales_mini'); ?></h1>
                        </div>
                        <div class="sabores">
                            <div class="cantidad">
                                <p> <?php the_field('cajeta_mini'); ?> y <?php the_field('charolas_cajeta_mini'); ?></p>
                                <p> <?php the_field('lechera_mini'); ?> y <?php the_field('charolas_lechera_mini'); ?>
                                </p>

                            </div>
                            <div class="sabor">
                                <p>Cajeta</p>
                                <p>Lechera</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seccion2">
                <div class="empanadas">
                    <h2>Empanadas</h2>
                    <table style="width: 100%;">
                        <tr>
                            <th>Espigueros Totales</th>
                            <th>Espiguero por Sabor</th>
                        </tr>
                    </table>
                    <div class="contenido">
                        <div class="estantes">
                            <h1> <?php the_field('espigueros_totales_empanadas'); ?></h1>
                        </div>
                        <div class="sabores">
                            <div class="cantidad">
                                <p> <?php the_field('cajeta_empanadas');  ?> y
                                    <?php the_field('charolas_cajeta_empanadas'); ?></p>
                                <p> <?php the_field('lechera_empanadas'); ?> y
                                    <?php the_field('charolas_lechera_empanadas'); ?></p>
                            </div>

                            <div class="sabor">
                                <p>Cajeta</p>
                                <p>Lechera</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="coricos">
                    <h2>Coricos</h2>
                    <table style="width: 100%;">
                        <tr>
                            <th>Espigueros Totales</th>
                            <th>Charolas totales</th>
                        </tr>
                    </table>
                    <div class="contenido">
                        <div class="estantes">
                            <h1> <?php the_field('espigueros_totales_coricos'); ?></h1>
                        </div>
                        <div class="sabores contenido">
                            <div class="estantes">
                                <h1> <?php the_field('total_de_charolas'); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slider">
</div>