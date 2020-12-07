<!-- CABECERA -->
<?php require_once 'includes/cabecera.php'; ?>

<!-- Barra Lateral -->
<?php require_once 'includes/lateral.php'; ?>
<!--CAJA PRINCIPAL -->
<div id="principal">
    <h1>Todas las entradas</h1>
    <?php
        $entradas = conseguirEntradas($db, false);
        if(!empty($entradas)):
            while($entrada = mysqli_fetch_assoc($entradas)):
    ?>       
            <article id="entrada">
                <a href="entrada.php?id=<?=$entrada['id'];?>">
                    <h2 id=""><?=$entrada['titulo'];?></h2>
                    <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                    <p><?=substr($entrada['descripcion'], 0, 185) . '...';?></p>
                </a>
            </article>
    <?php 
            endwhile;
        endif;
    ?>
    
<!-- PIE DE PÁGINA -->
<?php require_once 'includes/pie.php'; ?>