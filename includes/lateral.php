<?php require_once 'includes/helpers.php'; ?>

<aside id="sidebar">

    <?php if(isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="bloque">
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos']; ?></h3>
            <!-- Botones -->
            <a class="boton boton-verde" href="cerrar.php">Crear entradas</a>
            <a class="boton" href="cerrar.php">Crear categoria</a>
            <a class="boton boton-naranja" href="cerrar.php">Mis datos</a>
            <a class="boton boton-rojo" href="cerrar.php">Cerrar sesión</a>
        </div>
    <?php endif; ?>

    <div id="login" class="bloque">
        <h3>Identificate</h3>

        <?php if(isset($_SESSION['error_login'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['error_login']; ?>
            </div>
        <?php endif; ?>
        
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email" id="email"/>

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password"/>

            <input type="submit" value="Entrar"/>
        </form>
    </div>
    <div id="register" class="bloque">
        <h3>Registrate</h3>

        <!-- MOSTRAR ERRORES -->
        <?php if (isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito">
                <?php echo $_SESSION['completado']; ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-exito">
                <?php $_SESSION['errores']['general']; ?>
            </div>
        <?php endif; ?>

        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

            <label for="email">Email</label>
            <input type="text" name="email" id="email"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

            <input type="submit" name="submit" value="Registrar"/>
        </form>
        <?php borrarErrores(); ?>
    </div>
</aside>


