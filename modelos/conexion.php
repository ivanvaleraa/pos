<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=pos",
			            "root",
			            "4149769i");

		$link->exec("set names utf8");

		return $link;

	}

}