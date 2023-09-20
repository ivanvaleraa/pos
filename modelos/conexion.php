<?php

class Conexion{

	static public function conectar(){

		$link = new PDO( 'mysql:host=127.0.0.1:3306;dbname=pos',
            'root',
            '4149769i');

		$link->exec("set names utf8");

		return $link;

	}

}