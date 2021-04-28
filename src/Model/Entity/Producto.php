<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Producto extends Entity{
    protected $_accesible = [
        '*'=>true,
        'id'=>false
    ];
}