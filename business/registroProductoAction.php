<?php
include_once 'registroProductoBusiness.php';
if(isset($_POST['create'])){
    if(isset($_POST['codigo']) && isset($_POST['descripcion']) && isset($_POST['precio'])
     && isset($_POST['consumoPorContenedor']) && isset($_POST['unidad'])){

        $codigo = $_POST['codigo'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $consumoPorContenedor = $_POST['consumoPorContenedor'];
        $unidad = $_POST['unidad'];
        

        if(strlen($codigo) > 0 && strlen($descripcion) > 0 && strlen($precio) > 0 && strlen($consumoPorContenedor) > 0
         && strlen($unidad) > 0){

            $producto = new producto(0, $codigo, $descripcion, $precio, $consumoPorContenedor, $unidad);
            $productoBusiness = new registroProductoBusiness();
            $result = $productoBusiness->insertarTBProducto($producto);

            if($result == 1){
                session_start();
                $_SESSION['resultadoRegistro'] = 'Producto registrado con exito!';
              
                header("Location: ../view/registroProductoView.php?success");

            }else{
                session_start();
                $_SESSION['resultadoRegistro'] = 'Error al registrar el producto!';
              
                header("Location: ../view/registroProductoView.php?error=dataBase");
            }

        }else{
            header("Location: ../view/registroProductoView.php?error=emptyField");
        }
    }else{
        header("Location: ../view/registroProductoView.php?error=error");
    }

}else if(isset($_GET['delete'])){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            if(strlen($id) > 0){
                $productoBusiness = new registroProductoBusiness();
                $result = $productoBusiness->deleteTBProducto($id);

                if($result == 1){
                    session_start();
                    $_SESSION['resultadoRegistro'] = 'Producto eliminado con exito!';
                
                    header("Location: ../view/registroProductoView.php?success");

                }else{
                    session_start();
                    $_SESSION['resultadoRegistro'] = 'Error al eliminar el producto!';
                
                    header("Location: ../view/registroProductoView.php?error=dataBase");
                }
            
            }else{
                header("Location: ../view/registroProductoView.php?error=error");
            }
    }
}