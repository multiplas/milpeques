<?php
//comprobar estructura de una tabla de la BD del cliente

class MyTableLocal
	{
		//conexi�n a base de datos del cliente
		private $cnst_svr = 'mysql2.camaltec-services.com';
		private $cnst_usr = 'tiendaDemo';
		private $cnst_pwd = 'TUwYVtYU39b3ADSQ';
		private $cnst_dbn = 'tiendaDemo_db';
		private $cnst_prt = '3306';
		private $conexion = null;
		private $usuario = null;
		private $empresa = null;
		private $prefijo = '@CamaltecFiltros!';
		private $sufijo = '?Cierre</>@';	
                
                
		
		function Conectar()
		{
			$this->conexion = mysqli_connect($this->cnst_svr, $this->cnst_usr, $this->cnst_pwd, $this->cnst_dbn, $this->cnst_prt)or die("Tu base de datos no existe o hay algun problema con tu conexi�n!");
			mysqli_set_charset($this->conexion, 'UTF8');
		}
		
		function Desconectar()
		{
			mysqli_close($this->conexion);
			$this->conexion = null;
		}






	function ListarTablasLocales()
        {
		$resultados = array();
			
			$sql = "SHOW FULL TABLES FROM $this->cnst_dbn";
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

//creaci�n de array de tabla bd_user CMS base
class MyTableExample
	{
		//conexi�n a base de datos del CMS base
		private $cnst_svr = 'mysql2.camaltec-services.com';
		private $cnst_usr = 'tiendaDemo';
		private $cnst_pwd = 'TUwYVtYU39b3ADSQ';
		private $cnst_dbn = 'tiendaDemo_db';
		private $cnst_prt = '3306';
		private $conexion = null;
		private $usuario = null;
		private $empresa = null;
		private $prefijo = '@CamaltecFiltros!';
		private $sufijo = '?Cierre</>@';	
                
                
		
		function Conectar()
		{
			$this->conexion = mysqli_connect($this->cnst_svr, $this->cnst_usr, $this->cnst_pwd, $this->cnst_dbn, $this->cnst_prt)or die("Hay algun problema con la base de datos de tu proveedor")or die("Tu base de datos no existeo hay alg�n problema con tu conexi�n!");
			mysqli_set_charset($this->conexion, 'UTF8');
		}
		
		function Desconectar()
		{
			mysqli_close($this->conexion);
			$this->conexion = null;
		}


	function ListarTablasExamples()
        {
		$resultados = array();
			
			$sql = "SHOW FULL TABLES FROM $this->cnst_dbn";
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