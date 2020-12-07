<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
$entrada_actual = conseguirEntrada($db, $_GET['id']);

if (!isset($entrada_actual['id'])) {
    header("Location: index.php");
}
?>

<!-- CABECERA -->
<?php require_once 'includes/cabecera.php'; ?>
<!-- Barra Lateral -->
<?php require_once 'includes/lateral.php'; ?>

<!--CAJA PRINCIPAL -->
<div id="principal">
    <h1>Entradas de <?= $entrada_actual['titulo']; ?></h1>
    
    <a href="categoria.php?id=<?=$entrada_actual['categoria_id']; ?>">
        <h2><?= $entrada_actual['categoria']; ?></h2>
    </a>
    <h4><?= $entrada_actual['fecha']; ?></h4>
    <p>
        <?= $entrada_actual['descripcion']; ?>
    </p>
</div>
    <!-- PIE DE PÁGINA -->
    <?php require_once 'includes/pie.php'; ?>