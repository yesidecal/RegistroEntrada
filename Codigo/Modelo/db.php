<?php
	class Conectar{

		public static function conexion(){
			$conexion = new mysqli("localhost", "root", "", "tienda_ropa");
			$conexion->query("SET NAMES 'utf8'");
			return $conexion;
		}
		
	}
?>