<?
//exit();

////////////////////Conexion
$dbhost = "milpeques.com";
$username = "rasty";
$password = "rasty";
$dbname="milpeques_db";

//$dbhost = "electrotenerife.es";
//$username = "electrotenerife";
//$password = "kenmZKN2#";
//$dbname="electrotenerife_db";


$db=mysql_connect ($dbhost, $username, $password);
mysql_select_db ("$dbname",$db);




////////////////Compruebo conexion

$dbuser="$username";
$dbpass="$password";
$chandle = mysql_connect($dbhost, $dbuser, $dbpass) or die("Error conectando a la BBDD");
echo "Conectado correctamente
";
mysql_select_db($dbname, $chandle) or die ($dbname . " Base de datos no encontrada." . $dbuser);
echo "Base de datos " . $database . " seleccionada";
mysql_close($chandle);

echo "<hr>";

$nombredelfichero="csv2.csv";

if (($fichero = fopen("$nombredelfichero", "r")) !== FALSE) {
    while (($datos = fgetcsv($fichero, 5000)) !== FALSE) {

        $contadordelineas = $contadordelineas+1;

        //if ($contadordelineas=="50"){exit();}
        // Procesar los datos.
        //echo "En".$datos[0]."está el valor del primer campo, <br>";
        // en $datos[1] está el valor del segundo campo, etc...

        ////////////Defino Campos
        $refenciafichero = $datos[3];
        $imagendescarga = $datos[1];
        //$nombrefichero = $datos[1];
        //$disponiblesfichero = $datos[2];
        $pvpsiniva = $datos[7];
        $pvpsiniva = str_replace("0.000", "", $pvpsiniva);
        //$pvpsiniva = str_replace(",", "", $pvpsiniva);
        //$imagenreferencia = $refenciafichero.".jpg";
        $iva = "21";
        $disponible ="1"; //0=nodisponible

        //echo $imagen = "http://cedecasa.dyndns.org:81/fotos/$imagenreferencia"."<br>";


        ///////////////////////////Incrementos por %
        ///importe < 1 € le calcularemos un 150 %, a los  > 1€ y < 5€  le calculamos 100% y a  los > 5 € un 100%

        //if ($pvpsiniva<=1){$porcenjateplus = 150;}
       // if ($pvpsiniva==1 and $pvpsiniva<=5){$porcenjateplus = 100;}
       // if ($pvpsiniva>=5){$porcenjateplus = 100;}
        

        //$porciento =  number_format($pvpsiniva*$porcenjateplus/100 ,2);

       // $pvp = $pvpsiniva + $porciento;
        $pvp = $pvpsiniva;







         //////////Actualizo imagenes
         //echo "$imagendescarga <br>";
         $imagen = file_get_contents("$imagendescarga");
         $nombrenuevodelaimagen = "$refenciafichero".".jpg";
         file_put_contents("../imagenesproductos/$nombrenuevodelaimagen", $imagen);
         echo "Actualizada imagen $refenciafichero con $nombrenuevodelaimagen . Desde $imagendescarga <hr>";



         $sqlt = "SELECT * FROM bd_productos WHERE referencia='$refenciafichero'";
         $resultt=MySQL_query($sqlt,$db); 
         $total1resultado = mysql_num_rows($resultt); 


         
 
         if ($total1resultado>="1"){  

          echo "..Actualizo";
          echo " <br> $contadordelineas .- $refenciafichero - Pvp: $pvpsiniva Euros <br> ";
          $totalactualizados = $totalactualizados +1;
          $sql1 = "UPDATE bd_productos SET iva = '$iva', precio='$pvpsiniva', imagenprincipal='$nombrenuevodelaimagen' WHERE referencia='$refenciafichero'  ";
          $resultado1=MySQL_query($sql1,$db); 

         }else {

          echo "..Creo";

      

       echo " <br> $contadordelineas .- $refenciafichero - Pvp: $pvpsiniva Euros <br>";
       $totalcreados = $totalcreados +1;

        $sqli = "INSERT INTO bd_productos
                    VALUES ('', '$nombrefichero', '$nombrein', '$descripcion', '$descripcionin', '$nombrenuevodelaimagen', '$disponiblesfichero', '$disponiblesfichero', '$precio', '$tprecio', '$comprecio', '0', '$descuento', '$descuentoe', '$cat1', '$cat2', '$cat3', '$cat4', '$cat5', '$marca', '0', '$peso', '$refenciafichero', '$iva', '$disponible', '0', '0', '$metatitulo', '$metadescripcion', '0', '$tipo', '$paypalm', '$domicim', '$fDirecta', '$aplazame', '$caplazame', '$caplazame1', '$nfentrada', '$nfsalida', '$NCatAtriF', '0', '$mostraretq', '$mostraretqAgo', '$mostraretqOfe', '$maxDias', '$disponibilidad', '$plazoEnt', '$orden', '$pagotado', '$agotado');";
                                                
       $resulti=MySQL_query($sqli,$db); 
                               





                  }


        


    }
}

echo "<hr>";
echo "Totales: Actualizados ($totalactualizados) - Creados ($totalcreados)";

?>