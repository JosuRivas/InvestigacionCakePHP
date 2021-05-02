<?php
namespace App\Controller;
class ProductoController extends AppController{
    public function initialize():void{
        parent::initialize();
        $this->loadComponent('Paginator');

    }

    public function index(){
        
        $productos = $this->Paginator->paginate($this->Producto ->find('all'));
        $this->set('producto',$productos);
    }

    public function ingresar(){
        $producto = $this->Producto->newEmptyEntity(); // se crea una entidad nueva con los campos de la base de datos
        if ($this->request->is('post')) {
            $producto = $this->Producto->patchEntity($producto, $this->request->getData()); // se llena la nueva entidad
            
            if ($this->Producto->save($producto)) { // si se añadio correctamente
                $this->Flash->success("El producto ha sido añadido");
                return $this->redirect(['action' => 'index']); //redirecciona a la pagina donde los muestra  
            }
            $this->Flash->error("No se pudo añadir el producto");
        }
        $this->set('producto',$producto);
    }

    public function actualizar($nombre){
        $producto = $this->Producto
        ->findByNombre($nombre)
        ->firstOrFail(); // verifica si existe el articulo que se quiere actualizar

        if ($this->request->is(['post','put'])) { //verifica si es un post o un put request
            $this->Producto->patchEntity($producto,$this->request->getData()); //actualiza el articulo con los datos enviados
            if ($this->Producto->save($producto)) {
                $this->Flash->success('El producto ha sido actualizado');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('No se ha podido actualizar el producto');
        }
        $this->set('producto',$producto);
    }

    public function eliminar($nombre){
        $this->request->allowMethod(['post','delete']);

        $producto = $this->Producto->findByNombre($nombre)->firstOrFail();
        if ($this->Producto->delete($producto)) {
            $this->Flash->success('El producto ha sido eliminado');
            return $this->redirect(['action' => 'index']);
        }
    }
}