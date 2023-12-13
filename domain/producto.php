<?php

class producto {

    private $id;
    private $codigo;
    private $descripcion;
    private $precio;
    private $consumoPorContenedor;
    private $unidad;


    // Constructor

    public function __construct($id, $codigo, $descripcion, $precio, $consumoPorContenedor, $unidad) {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->consumoPorContenedor = $consumoPorContenedor;
        $this->unidad = $unidad;
    }

    // Getters

    public function getId() {
        return $this->id;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getConsumoPorContenedor() {
        return $this->consumoPorContenedor;
    }

    public function getUnidad() {
        return $this->unidad;
    }

    // Setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setConsumoPorContenedor($consumoPorContenedor) {
        $this->consumoPorContenedor = $consumoPorContenedor;
    }

    public function setUnidad($unidad) {
        $this->unidad = $unidad;
    }

    

}