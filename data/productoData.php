<?php

include_once 'data.php';
include '../domain/producto.php';

class productoData extends data{


    function insertarTBProducto($producto){

        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        // Consulta para obtener el último ID
        $queryGetLastId = "SELECT MAX(id) AS id FROM tb_producto";
        $stmt = $conn->prepare($queryGetLastId);
        $stmt->execute();
        $stmt->bind_result($productoId);

        if ($stmt->fetch()) {
            $productoId++;
        } else {
            $productoId = 1;
        }
        $stmt->close();

        // Consulta preparada para la inserción
        $queryInsert = "INSERT INTO tb_producto (id , codigo, descripcion, precio, consumocontenedor, unidad) 
                        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($queryInsert);
        if ($stmt) {
            $stmt->bind_param("iisiis", $productoId, $producto->getCodigo(), 
                $producto->getDescripcion(), $producto->getPrecio(), $producto->getConsumoPorContenedor(), $producto->getUnidad());
            
            $result = $stmt->execute();
            
            $stmt->close();
        } else {
            // Handle error with the prepared statement
            $result = false;
        }
    
        $conn->close();
    
        return $result;
    }

    function getAllTBProducto(){

        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $productoId = 0;
        $querySelect = "SELECT * FROM tb_producto";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $producto = [];
        while ($row = mysqli_fetch_array($result)) {
        
            $currentProducto = new producto($row['id'], $row['codigo'], $row['descripcion'], $row['precio'], $row['consumocontenedor'], $row['unidad'] );
            array_push($producto, $currentProducto);
        }
        return $producto;
    }
    function getAllTBProductoById($id){

        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $productoId = 0;
        $querySelect = "SELECT * FROM tb_producto WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $producto = [];
        $rows = mysqli_num_rows($result);

        if ($rows > 0) {
            $producto = $result->fetch_array();
        }
        return $producto;
    }

    //metodo de eliminar

    function deleteTBProducto($id){

        
       
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryDelete = "DELETE FROM tb_producto WHERE id = $id";
        $result = mysqli_query($conn, $queryDelete);
        mysqli_close($conn);
        return $result;
    }
}