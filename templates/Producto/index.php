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
        </tr>
    <?php } ?>
</table>