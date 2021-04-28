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
}