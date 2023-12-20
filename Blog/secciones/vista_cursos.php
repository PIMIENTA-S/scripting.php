<?php include('../plantillas/links.php')?>

<link rel="stylesheet" href="../styles/vista_curso.css">

<?php include('../plantillas/header.php')?>


<div class="main">
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
        <div class="botones">
            <button type="button" class="green">Agregar</button>
            <button type="button" class="yellow">Editar</button>
            <button type="button" class="red">Borrar</button>
        </div>
    </div>


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

