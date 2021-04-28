<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class ProductoTable extends Table{
    public function intialize(array $config): void{
        $this->addBehavior('Timestamp');

    }
}