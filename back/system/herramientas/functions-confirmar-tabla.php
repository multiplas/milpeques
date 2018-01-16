<?php
//comprobar estructura de una tabla de la BD del CMS Base

class MyTableCMSBase extends Conexion
	{
		//conexi�n a base de datos del CMS Base

    public function __construct($cnst_dbn){
        parent::__construct($cnst_dbn);
    }

	function ListarTablasCMSBase()
        {
		$resultados = array();
			
			$sql = "SHOW FULL TABLES FROM ".DB_NAME;
			$query = mysqli_query($this->conexion, $sql);
			
			if (mysqli_num_rows($query) > 0)
				while ($assoc = mysqli_fetch_assoc($query))
					$resultados[] = $assoc;

			return $resultados;
        }


	function ComprobarEstructuraTabla($tabla)
        {
            $tabla = mysqli_real_escape_string($this->conexion, htmlspecialchars($tabla));

		$resultados = array();
			
			$sql = "DESCRIBE $tabla";
			$query = mysqli_query($this->conexion, $sql);
			
			if (mysqli_num_rows($query) > 0)
				while ($assoc = mysqli_fetch_assoc($query))
					$resultados[] = $assoc;

			return $resultados;
        }	

	


}

//creaci�n de array de tabla bd_user CMS Cliente
class MyTableCliente extends Conexion
	{
		//conexi�n a base de datos del Cliente
        public function __construct($cnst_dbn){
            parent::__construct($cnst_dbn);
        }


	function ListarTablasCliente()
        {
		$resultados = array();
			
			$sql = "SHOW FULL TABLES FROM ".DB_NAME_CLI;
			$query = mysqli_query($this->conexion, $sql);
			
			if (mysqli_num_rows($query) > 0)
				while ($assoc = mysqli_fetch_assoc($query))
					$resultados[] = $assoc;

			return $resultados;
        }


	function ArrayTablaUsuario($tabla)
        {
            
		$tabla = mysqli_real_escape_string($this->conexion, htmlspecialchars($tabla));

		$resultados = array();
			
		$sql = "DESCRIBE $tabla";
		$query = mysqli_query($this->conexion, $sql);
			
			if (mysqli_num_rows($query) > 0)
				while ($assoc = mysqli_fetch_assoc($query))
					$resultados[] = $assoc;

		return $resultados;

        }
}
?>