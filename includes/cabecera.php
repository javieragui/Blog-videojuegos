<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog de futbol</title>
        <LINK rel=stylesheet href="static/css/style.css" type="text/css" media=screen>
    </head>
    <body>
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                
                <?php 
                    $categorias = conseguirCategorias($db);
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)): 
                ?>
                            <li>
                                <a href="categoria.php?id=<?=$categoria['id']?>"><?= $categoria['nombre']; ?></a>
                            </li>
                <?php 
                        endwhile; 
                    endif;
                ?>
                
                <li>Sobre mi</li>
                <li>Contacto</li>
            </ul>
        </nav>
    </header>
    <div id="contenedor">
        

