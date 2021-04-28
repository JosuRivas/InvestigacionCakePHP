<h1>Pagina de ingreso de productos </h1>

<?php
    echo $this->Form->create($producto); // el argumento significa que vamos a llenar esa entidad en el form
    echo $this->Form->control('nombre'); // campo para el nombre del producto
    echo $this->Form->control('categoria'); //campo para la categoria del producto
    echo $this->Form->control('precio'); // campo para el precio
    echo $this->Form->button('Ingresar producto');
    echo $this->Form->end();

?>