<?php

include '../data/productoData.php';

class registroProductoBusiness{

    private $productoData;

    public function __construct(){
        $this->productoData = new productoData();
    }


    public function insertarTBProducto($producto){
        return $this->productoData->insertarTBProducto($producto);
    }

    public function getAllTBProducto(){
        return $this->productoData->getAllTBProducto();
    }

    public function getProductoById($id){
        return $this->productoData->getProductoById($id);
    }

    public function actualizarTBProducto($producto){
        return $this->productoData->actualizarTBProducto($producto);
    }

    public function deleteTBProducto($id){
       
        return $this->productoData->deleteTBProducto($id);
    }
}