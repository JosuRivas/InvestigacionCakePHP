<h1>Pagina de actualizacion de productos</h1>

<?php 
    echo $this->Form->create($producto);
    echo $this->Form->control('nombre'); 
    echo $this->Form->control('categoria'); 
    echo $this->Form->control('precio'); 
    echo $this->Form->button('Guardar cambios');
    echo $this->Form->end();
?>