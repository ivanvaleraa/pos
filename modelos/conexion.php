<?php

class Conexion{
    //actualizacion para poder conseguir el lastId. El codigo viejo no lo conseguia porque cada vez
    //que se llamaba al metodo static se creaba una nueva llamada y por lo tanto una nueva sesion,
    //impidiendo recuperar el lastId de la sesion que ya estaba abierta, por lo tanto retornaba 0.
    public static $link;
    public static function conectar(){
        if(!self::$link){
            self::$link = new PDO( 'mysql:host=127.0.0.1:3306;dbname=pos',
                'root',
                'root');
        }
		return self::$link;
	}

}