<h2>Llene el formulario para registrarse</h2>

<?php echo $this->tag->form('registro/registro') ?>

<p>
    <label for="nombre">Nombre</label>
    <?php echo $this->tag->textField("nombre") ?>
</p>

<p>
    <label for="correo">Correo</label>
    <?php echo $this->tag->textField("correo") ?>
</p>

<p>
    <?php echo $this->tag->submitButton(["Registrar", 'class' => 'btn btn-primary']) ?>
</p>

<?php echo $this->tag->endForm() ?>
