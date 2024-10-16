<?php

require_once "conexion.php";

class ModeloProveedores{

    /*=============================================
    CREAR CATEGORIA
    =============================================*/

    static public function mdlIngresarProveedor($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(proveedor) VALUES (:proveedor)");

        $stmt->bindParam(":proveedor", $datos, PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";

        }else{
            echo 'aa';
            die;
            return "error";
        }

        $stmt->close();
        $stmt = null;

    }

    /*=============================================
    MOSTRAR Proveedores
    =============================================*/

    static public function mdlMostrarProveedores($tabla, $item, $valor){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }
        $stmt -> close();
        $stmt = null;
    }

    /*=============================================
    EDITAR CATEGORIA
    =============================================*/

    static public function mdlEditarProveedor($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET proveedor = :proveedor WHERE id = :id");

        $stmt -> bindParam(":proveedor", $datos["proveedor"], PDO::PARAM_STR);
        $stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }else{

            return "error";

        }

        $stmt->close();
        $stmt = null;

    }

    /*=============================================
    BORRAR CATEGORIA
    =============================================*/

    static public function mdlBorrarProveedor($tabla, $datos){


        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";

        }else{

            return "error";

        }

        $stmt -> close();

        $stmt = null;

    }

}

