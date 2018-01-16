<?php
session_start();
require_once('system/functions.module');
require_once('system/functions-confirmar-tabla.php');	
	
$System = new MySystem();
$SystemTableLocal = new MyTableLocal();
$SystemTableExample = new MyTableExample();
$System->ControlDeSesiones();
$System->Conectar();
$SystemTableLocal->Conectar();
$SystemTableExample->Conectar();
//Llamado personalizado

	//Buscar actualizaciones en todas las tablas de la base de datos
	if(isset($_POST['comprobarsql'])){
	$cont_actualizar=0;
	$alert_actualizar = ver_tablas_comparar($SystemTableLocal,$SystemTableExample);
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
	//Sólo buscar actualizaciones en la tabla de usuarios
	else if(basename($_SERVER['PHP_SELF'])=='usuarios.php'){
	$ntabla='bd_users';
	$alert_actualizar[$ntabla]['actualizada'] = ver_tabla_idividual('bd_users',$SystemTableLocal,$SystemTableExample);
	
		if($alert_actualizar[$ntabla]['actualizada']==TRUE){
			$alert_actualizar[$ntabla]['mensaje']="La tabla $ntabla ha sufrido modificaciones.";
			enviar_mail_actualizar($System,$alert_actualizar);
		}
	}

			function ver_tablas_comparar($SystemTableLocal,$SystemTableExample){
				$tablas_locales = $SystemTableLocal->ListarTablasLocales();
				$tablas_ejemplo = $SystemTableExample->ListarTablasExamples();
					foreach ($tablas_locales as $itemT ) { 
						$alert_act=FALSE;
						$i++;
						$ntabla=$itemT['Tables_in_tiendaDemo_db'];
						$alert_actualizar[$ntabla]['actualizada'] = ver_tabla_idividual($ntabla,$SystemTableLocal,$SystemTableExample);
							if($alert_actualizar[$ntabla]['actualizada']==TRUE)
							$alert_actualizar[$ntabla]['mensaje']="$ntabla";
							else
							$alert_actualizar[$ntabla]['mensaje']="";
					}
				
			return $alert_actualizar;
			}

			function ver_tabla_idividual($tabla,$SystemTableLocal,$SystemTableExample){
				//Comprobando estructura de cada tabla
				$estructura_tabla = $SystemTableLocal->ComprobarEstructuraTabla($tabla);
				
				//Creando array de ejemplo de tabla bd_user para comparar
				$array_tabla_ejemplo = $SystemTableExample->ArrayTablaUsuario($tabla);
			
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
			//Enviando email de notficación a soporte
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
		$SystemTableLocal->Desconectar();
		$SystemTableExample->Desconectar();
		}
?>