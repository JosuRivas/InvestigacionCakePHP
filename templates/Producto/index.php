<h1>Listado de productos</h1>
<?=$this->Html->link('Añadir producto',['action'=> 'ingresar']); ?>
<table>
    <tr>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Precio unitario</th>
    </tr>
    <?php foreach($producto as $product){?>
        <tr>
            <td>
                <?= $product->nombre ?>
            </td>
            <td>
                <?= $product->categoria ?>
            </td>
            <td>
                <?= $product->precio ?>
            </td>
            <td>
                <?= $this->Html->link('Editar',['action' => 'actualizar',$product->nombre]) ?>
            </td>
            <td>
                <?= $this->Form->postLink('Eliminar', ['action' => 'eliminar',$product->nombre],['confirm' =>'Esta seguro que desea eliminar?']) ?>
            </td>
        </tr>
    <?php } ?>
</table>