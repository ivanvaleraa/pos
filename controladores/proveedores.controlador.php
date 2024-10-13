<?php

class ControladorProveedores{

    /*=============================================
    CREAR CATEGORIAS
    =============================================*/

    static public function ctrCrearProveedor(){

        if(isset($_POST["nuevaProveedor"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaProveedor"])){

                $tabla = "proveedores";

                $datos = $_POST["nuevaProveedor"];

                $respuesta = ModeloProveedores::mdlIngresarProveedor($tabla, $datos);

                if($respuesta == "ok"){

                    echo'<script>

					swal({
						  type: "success",
						  title: "El proveedor ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {
									window.location = "proveedores-index";
									}
								})

					</script>';

                }


            }else{

                echo'<script>

					swal({
						  type: "error",
						  title: "¡El proveedor no puede ir vacio o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {
							window.location = "proveedores-index";
							}
						})

			  	</script>';

            }

        }

    }

    /*=============================================
    MOSTRAR CATEGORIAS
    =============================================*/

    static public function ctrMostrarProveedores($item, $valor){
        $tabla = "proveedores";

        $respuesta = ModeloProveedores::mdlMostrarProveedores($tabla, $item, $valor);

        return $respuesta;

    }

    /*=============================================
    EDITAR CATEGORIA
    =============================================*/

    static public function ctrEditarProveedor(){

        if(isset($_POST["editarProveedor"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarProveedor"])){

                $tabla = "proveedores";

                $datos = array("proveedor"=>$_POST["editarProveedor"],
                    "id"=>$_POST["idProveedor"]);

                $respuesta = ModeloProveedores::mdlEditarProveedor($tabla, $datos);

                if($respuesta == "ok"){

                    echo'<script>

					swal({
						  type: "success",
						  title: "El proveedor ha sido cambiada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "proveedores-index";

									}
								})

					</script>';

                }


            }else{

                echo'<script>

					swal({
						  type: "error",
						  title: "¡El proveedor no puede ir vacio o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "proveedores";

							}
						})

			  	</script>';

            }

        }

    }

    /*=============================================
    BORRAR CATEGORIA
    =============================================*/

    static public function ctrBorrarProveedor(){

        if(isset($_GET["idProveedor"])){

            $respuesta = ModeloProductos::mdlMostrarProductos("productos", "id_proveedor", $_GET["idProveedor"], "ASC");

            if(!$respuesta){

                $tabla ="proveedores";
                $datos = $_GET["idProveedor"];

                $respuesta = ModeloProveedores::mdlBorrarProveedor($tabla, $datos);

                if($respuesta == "ok"){

                    echo'<script>

						swal({
							  type: "success",
							  title: "El proveedor ha sido borrada correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "proveedores";

										}
									})

						</script>';
                }

            }else{

                echo'<script>

					swal({
						  type: "error",
						  title: "El proveedor no se puede eliminar porque tiene productos",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "proveedores";

									}
								})

					</script>';

            }
        }

    }
}
