<?php

echo "<h1>Hola!</h1>";

echo $this->tag->linkTo(["registro", "Registrate!", 'class' => 'btn btn-primary']);

if ($usuarios->count() > 0) {
    ?>
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>correo</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="3">Usuarios registrados: <?php echo $usuarios->count(); ?></td>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->nombre; ?></td>
                <td><?php echo $usuario->correo; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php
}