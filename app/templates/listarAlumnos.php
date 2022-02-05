<?php ob_start() ?>

<table>
    <tr>
        <th></th>
        <th>Nombre</th>
        <th>Localidad</th>
    </tr>
        <?php foreach ($params['alumnos'] as $alumno) :?>
    <tr>
        <td><img src="<?php echo "\\img\\alumnos". $alumno['fPerfil'] ?>" class="imagenLista" loading="lazy"></td>
        <td><?php echo $alumno['nombre'] ?></td>
        <td><?php echo $alumno['localidad']?></td>
    </tr>
    <?php endforeach; ?>

</table>


<?php 
$contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
