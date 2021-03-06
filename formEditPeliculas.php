<?php
    $cod_pelicula=$_GET["cod_pelicula"];
    require_once "conexion.php";
    $sql="SELECT cod_pelicula,nombre,genero,descripcion,stock,disponibles FROM peliculas WHERE cod_pelicula=".$cod_pelicula;
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    $fila=mysqli_fetch_assoc($resultado);
    mysqli_close($link);
?>
<?php
    require_once "templates/header.php";
    require_once "validar.php";
    $titulo="Editar una pelicula";
?>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <?php require_once "templates/nav.php"; ?>
    </div>
    <div class="container" id="top">
        <h2><?php echo $titulo; ?></h2><br>
        <!--desarrollo del proyecto-->

        <form action="editPeliculas" method="post" class="form-horizontal col-md-8 col-lg-6 col-lg-offset-3 col-md-offset-2" style="background-color: #2b669a;padding: 15px;color: white;border-radius: 7px">
            <fieldset>
                <div class="form-group">
                    <label for="inputUser" class="col-lg-2 control-label">Nombre</label>
                    <div class="col-lg-10">
                        <input class="form-control" id="inputUser" placeholder="Nombre" type="text" name="nombre" value="<?php echo $fila["nombre"]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Genero</label>
                    <div class="col-lg-10">
                        <input class="form-control" id="inputPassword" placeholder="Genero" type="text" name="genero" value="<?php echo $fila["genero"]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNombre" class="col-lg-2 control-label">Descripcion</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" name="descripcion" id="" cols="50" rows="3" placeholder="Descripcion de la pelicula"><?php echo $fila["descripcion"]; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputApellido" class="col-lg-2 control-label">Stock</label>
                    <div class="col-lg-10">
                        <input class="form-control" id="inputApellido" placeholder="Cantidad de peliculas" type="text" name="stock" value="<?php echo $fila["stock"]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Disponibles</label>
                    <div class="col-lg-10">
                        <input class="form-control" id="inputEmail" placeholder="Peliculas disponibles" type="text" name="disponibles" value="<?php echo $fila["disponibles"]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-5">
                        <input type="hidden" name="cod_pelicula" value="<?php echo $cod_pelicula; ?>">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>

    <div id="footer"><?php require_once "templates/pie.php"; ?></div>

</body>
</html>