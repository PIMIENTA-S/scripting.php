<?php include('../plantillas/links.php')?>

<link rel="stylesheet" href="../styles/vista_curso.css">

<?php include('../plantillas/header.php')?>
<?php include('../secciones/cursos.php')?>


<div class="main">
    <form action="" method="post">
        <div class="cart">
            <div class="cabecera">
                <p>Cursos</p>
            </div>
            <div class="cuerpo">
                <section>
                    <p>ID</p>
                    <input type="text" placeholder="ID">
                </section>
                <section>
                    <p>Nombre</p>
                    <input type="text" placeholder="Nombre">
                </section>
            </div>
        </div>
        <div class="botones">
            <button type="submit" class="green">Agregar</button>
            <button type="submit" class="yellow">Editar</button>
            <button type="submit" class="red">Borrar</button>
        </div>
    </form>


    <div class="formulario">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1 </td>
                    <td> Sitio web con PHP </td>
                    <td> Seleccionar </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>


<?php include('../plantillas/footer.php')?>

