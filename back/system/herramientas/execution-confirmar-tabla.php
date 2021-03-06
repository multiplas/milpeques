<?php
session_start();
require_once "system/config/config_db_cms.php";
require_once "system/config/conectar_cms.php";
require_once('system/functions.module');
require_once('system/herramientas/functions-confirmar-tabla.php');	
	
$System = new MySystem("BD_CLIENTE");
$SystemTableCMSBase = new MyTableCMSBase(NULL);
$SystemTableCliente = new MyTableCliente("BD_CLIENTE");
$System->ControlDeSesiones();

//Llamado personalizado

	//Buscar actualizaciones en todas las tablas de la base de datos
	if(isset($_POST['comprobarsql'])){
	$cont_actualizar=0;
	$alert_actualizar = ver_tablas_comparar($SystemTableCMSBase,$SystemTableCliente);
		foreach ($alert_actualizar as $alertTabla ) {
			if($alertTabla['actualizada']==TRUE) 
			$cont_actualizar++;
		}
		if($cont_actualizar>0){
		enviar_mail_actualizar($System,$alert_actualizar);
		}
		else{
		$alert_actualizar=FALSE;
		}
	}
	//S�lo buscar actualizaciones en la tabla de usuarios
	else if(basename($_SERVER['PHP_SELF'])=='usuarios.php'){
	$ntabla='bd_users';
	$alert_actualizar[$ntabla]['actualizada'] = ver_tabla_idividual('bd_users',$SystemTableCMSBase,$SystemTableCliente);
	
		if($alert_actualizar[$ntabla]['actualizada']==TRUE){
			$alert_actualizar[$ntabla]['mensaje']="$ntabla";
			enviar_mail_actualizar($System,$alert_actualizar);
		}
	}

			function ver_tablas_comparar($SystemTableCMSBase,$SystemTableCliente){
				$tablas_locales = $SystemTableCMSBase->ListarTablasCMSBase();
				$tablas_ejemplo = $SystemTableCliente->ListarTablasCliente();


				$logitud_tabla_local=count($tablas_locales);
				$logitud_tabla_ejemplo=count($tablas_ejemplo);
					
					foreach ($tablas_locales as $itemT ) { 
						$alert_act=FALSE;
						$i++;
						$ntabla=$itemT['Tables_in_tiendaDemo_db'];
						$alert_actualizar[$ntabla]['actualizada'] = ver_tabla_idividual($ntabla,$SystemTableCMSBase,$SystemTableCliente);
							if($alert_actualizar[$ntabla]['actualizada']==TRUE)
							$alert_actualizar[$ntabla]['mensaje']="$ntabla";
							else
							$alert_actualizar[$ntabla]['mensaje']="";
					}
					
					foreach ($tablas_ejemplo as $itemT ) { 
						$alert_act=FALSE;
						$i++;
						$ntabla=$itemT['Tables_in_pruebadb_mysql'];
						$alert_actualizar[$ntabla]['actualizada'] = ver_tabla_idividual($ntabla,$SystemTableCMSBase,$SystemTableCliente);
							if($alert_actualizar[$ntabla]['actualizada']==TRUE)
							$alert_actualizar[$ntabla]['mensaje']="$ntabla";
							else
							$alert_actualizar[$ntabla]['mensaje']="";
					
					}
				
			return $alert_actualizar;
			
			}

			function ver_tabla_idividual($tabla,$SystemTableCMSBase,$SystemTableCliente){
				//Comprobando estructura de cada tabla
				$estructura_tabla = $SystemTableCMSBase->ComprobarEstructuraTabla($tabla);
				
				//Creando array de ejemplo de tabla bd_user para comparar
				$array_tabla_ejemplo = $SystemTableCliente->ArrayTablaUsuario($tabla);
			
				foreach ($estructura_tabla as $item ) { 
    					if (!in_array($item, $array_tabla_ejemplo)){ 
        				$alert_actualizar=TRUE;
    					} 
				}
				

				$logitud_tabla_local=count($estructura_tabla);
				$logitud_tabla_ejemplo=count($array_tabla_ejemplo);
			
				if($logitud_tabla_local > $logitud_tabla_ejemplo || $logitud_tabla_local < $logitud_tabla_ejemplo)
				$alert_actualizar=TRUE;
				return $alert_actualizar;
				
			}
			
			function enviar_mail_actualizar($System,$alert_actualizar){
			//Enviando email de notficaci�n a soporte
				$para="soporte@camaltec.es";
				
				$asunto="Notificacion de actualizacion de tablas"; 
				$mensajeE="<h3>Las siguientes tablas necesitan ser actualizadas:</h3><br><br>";

				foreach ($alert_actualizar as $alertTabla ) {
					if($alertTabla['actualizada']==TRUE){
					$mensajeE.="- ".$alertTabla['mensaje']."<br>";
					}
				}

				$mensajeE.="<br><br><br>Por favor ponerse en contacto con la web <b>".$_SERVER['SERVER_NAME']."</b> para coordinar dicha actualizacion.";
				$envio_mail= $System->EnviarEmail($para, $asunto, $mensajeE);
			}


		function desconectar_local_example(){

		}
?>