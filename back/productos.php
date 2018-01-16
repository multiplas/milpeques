				<?php require_once('blocks/cabecera.php'); ?>
<?php require_once('system/productos/execution-arbol-categorias.php'); ?>
<style>
    .chzn-container{
        min-width: 150px !important;
    }
    
    .dataTables_filter{
        float: right !important;
        margin-right: 20px !important;
    }
</style>
                <div class="span9" id="content">
					<?php if ($resultaop) { ?>
						<div class="row-fluid">
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<h4>Correcto</h4>
								La operación se ha realizado correctamente.
							</div>
						</div>
					<?php } ?>
                     <script>
                                                      function cambiar(nam){
                                                          var cadena = document.getElementById(nam).value;
                                                          document.getElementById(nam).value = cadena.replace(",",".");
                                                      }
                                                  </script>
                    
                    <script>
                        function cambiarpestana(valor){
                            
                            if(valor == '1'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("1").style.display='block';
                                document.getElementById("p1").classList.add('active'); 
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active'); 
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                                 
                            }else if(valor == '2'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 2){
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("p<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active'); 
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                                
                            }else if(valor == '3'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 3){
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("p<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active'); 
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active'); 
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                            }else if(valor == '4'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 4){
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("p<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active'); 
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                            }else if(valor == '5'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 5){
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("p<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active'); 
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                            }else if(valor == '6'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 6){
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("p<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active'); 
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                            }else if(valor == '7'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 7){
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("p<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active'); 
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                            }else if(valor == '8'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 8){
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("p<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active'); 
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                             }else if(valor == '9'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                        document.getElementById("<?=$idioma[id]?>").style.display='none';
                                        document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='block';
                                document.getElementById("p9").classList.add('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active'); 
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                            }else if(valor == '10'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                        document.getElementById("<?=$idioma[id]?>").style.display='none';
                                        document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='block';
                                document.getElementById("p10").classList.add('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active'); 
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                            }else if(valor == '11'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                        document.getElementById("<?=$idioma[id]?>").style.display='none';
                                        document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='block';
                                document.getElementById("p11").classList.add('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active');  
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                            }else if(valor == '12'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                        document.getElementById("<?=$idioma[id]?>").style.display='none';
                                        document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='block';
                                document.getElementById("p12").classList.add('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active');  
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                            }else if(valor == '13'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                        document.getElementById("<?=$idioma[id]?>").style.display='none';
                                        document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='block';
                                document.getElementById("p13").classList.add('active');  
                                document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                            }else if(valor == '14'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                        document.getElementById("<?=$idioma[id]?>").style.display='none';
                                        document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active');  
                                document.getElementById("14").style.display='block';
                                document.getElementById("p14").classList.add('active');
				document.getElementById("15").style.display='none';
                                document.getElementById("p15").classList.remove('active');
                             }else if(valor == '15'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                        document.getElementById("<?=$idioma[id]?>").style.display='none';
                                        document.getElementById("p<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("1").style.display='none';
                                document.getElementById("p1").classList.remove('active');  
                                document.getElementById("9").style.display='none';
                                document.getElementById("p9").classList.remove('active'); 
                                document.getElementById("10").style.display='none';
                                document.getElementById("p10").classList.remove('active');
                                document.getElementById("11").style.display='none';
                                document.getElementById("p11").classList.remove('active');
                                document.getElementById("12").style.display='none';
                                document.getElementById("p12").classList.remove('active'); 
                                document.getElementById("13").style.display='none';
                                document.getElementById("p13").classList.remove('active');  
				document.getElementById("14").style.display='none';
                                document.getElementById("p14").classList.remove('active');
				document.getElementById("15").style.display='block';
                                document.getElementById("p15").classList.add('active');
                            }
                            
                        }
                    </script>
                    
                    <script>
                        function cambiarpestana2(valor){
                            
                            if(valor == '1'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("e1").style.display='block';
                                document.getElementById("pe1").classList.add('active');   
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active');
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active'); 
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');  
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');  
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '2'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 2){
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');   
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');  
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');  
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');  
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '3'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 3){
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');    
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active');
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active');
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active'); 
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');  
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');  
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 4){
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');   
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');  
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');  
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');  
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '5'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 5){
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');   
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');  
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');  
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');  
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '6'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 6){
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');   
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');  
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');  
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');  
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '7'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 7){
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');   
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');  
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');  
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');  
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '8'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma[id] == 8){
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='block';
                                            document.getElementById("p<?=$idioma[id]?>").classList.add('active'); 
                                        <?php
                                        }else{
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                        }
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');   
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');  
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');  
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');  
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '9'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');  
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active');  
                                document.getElementById("e9").style.display='block';
                                document.getElementById("pe9").classList.add('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');  
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active'); 
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');   
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '10'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');  
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e10").style.display='block';
                                document.getElementById("pe10").classList.add('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');  
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');  
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');  
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '11'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');  
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e11").style.display='block';
                                document.getElementById("pe11").classList.add('active');  
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');  
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');  
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '12'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');  
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');  
                                document.getElementById("e12").style.display='block';
                                document.getElementById("pe12").classList.add('active'); 
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active'); 
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active'); 
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '13'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');  
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');   
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');
                                document.getElementById("e13").style.display='block';
                                document.getElementById("pe13").classList.add('active'); 
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active'); 
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '14'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');  
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');   
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');;   
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');
                                document.getElementById("e14").style.display='block';
                                document.getElementById("pe14").classList.add('active');
				document.getElementById("e15").style.display='none';
                                document.getElementById("pe15").classList.remove('active');
                            }else if(valor == '15'){
                                <?php
                                foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                            document.getElementById("e<?=$idioma[id]?>").style.display='none';
                                            document.getElementById("pe<?=$idioma[id]?>").classList.remove('active'); 
                                        <?php
                                    }
                                ?>
                                document.getElementById("e1").style.display='none';
                                document.getElementById("pe1").classList.remove('active');  
                                document.getElementById("e9").style.display='none';
                                document.getElementById("pe9").classList.remove('active'); 
                                document.getElementById("e10").style.display='none';
                                document.getElementById("pe10").classList.remove('active'); 
                                document.getElementById("e11").style.display='none';
                                document.getElementById("pe11").classList.remove('active');   
                                document.getElementById("e12").style.display='none';
                                document.getElementById("pe12").classList.remove('active');;   
                                document.getElementById("e13").style.display='none';
                                document.getElementById("pe13").classList.remove('active');
                                document.getElementById("e14").style.display='none';
                                document.getElementById("pe14").classList.remove('active');
				document.getElementById("e15").style.display='block';
                                document.getElementById("pe15").classList.add('active');
                            }
                        }
                    </script>
                    
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>IMÁGENES</h4>
                        <p>Se pueden realizar más subidas de imagenés de un producto pinchando en el icono <i style="color: orange;" class="fa fa-picture-o fa-lg"></i> perteneciente al producto del que desea subir más imágenes.</p><p><strong>INFORMACIÓN:</strong> Se raliza de dicha manera para asegurar la subida de la imagen y evitar posibles errores.</p>
                    </div>
                    
			<div class="row-fluid" style="display:none;" id="msj_tope_categoria" class="msj_tope_categoria">
				<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>Aviso!</h4>
					Ya has seleccionado 5 categorías.
				</div>
			</div>




                     <div class="row-fluid">
						<div id="add" class="block" style="height: 0px; visibility: hidden;">
							<div class="navbar navbar-inner block-header">
								<div class="muted pull-left">Subir un Producto</div>
							</div>
							<div class="block-content collapse in">
                                <ul class="nav nav-tabs nav-justified">
                                  <li id="p1" class="active" ><a onclick="javascript:cambiarpestana('1')" href="#">General - Español</a></li>
				  <li id="p15"><a onclick="javascript:cambiarpestana('15')" href="#">Categorias</a></li>
                                  <li id="p14"><a onclick="javascript:cambiarpestana('14')" href="#">Stock</a></li>
                                  <li id="p11"><a onclick="javascript:cambiarpestana('11')" href="#">Tipo producto y visibilidad</a></li>
                                  <li id="p9"><a onclick="javascript:cambiarpestana('9')" href="#">Atributos</a></li>
                                  <li id="p12"><a onclick="javascript:cambiarpestana('12')" href="#">Etiquetas</a></li>
                                  <li id="p13"><a onclick="javascript:cambiarpestana('13')" href="#">SEO</a></li>
                                  <li id="p10"><a onclick="javascript:cambiarpestana('10')" href="#">F. Pago - Financiación</a></li>               
							    <?php
                                    foreach ($idiomas AS $idioma)
                                    {
                                        ?>
                                            <li id="p<?=$idioma[id]?>" ><a href="#" onclick="javascript:cambiarpestana('<?=$idioma[id]?>')"><?=$idioma['nombre']?></a></li>
                                        <?php
                                    }
                                ?>
                                </ul>
								<div class="span12" style="margin-bottom: 50px;">
                                    <form action="productos.php?accion=subirpr" method="post" class="form-horizontal" enctype="multipart/form-data">
								    <div id="1">
									  <fieldset>
										<legend>Subir Nuevo Producto General - Español</legend>
										<div class="control-group">
										  <label class="control-label" for="nnombre">Nombre </label>
										  <div class="controls">
											<input type="text" class="span6" id="nnombre" name="nombre" placeholder="Nombre del producto" required>
											<span style="color: red; font-size: 0.70rem;">Requerido</span>
										  </div>
										</div>
                                        <div class="control-group">
                                          <label class="control-label" for="ncontenido">Contenido</label>
                                          <div class="controls">
                                            <textarea id="ncontenido" name="contenido" class="input-xlarge textarea" style="width: 810px; height: 200px"></textarea>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="nimagen">Imagen</label>
                                            <div class="controls">
                                                <input class="input-file uniform_on" id="nimagen" name="imagen" type="file" required>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                            </div>
                                        </div>
                                        
										<div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="niva">IVA </label>
										  <div class="controls">
											<input type="text" class="span6" id="niva" name="iva" placeholder="I.V.A. %" required onchange="calcula()">
											<span style="color: red; font-size: 0.70rem;">Requerido</span>
										  </div>
										</div>
                                                                                <div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="nprecioiva">Precio con IVA </label>
										  <div class="controls">
                                                                                      <input type="text" class="span6" id="nprecioiva" name="precioiva" placeholder="Precio (Con IVA)" onchange="calcula()">
											<span style="color: red; font-size: 0.70rem;">Opcional</span>
										  </div>
										</div>
                                                                                <script>
                                                                                   function calcula(){
                                                                                        var precio = $('#nprecioiva').val();
                                                                                        precio = precio.replace(",",".");
                                                                                        var iva = $('#niva').val();
                                                                                        if(iva >= 0 && iva != '' && precio >= 0 && precio != ''){
                                                                                            var total = parseFloat(precio) / parseFloat(1 + (parseFloat(iva)/100));
                                                                                            total = total.toFixed(4);
                                                                                            $('#nprecio').val(total);
                                                                                        }else{
                                                                                             $('#nprecio').val('');
                                                                                        }
                                                                                        
                                                                                    }
                                                                                </script>
                                                                                <div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="nprecio">Precio </label>
										  <div class="controls">
											<input type="text" class="span6" id="nprecio" name="precio" placeholder="Precio (Sin IVA)" onchange="cambiar('nprecio')" required>
											<span style="color: red; font-size: 0.70rem;">Requerido</span>
										  </div>
										</div>
                                                                                <div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="tprecio">Texto Alternativo Precio </label>
										  <div class="controls">
											<input type="text" class="span6" id="tprecio" name="tprecio" placeholder="Texto alternativo precio">
											<span style="color: green; font-size: 0.70rem;">Opcional</span>
										  </div>
										</div>
                                                                                <div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="comprecio">Comentario Precio </label>
										  <div class="controls">
											<input type="text" class="span6" id="comprecio" name="comprecio" placeholder="Comentario precio">
											<span style="color: green; font-size: 0.70rem;">Opcional</span>
										  </div>
										</div>
										<div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="ndescuento">Descuento % </label>
										  <div class="controls">
											<input type="text" class="span6" id="ndescuento" name="descuento" placeholder="Descuento %">
											<span style="color: green; font-size: 0.70rem;">Opcional</span>
                                            <p style="color: #09F; font-size: 0.70rem;">Dejar a 0 para no aplicar</p>
										  </div>
										</div>
										<div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="ndescuentoe">Descuento € </label>
										  <div class="controls">
											<input type="text" class="span6" id="ndescuentoe" name="descuentoe" placeholder="Descuento €" onchange="cambiar('ndescuentoe')">
											<span style="color: green; font-size: 0.70rem;">Opcional</span>
                                            <p style="color: #09F; font-size: 0.70rem;">Solo se aplica si el descuento % está a 0. Dejar a 0 para no aplicar</p>
										  </div>
										</div>
										<div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="npeso">Peso </label>
										  <div class="controls">
											<input type="text" class="span6" id="npeso" name="peso" placeholder="Peso KG" required>
											<span style="color: red; font-size: 0.70rem;">Requerido</span>
										  </div>
										</div>
										<div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="nreferencia">Referencia </label>
										  <div class="controls">
											<input type="text" class="span6" id="nreferencia" name="referencia" placeholder="Referencia">
											<span style="color: green; font-size: 0.70rem;">Opcional</span>
										  </div>
										</div>
                                                                                <div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="ndisponibilidad">Disponibilidad </label>
										  <div class="controls">
											<input type="text" class="span6" id="ndisponibilidad" name="disponibilidad" placeholder="Disponibilidad">
											<span style="color: green; font-size: 0.70rem;">Opcional</span>
										  </div>
										</div>
                                                                                <div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="nplazo">Plazo de entrega </label>
										  <div class="controls">
											<input type="text" class="span6" id="nplazo" name="plazoEnt" placeholder="Plazo de entrega">
											<span style="color: green; font-size: 0.70rem;">Opcional</span>
										  </div>
										</div>







                                        <!--div class="control-group">
                                          <label class="control-label" for="ncategoria1">Categoría</label>
                                          <div class="controls">
                                            <select id="ncategoria1" name="categoria1" class="chzn-select span4" required>
                                                <option value="">Selecciona</option>
                                                <?php
                                                    foreach ($listadosalt AS $listado)
                                                    {
                                                        ?>
                                                            <option value="<?=$listado['id']?>"><?=$listado['categoria']?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                            <span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="ncategoria2">Categoría 2</label>
                                          <div class="controls">
                                            <select id="ncategoria2" name="categoria2" class="chzn-select span4">
                                                <option value="">Selecciona</option>
                                               <?php
                                                    foreach ($listadosalt AS $listado)
                                                    {
                                                        ?>
                                                            <option value="<?=$listado['id']?>"><?=$listado['categoria']?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                            <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                            <span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="ncategoria3">Categoría 3</label>
                                          <div class="controls">
                                            <select id="ncategoria3" name="categoria3" class="chzn-select span4">
                                                <option value="">Selecciona</option>
                                                <?php
                                                    foreach ($listadosalt AS $listado)
                                                    {
                                                        ?>
                                                            <option value="<?=$listado['id']?>"><?=$listado['categoria']?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                            <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                            <span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="ncategoria4">Categoría 4</label>
                                          <div class="controls">
                                            <select id="ncategoria4" name="categoria4" class="chzn-select span4">
                                                <option value="">Selecciona</option>
                                                <?php
                                                    foreach ($listadosalt AS $listado)
                                                    {
                                                        ?>
                                                            <option value="<?=$listado['id']?>"><?=$listado['categoria']?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                            <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                            <span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="ncategoria5">Categoría 5</label>
                                          <div class="controls">
                                            <select id="ncategoria5" name="categoria5" class="chzn-select span4">
                                                <option value="">Selecciona</option>
                                                <?php
                                                    foreach ($listadosalt AS $listado)
                                                    {
                                                        ?>
                                                            <option value="<?=$listado['id']?>"><?=$listado['categoria']?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                            <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                            <span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
                                          </div>
                                        </div-->














                                                                                <div class="control-group">
                                              <label class="control-label" for="marca">Marca</label>
                                              <div class="controls">
                                                <select id="marca" name="marca" class="chzn-select span4">
                                                    <option value="">Selecciona</option>
                                                    <?php
                                                    foreach ($listadoMar AS $listado)
                                                    {
                                                        ?>
                                                            <option value="<?=$listado['id']?>"><?=$listado['categoria']?></option>
                                                        <?php
                                                    }
                                                ?>
                                                </select>
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                              </div>
                                            </div>
                                                                                <script>
                                                                                    function cambioTipo(){  
                                                                                        if(document.getElementById('tipo').value == 0 || document.getElementById('tipo').value == 3){
                                                                                            $("#tranNo").attr('style', 'display: none;');
                                                                                            $("#tranSi").attr('style', 'display: block;');
                                                                                        }else{
                                                                                            $("#tranSi").attr('style', 'display: none;');
                                                                                            $("#tranNo").attr('style', 'display: block;');
                                                                                        }
                                                                                    }
                                                                                    
                                                                                </script>
                                        
										<button type="submit" class="btn btn-primary" onclick="return (if ($('#passwordc').val() != $('#rpasswordc').val()) { false; } else { true; });">Subir</button>
										<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button>
									  </fieldset>
                                    </div>
                                        
                                    <div id="11" style="display:none;">
                                        <div class="control-group">
                                          <label class="control-label" for="tipo">Tipo de producto</label>
                                          <div class="controls">
                                              <select id="tipo" name="tipo" class="chzn-select span4" required onchange="cambioTipo();">
                                                <option value="0">Normal - Venta</option>
                                                <option value="3">Normal - Alquiler</option>
                                                <option value="1">Descarga</option>
                                                <option value="2">Inscripción</option>
                                            </select>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                          </div>
                                        </div>                                        
                                        <div class="control-group">
                                          <label class="control-label" for="mostraretq">Mostrar etiqueta tipo Producto</label>
                                          <div class="controls">
                                            <label class="uniform">
                                              <input class="uniform_on" type="checkbox" name="mostraretq" id="mostraretq" checked value="1">
                                              Marcar para definir como visible la etiqueta tipo producto.
                                            </label>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="mostraretqAgo">Mostrar etiqueta Agotado</label>
                                          <div class="controls">
                                            <label class="uniform">
                                              <input class="uniform_on" type="checkbox" name="mostraretqAgo" id="mostraretqAgo" value="1">
                                              Marcar para mostrar la etiqueta de Agotado.
                                            </label>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="pagotado">Producto Agotado</label>
                                          <div class="controls">
                                              <select id="pagotado" name="pagotado" class="chzn-select span4" required>
                                                <option value="0">Seguir Vendiendo</option>
                                                <option value="1">Quitar Botón Añadir</option>
                                                <option value="2">Botón Solicitar Info (Enlazado con contactar)</option>
                                            </select>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                          </div>
                                        </div>  
                                        <div class="control-group">
                                          <label class="control-label" for="agotado">Marcar Producto como Agotado</label>
                                          <div class="controls">
                                              <select id="agotado" name="agotado" class="chzn-select span4" required>
                                                <option value="0">Disponible</option>
                                                <option value="1">Agotado</option>
                                            </select>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                          </div>
                                        </div> 
                                        <div class="control-group">
                                          <label class="control-label" for="mostraretqOfe">Mostrar etiqueta Oferta</label>
                                          <div class="controls">
                                            <label class="uniform">
                                              <input class="uniform_on" type="checkbox" name="mostraretqOfe" id="mostraretqOfe" value="1">
                                              Marcar para mostrar la etiqueta de Oferta.
                                            </label>
                                          </div>
                                        </div>
                                        <div class="control-group" style="display: none" id="tranNo">
                                          <label class="control-label" for="tipo">Transporte</label>
                                          <div class="controls">
                                            SIN TRANSPORTE.
                                          </div>
                                        </div>
                                        <div class="control-group" style="display: block" id="tranSi">
                                          <label class="control-label" for="tipo">Transporte</label>
                                          <div class="controls">
                                            TRANSPORTE POR DEFECTO.
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="ndisponible">Visible/Disponible</label>
                                          <div class="controls">
                                            <label class="uniform">
                                              <input class="uniform_on" type="checkbox" name="ndisponible" id="ndisponible" checked value="1">
                                              Marcar para definir como visible/disponible para comprar
                                            </label>
                                          </div>
                                        </div>
                                         <div class="control-group" style="max-width: 60%;">
										  <label class="control-label" for="norden">Orden </label>
										  <div class="controls">
											<input type="text" class="span6" id="norden" name="orden" placeholder="Orden">
											<span style="color: green; font-size: 0.70rem;">Opcional</span>
										  </div>
										</div>
                                        <!--button type="submit" class="btn btn-primary" onclick="return (if ($('#passwordc').val() != $('#rpasswordc').val()) { false; } else { true; });">Subir</button>
										<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button-->
                                    </div>

					<div id="15" style="display: none">
                                            <fieldset>
						<legend>Categorías</legend>
                                                    <div class="control-group" style="max-width: 60%;">
                                                        				
				
				<div id="nested" style="">
				<ul class="autoCheckbox">
				<?php 
				//Mostrando categorías padres
				foreach($masters as $master){
					//Evaluando si la categoría padre tiene algún hijo
					if($master["have_childrens"]>0){
						$have_childrens=1;
					}
					else{
						$have_childrens=0;
					}
				?>
					<li style="margin: 5px 0px">
						<div class="form-check form-check-inline">
						<input class="form-check-input checkbox-cat" type="checkbox" name="categoria[]" value="<?php echo $master["idcat"]?>">
						<a href="#" data-status="<?php echo $have_childrens?>"
						style="margin: 5px 6px" class="btn btn-default btn-xs btn-folder">
						<i class="fa fa-folder"></i>
						<?php if($have_childrens == 1){?>
						<span class='fa fa-plus-circle'></span>
						<?php }?>
						<?php echo $master["categoria"]?></a>
						<?php
							//Llamando función recursiva para mostrar categorias hijas
							 echo Tree::nested($childrens, $master["idcat"])
						?>
						</div>
					</li>
				<?php
				}
				?>
				</ul>
				</div>
				<span style="color: #09F; font-size: 0.70rem;">*Debe seleccionar hasta un máximo de 5 categorías</span><br>
				<span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
				




                                                      </div>                                                                           
                                        </fieldset>                 
                                        </div>





                                        <div id="14" style="display: none">
                                            <fieldset>
						<legend>Stock</legend>
                                                    <div class="control-group" style="max-width: 60%;">
                                                        <label class="control-label" for="nunidades">Unidades </label>
                                                        <div class="controls">
                                                          <input type="text" class="span6" id="nunidades" name="unidades" placeholder="Unidades en stock" required>
                                                          <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                        </div>
                                                      </div>
                                                      <div class="control-group" style="max-width: 60%;">
                                                        <label class="control-label" for="nstock">Stock Mínimo </label>
                                                        <div class="controls">
                                                          <input type="text" class="span6" id="nstock" name="stock" placeholder="Stock mínimo" required>
                                                          <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                        </div>
                                                      </div>                                                                           
                                        </fieldset>
                                        <!--button type="submit" class="btn btn-primary">Modificar</button>
					<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button-->                                
                                        </div>
                                        <div id="12" style="display: none">
                                            <fieldset>
										<legend>Etiquetas producto</legend>
                                                                                <div class="control-group">
                                                                                
                                            <table>
                                            <tr>
                                        <?php 
                                            $i = 0;
                                            $cont = 0;
                                            foreach ($elemento4 AS $atr){ 
                                                $i++;
                                                if($cont <= 4){
                                                    $cont++;
                                                ?>
                                                    <td style="width:10%;">
                                                    <div class="control-group">
                                                        <label style="text-align:center;"><b><?=$atr['nombre']?></b></label>
                                                        <div style="text-align:center;"><input type="checkbox" name="dispEtiq[]" id="atr<?=$atr['id']?>" value="<?=$atr['id']?>"></div>
                                                    </div>
                                                    
                                                    </td>
                                                <?php
                                                    }else{
                                                        $cont=1;
                                                ?>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="control-group">
                                                            <label style="text-align:center;"><b><?=$atr['nombre']?></b></label>
                                                            <div style="text-align:center;"><input type="checkbox" name="dispEtiq[]" id="atr<?=$atr['id']?>" value="<?=$atr['id']?>"></div>
                                                        </div>

                                                    </td>
                                                <?php
                                                }
                                            }
                                            ?>
                                            </tr>
                                        </table>
                                        </div>
                                        </fieldset>
                                        <!--button type="submit" class="btn btn-primary">Modificar</button>
					<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button-->                                
                                        </div>
                                        
                                        <div id="13" style="display: none">
                                            <fieldset>
						<legend>SEO</legend>
                                                <div class="control-group" style="max-width: 60%;">
                                                    <label class="control-label" for="nmetatitulo">Meta título SEO </label>
                                                    <div class="controls">
                                                      <input type="text" class="span6" id="nmetatitulo" name="metatitulo" placeholder="Meta del titulo para SEO">
                                                    </div>
                                                  </div>
                                                  <div class="control-group" style="max-width: 60%;">
                                                    <label class="control-label" for="nmetadescripcion">Meta descripción SEO </label>
                                                    <div class="controls">
                                                      <input type="text" class="span6" id="nmetadescripcion" name="metadescripcion" placeholder="Meta de la descripción para SEO">
                                                    </div>
                                              </div>                                                                                
                                        </fieldset>
                                        <!--button type="submit" class="btn btn-primary">Modificar</button>
					<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button-->                                
                                        </div>
                                    <div id="9" style="display:none;">
                                        <fieldset>
										<legend>Atributos producto</legend>
                                                                                <div class="control-group">
                                          
                                        <table>
                                            <tr>
                                        <?php 
                                            $i = 0;
                                            $con = 0; 
                                            foreach ($elemento2 AS $atr){ 
                                                $i++;
                                                if($con <= 3){
                                                    $con++;
                                            ?>
                                                <td style="width:10%;">
                                                    <div class="control-group">
                                                        <label style="text-align:center;"><b><?=$atr['nombre']?>: <?=$atr['atributo']?></b></label>
                                                        <div style="text-align:center;"><input type="checkbox" name="disp[]" id="atr<?=$atr['ida']?>" value="<?=$atr['ida']?>"></div>
                                                        <label style="text-align:center;margin-top:5px;">Precio</label>
                                                        <div style="text-align: center"><input style="width: 50%;text-align: center;" type="text" name="precio<?=$atr['ida']?>" placeholder="Precio" value="" />
                                                        <label style="text-align:center;margin-top:5px;">Precio Extra</label>
                                                        <div style="text-align: center"><input style="width: 50%;text-align: center;" type="text" name="precioE<?=$atr['ida']?>" placeholder="Precio Extra" value="" />
                                                        <input class="input-file uniform_on" id="imagenAtr<?=$atr['ida']?>" name="imagenAtr<?=$atr['ida']?>" type="file">
                                                        </div>
                                                    </div>
                                                    
                                                </td>
                                            <?php
                                                }else{
                                                    $con=1;
                                            ?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="control-group">
                                                        <label style="text-align:center;"><b><?=$atr['nombre']?>: <?=$atr['atributo']?></b></label>
                                                        <div style="text-align:center;"><input type="checkbox" name="disp[]" id="atr<?=$atr['ida']?>" value="<?=$atr['ida']?>"></div>
                                                        <label style="text-align:center;margin-top:5px;">Precio</label>
                                                        <input  style="width: 50%;text-align: center;margin-left: 22%;" type="text" name="precio<?=$atr['ida']?>" placeholder="Precio" value="" />
                                                        <label style="text-align:center;margin-top:5px;">Precio Extra</label>
                                                        <div style="text-align: center"><input style="width: 50%;text-align: center;" type="text" name="precioE<?=$atr['ida']?>" placeholder="Precio Extra" value="" />
                                                        <div style="text-align: center"><input class="input-file uniform_on" id="imagenAtr<?=$atr['ida']?>" name="imagenAtr<?=$atr['ida']?>" type="file">
                                                        </div>
                                                    </div>
                                                    
                                                </td>
                                            <?php
                                                }
                                            }
                                            ?>
                                            </tr>
                                        </table>
                                        <label class="control-label" for="nfentrada">Requerir Fecha de Entrada</label>
                                          <div class="controls">
                                            <label class="uniform">
                                              <input class="uniform_on" type="checkbox" name="nfentrada" id="nfentrada" value="0">
                                              Marcar para requerir fecha de entrada
                                            </label>
                                          </div>
                                        </div> 
                                        <div class="control-group">
                                          <label class="control-label" for="nfsalida">Requerir Fecha de Salida</label>
                                          <div class="controls">
                                            <label class="uniform">
                                              <input class="uniform_on" type="checkbox" name="nfsalida" id="nfsalida" value="0">
                                              Marcar para requerir fecha de salida
                                            </label>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="NCatAtriF">Fechas Asociadas con Caegoría de Atributos: </label>
                                          <div class="controls">
                                                <select id="NCatAtriF" name="NCatAtriF" class="chzn-select span4">
                                                    <option value="0">Selecciona</option>
                                                    <?php
                                                        foreach ($listadoCatAtr AS $listado)
                                                        {
                                                            ?>
                                                                <option value="<?=$listado['id']?>"><?=$listado['atributo']?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                                <span style="color: green; font-size: 0.70rem;">Funcionamiento unido a Fecha de Entrada/Salida.</span><br>
                                              </div>
                                        </div>
                                        <div class="control-group">
                                                <label class="control-label" for="CatAtriF">Nº días máximo: </label>
                                                <div class="controls">
                                                      <input type="text" class="span6" id="maximoDias" name="maximoDias" value="0"  placeholder="Días máximos permitidos">
                                                      <span style="color: green; font-size: 0.70rem;">0 para días ilimitados</span><br>
                                                    </div>
                                        </div>                                                
                                                                                
                                        <input type="hidden" name="catributos" value="<?=$i?>" />
                                        <!--button type="submit" class="btn btn-primary" onclick="return (if ($('#passwordc').val() != $('#rpasswordc').val()) { false; } else { true; });">Subir</button-->
                                        </fieldset>
                                    </div>
                                    <div id="10" style="display:none;">
                                        <fieldset>
                                            <legend>F. Pago - Financiación</legend>
                                            <div class="control-group">
                                          <label class="control-label" for="tipo">Pago mensual Paypal</label>
                                          <div class="controls">
                                            <select id="tipo" name="paypalm" class="chzn-select span4" required>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                              <label class="control-label" for="domicim">Pago mensual Domiciliación</label>
                                              <div class="controls">
                                                <select id="domicim" name="domicim" class="chzn-select span4" required>
                                                    <option value="0">No</option>
                                                    <option value="1">Si</option>
                                                </select>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                              </div>
                                            </div>
                                            <script>
                                                function abrirCuota(){
                                                    if(document.getElementById("aplazame").value == 0){
                                                        document.getElementById("vcuota").style.display='none';
                                                    }else{
                                                        document.getElementById("vcuota").style.display='block';
                                                    }
                                                }
                                            </script>
                                        <div class="control-group">
                                              <label class="control-label" for="aplazame">Pago Aplazame</label>
                                              <div class="controls">
                                                  <select id="aplazame" name="aplazame" class="chzn-select span4" required onchange="abrirCuota()">
                                                    <option value="0">No</option>
                                                    <option value="1">Si</option>
                                                </select>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                              </div>
                                            </div>
                                            <div id="vcuota" class="control-group" style="display: none; max-width: 60%;" >
                                              <label class="control-label" for="caplazame1">Cuota Inicial Aplazame</label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="caplazame1" name="caplazame1" placeholder="Cuota inicial Aplazame">
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                              </div><br>
                                              <label class="control-label" for="caplazame">Cuota Aplazame</label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="caplazame" name="caplazame" placeholder="Cuota mensual Aplazame">
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                              </div>
                                            </div>
                                            <script>
                                                function abrirFDir(){
                                                    if(document.getElementById("fDirecta").value == 0){
                                                        document.getElementById("finanDir").style.display='none';
                                                    }else{
                                                        document.getElementById("finanDir").style.display='block';
                                                    }
                                                }
                                            </script>
                                        <div class="control-group">
                                              <label class="control-label" for="fDirecta">Financiación Directa</label>
                                              <div class="controls">
                                                <select id="fDirecta" name="fDirecta" class="chzn-select span4" required onchange="abrirFDir()">
                                                    <option value="0">No</option>
                                                    <option value="1">Si</option>
                                                </select>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                                <p style="color: #09F; font-size: 0.70rem;">La cuota inicial será el precio del producto</p>
                                              </div>
                                            </div>
                                        <div id="finanDir" class="control-group" style="display: none;">
                                        <table>
                                            <tr>
                                        <?php 
                                            $i = 0;
                                            $cont = 0;
                                            $check = "";
                                            $precio = "";
                                            foreach ($elemento3 AS $atr){ 
                                                $i++;
                                                foreach ($elemento33 AS $atra){ 
                                                    if($atra['meses'] == $atr['id_c']){
                                                        $check = "checked";
                                                        $precio = $atra['cuota'];
                                                    }
                                                }
                                                if($cont <= 4){
                                                    $cont++;
                                                ?>
                                                    <td style="width:10%;">
                                                    <div class="control-group">
                                                        <label style="text-align:center;"><b><?=$atr['meses']?> meses + Inicial</b></label>
                                                        <div style="text-align:center;"><input type="checkbox" name="cuotas[]" id="cuo<?=$atr['id_c']?>" value="<?=$atr['id_c']?>" <?=$check?>></div>
                                                        <label style="text-align:center;margin-top:5px;">Precio</label>
                                                        <div><input style="width: 50%;text-align: center;margin-left: 22%;" type="text" name="precioC<?=$atr['id_c']?>" onchange="cambiar('precioC<?=$atr['id_c']?>')" placeholder="Precio" value="<?=$precio?>" /></div>
                                                    </div>
                                                    
                                                    </td>
                                                <?php
                                                    }else{
                                                        $cont=1;
                                                ?>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="control-group">
                                                            <label style="text-align:center;"><b><?=$atr['meses']?> meses + Inicial</b></label>
                                                            <div style="text-align:center;"><input type="checkbox" name="cuotas[]" id="cuo<?=$atr['id_c']?>" value="<?=$atr['id_c']?>" <?=$check?>></div>
                                                            <label style="text-align:center;margin-top:5px;">Precio</label>
                                                            <input  style="width: 50%;text-align: center;margin-left: 22%;" type="text" name="precioC<?=$atr['id_c']?>" placeholder="Precio" value="<?=$precio?>" />
                                                        </div>

                                                    </td>
                                                <?php
                                                }
                                                $check = "";
                                                $precio = "";
                                            }
                                            ?>
                                            </tr>
                                        </table>
                                        </div>
                                            <!--button type="submit" class="btn btn-primary" onclick="return (if ($('#passwordc').val() != $('#rpasswordc').val()) { false; } else { true; });">Subir</button>
                                            <button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button-->
                                        </fieldset>
                                    </div>
                                        
                                    <?php
                                    foreach ($idiomas AS $idioma)
                                    {
                                        if($idioma['id'] == 2){
                                            ?>
                                                <div id="2" style="display:none;">
                                                  <fieldset>
                                                    <legend>Subir Nuevo Producto Inglés</legend>
                                                    <div class="control-group">
                                                      <label class="control-label" for="nnombre">Nombre </label>
                                                      <div class="controls">
                                                        <input type="text" class="span6" id="nnombre" name="nombrein" placeholder="Nombre del producto">
                                                        <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="ncontenido">Contenido</label>
                                                      <div class="controls">
                                                        <textarea id="ncontenido" name="contenidoin" class="input-xlarge textarea" style="width: 810px; height: 200px"></textarea>
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </div>
                                            <?php
                                        }
                                        
                                        if($idioma['id'] == 3){
                                            ?>
                                                <div id="3" style="display:none;">
                                                  <fieldset>
                                                    <legend>Subir Nuevo Producto Alemán</legend>
                                                    <div class="control-group">
                                                      <label class="control-label" for="nnombre">Nombre </label>
                                                      <div class="controls">
                                                        <input type="text" class="span6" id="nnombre" name="nombrea" placeholder="Nombre del producto">
                                                        <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="ncontenido">Contenido</label>
                                                      <div class="controls">
                                                        <textarea id="ncontenido" name="contenidoa" class="input-xlarge textarea" style="width: 810px; height: 200px"></textarea>
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </div>
                                            <?php
                                        }
                                        
                                        if($idioma['id'] == 4){
                                            ?>
                                                <div id="4">
                                                  <fieldset>
                                                    <legend>Subir Nuevo Producto Francés</legend>
                                                    <div class="control-group">
                                                      <label class="control-label" for="nnombre">Nombre </label>
                                                      <div class="controls">
                                                        <input type="text" class="span6" id="nnombre" name="nombref" placeholder="Nombre del producto">
                                                        <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="ncontenido">Contenido</label>
                                                      <div class="controls">
                                                        <textarea id="ncontenido" name="contenidof" class="input-xlarge textarea" style="width: 810px; height: 200px"></textarea>
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </div>
                                            <?php
                                        }
                                        
                                        if($idioma['id'] == 5){
                                            ?>
                                                <div id="5" style="display:none;">
                                                  <fieldset>
                                                    <legend>Subir Nuevo Producto Italiano</legend>
                                                    <div class="control-group">
                                                      <label class="control-label" for="nnombre">Nombre </label>
                                                      <div class="controls">
                                                        <input type="text" class="span6" id="nnombre" name="nombreit" placeholder="Nombre del producto">
                                                        <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="ncontenido">Contenido</label>
                                                      <div class="controls">
                                                        <textarea id="ncontenido" name="contenidoit" class="input-xlarge textarea" style="width: 810px; height: 200px"></textarea>
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </div>
                                            <?php
                                        }
                                        
                                        if($idioma['id'] == 6){
                                            ?>
                                                <div id="6" style="display:none;">
                                                  <fieldset>
                                                    <legend>Subir Nuevo Producto Portugués</legend>
                                                    <div class="control-group">
                                                      <label class="control-label" for="nnombre">Nombre </label>
                                                      <div class="controls">
                                                        <input type="text" class="span6" id="nnombre" name="nombrep" placeholder="Nombre del producto">
                                                        <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="ncontenido">Contenido</label>
                                                      <div class="controls">
                                                        <textarea id="ncontenido" name="contenidop" class="input-xlarge textarea" style="width: 810px; height: 200px"></textarea>
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </div>
                                            <?php
                                        }
                                        
                                        if($idioma['id'] == 7){
                                            ?>
                                                <div id="7" style="display:none;">
                                                  <fieldset>
                                                    <legend>Subir Nuevo Producto Catalán</legend>
                                                    <div class="control-group">
                                                      <label class="control-label" for="nnombre">Nombre </label>
                                                      <div class="controls">
                                                        <input type="text" class="span6" id="nnombre" name="nombreca" placeholder="Nombre del producto">
                                                        <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="ncontenido">Contenido</label>
                                                      <div class="controls">
                                                        <textarea id="ncontenido" name="contenidoca" class="input-xlarge textarea" style="width: 810px; height: 200px"></textarea>
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </div>
                                            <?php
                                        }
                                        
                                        if($idioma['id'] == 8){
                                            ?>
                                                <div id="8" style="display:none;">
                                                  <fieldset>
                                                    <legend>Subir Nuevo Producto Ruso</legend>
                                                    <div class="control-group">
                                                      <label class="control-label" for="nnombre">Nombre </label>
                                                      <div class="controls">
                                                        <input type="text" class="span6" id="nnombre" name="nombreru" placeholder="Nombre del producto">
                                                        <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="ncontenido">Contenido</label>
                                                      <div class="controls">
                                                        <textarea id="ncontenido" name="contenidoru" class="input-xlarge textarea" style="width: 810px; height: 200px"></textarea>
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </div>
                                            <?php
                                        }
                                    
                                    }
                                ?>
                                    </form>
								</div>
							</div>
						</div>
                    </div>
						<?php if (@$elemento != null && $resultaop != 1) { ?>
                     <div class="row-fluid">
							<div id="edi" class="block">
								<div class="navbar navbar-inner block-header">
									<div class="muted pull-left">Editar un Producto</div>
								</div>
								<div class="block-content collapse in">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li id="pe1" class="active" ><a onclick="javascript:cambiarpestana2('1')" href="#">General - Español</a></li> 
					<li id="pe15"><a onclick="javascript:cambiarpestana2('15')" href="#">Categorias</a></li>
                                        <li id="pe14"><a onclick="javascript:cambiarpestana2('14')" href="#">Stock</a></li>
                                        <li id="pe11"><a onclick="javascript:cambiarpestana2('11')" href="#">Tipo producto y visibilidad</a></li>
                                        <li id="pe9"><a onclick="javascript:cambiarpestana2('9')" href="#">Atributos</a></li>
                                        <li id="pe12"><a onclick="javascript:cambiarpestana2('12')" href="#">Etiquetas</a></li>
                                        <li id="pe13"><a onclick="javascript:cambiarpestana2('13')" href="#">SEO</a></li>
                                        <li id="pe10"><a onclick="javascript:cambiarpestana2('10')" href="#">F. Pagos - Financiación</a></li>
                                        <?php
                                        foreach ($idiomas AS $idioma)
                                        {
                                            ?>
                                                <li id="pe<?=$idioma[id]?>" ><a href="#" onclick="javascript:cambiarpestana2('<?=$idioma[id]?>')"><?=$idioma['nombre']?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
									<div class="span12" style="margin-bottom: 50px;">
										<form action="productos.php?editarpr=<?=$elemento['id']?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                          <div id="e1">
										  <fieldset>
											<legend>Editar <?=$elemento['nombre']?></legend>
                                            <div class="control-group">
                                              <label class="control-label" for="nombre">Nombre </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="nombre" name="nombre" value="<?=$elemento['nombre']?>" placeholder="Nombre del producto" required>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                              </div>
                                            </div>
                                            <div class="control-group">
                                              <label class="control-label" for="contenido">Contenido</label>
                                              <div class="controls">
                                                <textarea id="contenido" name="contenido" class="input-xlarge textarea" style="width: 810px; height: 200px"><?=$elemento['descripcion']?></textarea>
                                              </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="imagen">Imagen</label>
                                                <div class="controls">
                                                    <input class="input-file uniform_on" id="imagen" name="imagen" type="file">
                                                    <?php
                                                    if ($elemento['imagenprincipal'] != null)
                                                    {
                                                       ?>
                                                        <a style="color: #09F; font-size: 0.70rem;" href="../imagenesproductos/<?=$elemento['imagenprincipal']?>" target="_blank">ver imagen actual</a>
                                                       <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                              <label class="control-label" for="iva">IVA </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="iva" name="iva" value="<?=$elemento['iva']?>" placeholder="I.V.A. %" required onchange="calcula2()">
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                              </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                                <label class="control-label" for="nprecioiva">Precio con IVA </label>
                                                <div class="controls">
                                                    <input type="text" class="span6" id="precioiva" name="precioiva" value="<?=  number_format($elemento['precio']*(1+($elemento['iva']/100)),2)?>" placeholder="Precio (Con IVA)" onchange="calcula2()">
                                                    <span style="color: red; font-size: 0.70rem;">Opcional</span>
                                                </div>
                                            </div>
                                             <script>
                                                function calcula2(){
                                                    var precio = $('#precioiva').val();
                                                    precio = precio.replace(",",".");
                                                    var iva = $('#iva').val();
                                                    if(iva >= 0 && iva != '' && precio >= 0 && precio != ''){
                                                        var total = parseFloat(precio) / parseFloat(1 + (parseFloat(iva)/100));
                                                        total = total.toFixed(4);
                                                        $('#precio').val(total);
                                                    }else{
                                                         $('#precio').val('');
                                                    }
                                                                                        
                                                }
                                            </script>
                                            <div class="control-group" style="max-width: 60%;">
                                              <label class="control-label" for="precio">Precio </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="precio" name="precio" value="<?=$elemento['precio']?>" onchange="cambiar('precio')" placeholder="Precio (Sin IVA)" required>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                              </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                                    <label class="control-label" for="tprecio">Texto Alternativo Precio </label>
                                                    <div class="controls">
                                                        <input type="text" class="span6" id="tprecio" value="<?=$elemento['tprecio']?>" name="tprecio" placeholder="Texto alternativo precio">
							<span style="color: green; font-size: 0.70rem;">Opcional</span>
                                                    </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                                    <label class="control-label" for="comprecio">Comentario Precio </label>
                                                    <div class="controls">
                                                        <input type="text" class="span6" id="comprecio" value="<?=$elemento['comprecio']?>" name="comprecio" placeholder="Comentario precio">
							<span style="color: green; font-size: 0.70rem;">Opcional</span>
                                                    </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                              <label class="control-label" for="descuento">Descuento % </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="descuento" name="descuento" value="<?=$elemento['descuento']?>" placeholder="Descuento %" required>
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span>
                                                <p style="color: #09F; font-size: 0.70rem;">Dejar a 0 para no aplicar</p>
                                              </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                              <label class="control-label" for="descuentoe">Descuento € </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="descuentoe" name="descuentoe" value="<?=$elemento['descuentoe']?>" placeholder="Descuento €" required onchange="cambiar('descuentoe')">
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span>
                                                <p style="color: #09F; font-size: 0.70rem;">Solo se aplica si el descuento % está a 0. Dejar a 0 para no aplicar</p>
                                              </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                              <label class="control-label" for="peso">Peso </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="peso" name="peso" value="<?=$elemento['peso']?>" placeholder="Peso KG" required>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                              </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                              <label class="control-label" for="referencia">Referencia </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="referencia" name="referencia" value="<?=$elemento['referencia']?>" placeholder="Referencia">
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span>
                                              </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                              <label class="control-label" for="disponibilidad">Disponibilidad </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="disponibilidad" name="disponibilidad" value="<?=$elemento['disponibilidad']?>" placeholder="Disponibilidad">
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span>
                                              </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                              <label class="control-label" for="plazoEnt">Plazo de Entrega </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="plazoEnt" name="plazoEnt" value="<?=$elemento['plazoEnt']?>" placeholder="Plazo de Entrega">
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span>
                                              </div>
                                            </div>









                                            <!--div class="control-group">
                                              <label class="control-label" for="categoria1">Categoría 1</label>
                                              <div class="controls">
                                                <select id="categoria1" name="categoria1" class="chzn-select span4" required>
                                                    <option value="">Selecciona</option>
                                                    <?php
                                                        foreach ($listadosalt AS $listado)
                                                        {
                                                            ?>
                                                                <option value="<?=$listado['id']?>" <?=$listado['id'] == $elemento['idcat'] ? ' selected' : ''?>><?=$listado['categoria']?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                                <span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
                                              </div>
                                            </div>
                                            <div class="control-group">
                                              <label class="control-label" for="categoria2">Categoría 2</label>
                                              <div class="controls">
                                                <select id="categoria2" name="categoria2" class="chzn-select span4">
                                                    <option value="">Selecciona</option>
                                                    <?php
                                                        foreach ($listadosalt AS $listado)
                                                        {
                                                            ?>
                                                                <option value="<?=$listado['id']?>" <?=$listado['id'] == $elemento['idcat2'] ? ' selected' : ''?>><?=$listado['categoria']?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                                <span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
                                              </div>
                                            </div>
                                            <div class="control-group">
                                              <label class="control-label" for="categoria3">Categoría 3</label>
                                              <div class="controls">
                                                <select id="categoria3" name="categoria3" class="chzn-select span4">
                                                    <option value="">Selecciona</option>
                                                    <?php
                                                        foreach ($listadosalt AS $listado)
                                                        {
                                                            ?>
                                                                <option value="<?=$listado['id']?>" <?=$listado['id'] == $elemento['idcat3'] ? ' selected' : ''?>><?=$listado['categoria']?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                                <span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
                                              </div>
                                            </div>
                                            <div class="control-group">
                                              <label class="control-label" for="categoria4">Categoría 4</label>
                                              <div class="controls">
                                                <select id="categoria4" name="categoria4" class="chzn-select span4">
                                                    <option value="">Selecciona</option>
                                                    <?php
                                                        foreach ($listadosalt AS $listado)
                                                        {
                                                            ?>
                                                                <option value="<?=$listado['id']?>" <?=$listado['id'] == $elemento['idcat4'] ? ' selected' : ''?>><?=$listado['categoria']?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                                <span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
                                              </div>
                                            </div>
                                            <div class="control-group">
                                              <label class="control-label" for="categoria5">Categoría 5</label>
                                              <div class="controls">
                                                <select id="categoria5" name="categoria5" class="chzn-select span4">
                                                    <option value="">Selecciona</option>
                                                    <?php
                                                        foreach ($listadosalt AS $listado)
                                                        {
                                                            ?>
                                                                <option value="<?=$listado['id']?>" <?=$listado['id'] == $elemento['idcat5'] ? ' selected' : ''?>><?=$listado['categoria']?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                                <span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
                                              </div>
                                            </div-->
                                            












                                            <div class="control-group">
                                              <label class="control-label" for="marca">Marca</label>
                                              <div class="controls">
                                                <select id="marca" name="marca" class="chzn-select span4">
                                                    <option value="">Selecciona</option>
                                                    <?php
                                                    foreach ($listadoMar AS $listado)
                                                    {
                                                        ?>
                                                            <option value="<?=$listado['id']?>" <?=$listado['id'] == $elemento['idmarca'] ? ' selected' : ''?>><?=$listado['categoria']?></option>
                                                            <?php 
                                                    }
                                                ?>
                                                </select>
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                              </div>
                                            </div>
                                            <script>
                                                                                    function cambioTipo2(){  
                                                                                        if(document.getElementById('tipo2').value == 0 || document.getElementById('tipo2').value == 3 ){
                                                                                            $("#tranNo2").attr('style', 'display: none;');
                                                                                            $("#tranSi2").attr('style', 'display: block;');
                                                                                        }else{
                                                                                            $("#tranSi2").attr('style', 'display: none;');
                                                                                            $("#tranNo2").attr('style', 'display: block;');
                                                                                        }
                                                                                    }
                                                                                    
                                                                                </script>
                                            
                                            
											<input type="hidden" class="span6" name="idm" value="<?=$elemento['id']?>">
											<button type="submit" class="btn btn-primary">Modificar</button>
											<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button>
										  </fieldset>
                                        </div>



					<div id="e15" style="display: none">
                                            <fieldset>
						<legend>Categorías</legend>
                                                    <div class="control-group" style="max-width: 60%;">
                                                        
				
				<div id="nested" style="">
				<ul class="autoCheckbox">
				<?php 
				//Mostrando categorías padres
				foreach($masters as $master){
					//Evaluando si la categoría padre tiene algún hijo
					if($master["have_childrens"]>0){
						$have_childrens=1;
					}
					else{
						$have_childrens=0;
					}
				?>
					<li style="margin: 5px 0px">
						<div class="form-check form-check-inline">

						
                                                           	<input class="form-check-input checkbox-cat" type="checkbox" name="categoria[]" value="<?php echo $master["idcat"]?>" <?=$master["idcat"] == $elemento['idcat'] || $master["idcat"] == $elemento['idcat2'] || $master["idcat"] == $elemento['idcat3'] || $master["idcat"] == $elemento['idcat4'] || $master["idcat"] == $elemento['idcat5'] ? ' checked' : ''?> >
							 
<?=$master["idcat"]." - ".$elemento['idcat'] ?>
						
						<a href="#" data-status="<?php echo $have_childrens?>"
						style="margin: 5px 6px" class="btn btn-default btn-xs btn-folder">
						<i class="fa fa-folder"></i>
						<?php if($have_childrens == 1){?>
						<span class='fa fa-plus-circle'></span>
						<?php }?>
						<?php echo $master["categoria"]?></a>
						<?php
							//Llamando función recursiva para mostrar categorias hijas
							 echo Tree::nested($childrens, $master["idcat"], $elemento)
						?>
						</div>
					</li>
				<?php
				}
				?>
				</ul>
				</div>
				<span style="color: #09F; font-size: 0.70rem;">*Debe seleccionar hasta un máximo de 5 categorías</span><br>
				<span style="color: #09F; font-size: 0.70rem;">Si se elige una categoría hija de otra, el producto aparece en ambas</span>
				




                                                      </div>                                                                           
                                        </fieldset>                 
                                        </div>








                                        <div id="e14" style="display: none">
                                            <fieldset>
						<legend>Stock</legend>
                                                <div class="control-group" style="max-width: 60%;">
                                                    <label class="control-label" for="unidades">Unidades </label>
                                                    <div class="controls">
                                                      <input type="text" class="span6" id="unidades" name="unidades" value="<?=$elemento['unidades']?>" placeholder="Unidades en stock" required>
                                                      <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                    </div>
                                                </div>
                                                <div class="control-group" style="max-width: 60%;">
                                                    <label class="control-label" for="stock">Stock Mínimo </label>
                                                    <div class="controls">
                                                      <input type="text" class="span6" id="stock" name="stock" value="<?=$elemento['stockminimo']?>" placeholder="Stock mínimo" required>
                                                      <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                    </div>
                                                </div>
                                        </fieldset>
                                        <!--button type="submit" class="btn btn-primary">Modificar</button>
					<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button-->                                
                                        </div>                                      
                                        <div id="e11" style="display: none">
                                            <div class="control-group">
                                              <label class="control-label" for="tipo">Tipo de producto</label>
                                              <div class="controls">
                                                  <select id="tipo2" name="tipo" class="chzn-select span4" required onchange="cambioTipo2();">
                                                    <option value="0" <?=($elemento['tipo'] == 0 || $elemento['tipo'] == '' || $elemento['tipo'] == null) ? 'selected' : ''?>>Normal - Venta</option>
                                                    <option value="3"  <?=($elemento['tipo'] == 3) ? 'selected' : ''?>>Normal - Alquiler</option>
                                                    <option value="1" <?=($elemento['tipo'] == 1) ? 'selected' : ''?>>Descarga</option>
                                                    <option value="2" <?=($elemento['tipo'] == 2) ? 'selected' : ''?>>Inscripción</option>
                                                </select>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                              </div>
                                            </div>
                                            <div class="control-group">
                                              <label class="control-label" for="mostraretq">Mostrar etiqueta tipo producto</label>
                                              <div class="controls">
                                                <label class="uniform">
                                                  <input class="uniform_on" type="checkbox" name="mostraretq" id="mostraretq"<?=$elemento['mostraretq'] == 1 ? ' checked' : ''?> value="dis">
                                                  Marcar para definir como visible la etiqueta tipo producto.
                                                </label>
                                              </div>
                                            </div>    
                                            <div class="control-group">
                                              <label class="control-label" for="mostraretqAgo">Mostrar etiqueta Agotado</label>
                                              <div class="controls">
                                                <label class="uniform">
                                                  <input class="uniform_on" type="checkbox" name="mostraretqAgo" id="mostraretqAgo"<?=$elemento['mostraretqAgo'] == 1 ? ' checked' : ''?> value="dis">
                                                  Marcar para mostrar la etiqueta de Agotado.
                                                </label>
                                              </div>
                                            </div> 
                                        <div class="control-group">
                                          <label class="control-label" for="pagotado">Producto Agotado</label>
                                          <div class="controls">
                                              <select id="pagotado" name="pagotado" class="chzn-select span4" required>
                                                <option value="0" <?=($elemento['pagotado'] == 0) ? 'selected' : ''?>>Seguir Vendiendo</option>
                                                <option value="1" <?=($elemento['pagotado'] == 1) ? 'selected' : ''?>>Quitar Botón Añadir</option>
                                                <option value="2" <?=($elemento['pagotado'] == 2) ? 'selected' : ''?>>Botón Solicitar Info (Enlazado con contactar)</option>
                                            </select>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                          </div>
                                        </div>  
                                        <div class="control-group">
                                          <label class="control-label" for="agotado">Marcar Producto como Agotado</label>
                                          <div class="controls">
                                              <select id="agotado" name="agotado" class="chzn-select span4" required>
                                                <option value="0" <?=($elemento['agotado'] == 0) ? 'selected' : ''?>>Disponible</option>
                                                <option value="1" <?=($elemento['agotado'] == 1) ? 'selected' : ''?>>Agotado</option>
                                            </select>
                                            <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                          </div>
                                        </div> 
                                            <div class="control-group">
                                              <label class="control-label" for="mostraretqOfe">Mostrar etiqueta Oferta</label>
                                              <div class="controls">
                                                <label class="uniform">
                                                  <input class="uniform_on" type="checkbox" name="mostraretqOfe" id="mostraretqOfe"<?=$elemento['mostraretqOfe'] == 1 ? ' checked' : ''?> value="dis">
                                                  Marcar para mostrar la etiqueta de Oferta.
                                                </label>
                                              </div>
                                            </div>    
                                            <div class="control-group" style="display:<?=$elemento['tipo'] == 0 ? 'none' : 'block'?>" id="tranNo2">
                                                <label class="control-label" for="tipo">Transporte</label>
                                                <div class="controls">
                                                  SIN TRANSPORTE.
                                                </div>
                                              </div>
                                              <div class="control-group" style="display: <?=$elemento['tipo'] == 0 ? 'block' : 'none'?>" id="tranSi2">
                                                <label class="control-label" for="tipo">Transporte</label>
                                                <div class="controls">
                                                  TRANSPORTE POR DEFECTO.
                                                </div>
                                              </div>
                                            <div class="control-group">
                                              <label class="control-label" for="disponible">Visible/Disponible</label>
                                              <div class="controls">
                                                <label class="uniform">
                                                  <input class="uniform_on" type="checkbox" name="disponible" id="disponible"<?=$elemento['disponible'] == 1 ? ' checked' : ''?> value="dis">
                                                  Marcar para definir como visible/disponible para comprar
                                                </label>
                                              </div>
                                            </div>
                                            <div class="control-group" style="max-width: 60%;">
                                              <label class="control-label" for="orden">Orden </label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="orden" name="orden" value="<?=$elemento['orden']?>" placeholder="Orden">
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span>
                                              </div>
                                            </div>
                                            <input type="hidden" class="span6" name="idm" value="<?=$elemento['id']?>">
											<!--button type="submit" class="btn btn-primary">Modificar</button>
											<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button-->
                                        </div>
                                        <div id="e12" style="display: none">
                                            <fieldset>
										<legend>Etiquetas producto</legend>
                                                                                <div class="control-group">
                                                                                
                                            <table>
                                            <tr>
                                        <?php 
                                            $i = 0;
                                            $cont = 0;
                                            $check = "";
                                            $precio = "";
                                            $imagen = "";
                                            foreach ($elemento4 AS $atr){ 
                                                $i++;
                                                foreach ($elemento44 AS $atra){
                                                    if($atra['idetiqueta'] == $atr['id']){
                                                        $check = "checked";
                                                    }
                                                }
                                                if($cont <= 4){
                                                    $cont++;
                                                ?>
                                                    <td style="width:10%;">
                                                    <div class="control-group">
                                                        <label style="text-align:center;"><b><?=$atr['nombre']?></b></label>
                                                        <div style="text-align:center;"><input type="checkbox" name="dispEtiq[]" id="atr<?=$atr['id']?>" value="<?=$atr['id']?>" <?=$check?>></div>
                                                    </div>
                                                    
                                                    </td>
                                                <?php
                                                    }else{
                                                        $cont=1;
                                                ?>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="control-group">
                                                            <label style="text-align:center;"><b><?=$atr['nombre']?></b></label>
                                                            <div style="text-align:center;"><input type="checkbox" name="dispEtiq[]" id="atr<?=$atr['id']?>" value="<?=$atr['id']?>" <?=$check?>></div>
                                                        </div>

                                                    </td>
                                                <?php
                                                }
                                                $check = "";
                                                $precio = "";
                                                $imagen = "";
                                            }
                                            ?>
                                            </tr>
                                        </table>
                                        </div>
                                        </fieldset>
                                        <!--button type="submit" class="btn btn-primary">Modificar</button>
					<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button-->                                
                                        </div>
                                                                                    
                                        <div id="e13" style="display: none">
                                            <fieldset>
						<legend>SEO</legend>
                                                <div class="control-group" style="max-width: 60%;">
                                                    <label class="control-label" for="nmetatitulo">Meta título SEO </label>
                                                    <div class="controls">
                                                      <input type="text" class="span6" id="nmetatitulo" name="metatitulo" value="<?=$elemento['meta_titulo']?>" placeholder="Meta del titulo para SEO">
                                                    </div>
                                                  </div>
                                                  <div class="control-group" style="max-width: 60%;">
                                                    <label class="control-label" for="nmetadescripcion">Meta descripción SEO </label>
                                                    <div class="controls">
                                                      <input type="text" class="span6" id="nmetadescripcion" name="metadescripcion" value="<?=$elemento['meta_descripcion']?>" placeholder="Meta de la descripción para SEO">
                                                    </div>
                                                </div>                          
                                        </fieldset>
                                        <!--button type="submit" class="btn btn-primary">Modificar</button>
					<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button-->                                
                                        </div>
                                                                                        
                                            <div id="e9" style="display:none;">
                                        <fieldset>
										<legend>Atributos producto</legend>
                                                                                <div class="control-group">
                                              
                                        <table>
                                            <tr>
                                        <?php 
                                            $i = 0;
                                            $cont = 0;
                                            $check = "";
                                            $precio = "";
                                            $imagen = "";
                                            foreach ($elemento2 AS $atr){ 
                                                $i++;
                                                foreach ($elemento22 AS $atra){
                                                    if($atra['idatributo'] == $atr['ida']){
                                                        $check = "checked";
                                                        $precio = $atra['precio'];
                                                        $precioE = $atra['precioextra'];
                                                        $imagen = $atra['imagen'];
                                                    }
                                                }
                                                if($cont <= 4){
                                                    $cont++;
                                                ?>
                                                    <td style="width:10%;">
                                                    <div class="control-group">
                                                        <label style="text-align:center;"><b><?=$atr['nombre']?>: <?=$atr['atributo']?></b></label>
                                                        <div style="text-align:center;"><input type="checkbox" name="disp[]" id="atr<?=$atr['ida']?>" value="<?=$atr['ida']?>" <?=$check?>></div>
                                                        <label style="text-align:center;margin-top:5px;">Precio</label>
                                                        <div><input style="width: 50%;text-align: center;margin-left: 22%;" type="text" name="precio<?=$atr['ida']?>" placeholder="Precio" value="<?=$precio?>" /></div>
                                                        <label style="text-align:center;margin-top:5px;">Precio Extra</label>
                                                        <div><input style="width: 50%;text-align: center;margin-left: 22%;" type="text" name="precioE<?=$atr['ida']?>" placeholder="Precio Extra" value="<?=$precioE?>" /></div>
                                                        <div style="text-align: center"><input class="input-file uniform_on" id="imagenAtr_<?=$atr['ida']?>" name="imagenAtr_<?=$atr['ida']?>" type="file">
                                                        <?php
                                                        if ($imagen != null && $imagen != '')
                                                        {
                                                           ?>
                                                            <br><a style="color: #09F; font-size: 0.70rem;" href="../imagenesproductosAtr/<?=$imagen?>" target="_blank">ver imagen actual</a>
                                                           <?php
                                                        }
                                                        ?></div>
                                                    </div>
                                                    
                                                    </td>
                                                <?php
                                                    }else{
                                                        $cont=1;
                                                ?>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="control-group">
                                                            <label style="text-align:center;"><b><?=$atr['nombre']?>: <?=$atr['atributo']?></b></label>
                                                            <div style="text-align:center;"><input type="checkbox" name="disp[]" id="atr<?=$atr['ida']?>" value="<?=$atr['ida']?>" <?=$check?>></div>
                                                            <label style="text-align:center;margin-top:5px;">Precio</label>
                                                            <input  style="width: 50%;text-align: center;margin-left: 22%;" type="text" name="precio<?=$atr['ida']?>" placeholder="Precio" value="<?=$precio?>" />
                                                            <label style="text-align:center;margin-top:5px;">Precio Extra</label>
                                                            <div><input style="width: 50%;text-align: center;margin-left: 22%;" type="text" name="precioE<?=$atr['ida']?>" placeholder="Precio Extra" value="<?=$precioE?>" /></div>
                                                            <div style="text-align: center"><input class="input-file uniform_on" id="imagenAtr_<?=$atr['ida']?>" name="imagenAtr_<?=$atr['ida']?>" type="file">
                                                        <?php
                                                        if ($imagen != null && $imagen != '')
                                                        {
                                                           ?>
                                                                <br><a style="color: #09F; font-size: 0.70rem;" href="../imagenesproductosAtr/<?=$imagen?>" target="_blank">ver imagen actual</a>
                                                           <?php
                                                        }
                                                        ?></div>
                                                        </div>

                                                    </td>
                                                <?php
                                                }
                                                $check = "";
                                                $precio = "";
                                                $imagen = "";
                                                $precioE = "";
                                            }
                                            ?>
                                            </tr>
                                        </table>
                                                                                    <label class="control-label" for="rfentrada">Requerir Fecha de Entrada</label>
                                              <div class="controls">
                                                <label class="uniform">
                                                  <input class="uniform_on" type="checkbox" name="rfentrada" id="rfentrada"<?=$elemento['rfentrada'] == 1 ? ' checked' : ''?> value="dis">
                                                  Marcar para requerir fecha de entrada
                                                </label>
                                              </div>
                                            </div>
                                            <div class="control-group">
                                              <label class="control-label" for="rfsalida">Requerir Fecha de Salida</label>
                                              <div class="controls">
                                                <label class="uniform">
                                                  <input class="uniform_on" type="checkbox" name="rfsalida" id="rfsalida"<?=$elemento['rfsalida'] == 1 ? ' checked' : ''?> value="dis">
                                                  Marcar para requerir fecha de salida
                                                </label>
                                              </div>
                                            </div>                              
                                            <div class="control-group">
                                                <label class="control-label" for="CatAtriF">Fechas Asociadas con Caegoría de Atributos: </label>
                                                <div class="controls">
                                                      <select id="CatAtriF" name="CatAtriF" class="chzn-select span4">
                                                          <option value="0">Selecciona</option>
                                                          <?php
                                                              foreach ($listadoCatAtr AS $listado)
                                                              {
                                                                  ?>
                                                                      <option value="<?=$listado['id']?>"<?=$listado['id'] == $elemento['atributoAsociado'] ? ' selected' : ''?>><?=$listado['atributo']?></option>
                                                                  <?php
                                                              }
                                                          ?>
                                                      </select>
                                                      <span style="color: green; font-size: 0.70rem;">Funcionamiento unido a Fecha de Entrada/Salida.</span><br>
                                                    </div>
                                              </div>
                                            <div class="control-group">
                                                <label class="control-label" for="CatAtriF">Nº días máximo: </label>
                                                <div class="controls">
                                                      <input type="text" class="span6" id="maximoDias" name="maximoDias" value="<?=$elemento['DiasMax']?>" placeholder="Días máximos permitidos" required>
                                                      <span style="color: green; font-size: 0.70rem;">0 para días ilimitados</span><br>
                                                    </div>
                                            </div>   
                                        <input type="hidden" name="catributos" value="<?=$i?>" />
                                        <!--button type="submit" class="btn btn-primary">Modificar</button-->
                                        </fieldset>
                                    </div>
                                    <div id="e10" style="display:none;">
                                        <fieldset>
                                            <legend>F. Pagos - Financiación</legend>
                                            <div class="control-group">
                                              <label class="control-label" for="paypalm">Pago mensual Paypal</label>
                                              <div class="controls">
                                                <select id="paypalm" name="paypalm" class="chzn-select span4" required>
                                                    <option value="0" <?=($elemento['paypalm'] == 0) ? 'selected' : ''?>>No</option>
                                                    <option value="1" <?=($elemento['paypalm'] == 1) ? 'selected' : ''?>>Si</option>
                                                </select>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                              </div>
                                            </div>
                                            <div class="control-group">
                                              <label class="control-label" for="domicim">Pago mensual Domiciliación</label>
                                              <div class="controls">
                                                <select id="domicim" name="domicim" class="chzn-select span4" required>
                                                    <option value="0" <?=($elemento['domicim'] == 0) ? 'selected' : ''?>>No</option>
                                                    <option value="1" <?=($elemento['domicim'] == 1) ? 'selected' : ''?>>Si</option>
                                                </select>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                              </div>
                                            </div>
                                            <script>
                                                function abrirCuota2(){
                                                    if(document.getElementById("aplazame2").value == 0){
                                                        document.getElementById("vcuota2").style.display='none';
                                                    }else{
                                                        document.getElementById("vcuota2").style.display='block';
                                                    }
                                                }
                                            </script>
                                            <div class="control-group">
                                              <label class="control-label" for="aplazame">Pago Aplazame</label>
                                              <div class="controls">
                                                  <select id="aplazame2" name="aplazame" class="chzn-select span4" required onchange="abrirCuota2()">
                                                    <option value="0" <?=($elemento['aplazame'] == 0) ? 'selected' : ''?>>No</option>
                                                    <option value="1" <?=($elemento['aplazame'] == 1) ? 'selected' : ''?>>Si</option>
                                                </select>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                              </div>
                                            </div>
                                            <div id="vcuota2" class="control-group" style="display: <?=($elemento['aplazame'] == 1) ? 'block' : 'none'?>; max-width: 60%;">
                                              <label class="control-label" for="caplazame1">Cuota Inicial Aplazame</label>
                                              <div class="controls">
                                                  <input type="text" class="span6" id="caplazame111" name="caplazame1" placeholder="Cuota inicial Aplazame" value="<?=$elemento['caplazame1']?>" onchange="cambiar('caplazame111')">
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                              </div><br>
                                              <label class="control-label" for="caplazame">Cuota Aplazame</label>
                                              <div class="controls">
                                                <input type="text" class="span6" id="caplazame222" name="caplazame" placeholder="Cuota mensual Aplazame" value="<?=$elemento['caplazame']?>" onchange="cambiar('caplazame222')">
                                                <span style="color: green; font-size: 0.70rem;">Opcional</span><br>
                                              </div>
                                            </div>
                                            <script>
                                                function abrirFDir2(){
                                                    if(document.getElementById("fDirecta2").value == 0){
                                                        document.getElementById("finanDir2").style.display='none';
                                                    }else{
                                                        document.getElementById("finanDir2").style.display='block';
                                                    }
                                                }
                                            </script>
                                        <div class="control-group">
                                              <label class="control-label" for="fDirecta">Financiación Directa</label>
                                              <div class="controls">
                                                <select id="fDirecta2" name="fDirecta" class="chzn-select span4" required onchange="abrirFDir2()">
                                                    <option value="0" <?=($elemento['fDirecta'] == 0) ? 'selected' : ''?>>No</option>
                                                    <option value="1" <?=($elemento['fDirecta'] == 1) ? 'selected' : ''?>>Si</option>
                                                </select>
                                                <span style="color: red; font-size: 0.70rem;">Requerido</span><br>
                                                <p style="color: #09F; font-size: 0.70rem;">La cuota inicial será el precio del producto</p>
                                              </div>
                                            </div>
                                        <div id="finanDir2" class="control-group" style="display: <?=$elemento['fDirecta'] == 0 ? 'none' : 'block'?>;">
                                        <table>
                                            <tr>
                                        <?php 
                                            $i = 0;
                                            $cont = 0;
                                            $check = "";
                                            $precio = "";
                                            
                                            foreach ($elemento3 AS $atr){ 
                                                $i++;
                                                foreach ($elemento33 AS $atra){ 
                                                    if($atra['meses'] == $atr['id_c']){
                                                        $check = "checked";
                                                        $precio = $atra['cuota'];
                                                    }
                                                }
                                                if($cont <= 4){
                                                    $cont++;
                                                ?>
                                                    <td style="width:10%;">
                                                    <div class="control-group">
                                                        <label style="text-align:center;"><b><?=$atr['meses']?> meses + Inicial</b></label>
                                                        <div style="text-align:center;"><input type="checkbox" name="cuotas[]" id="cuo<?=$atr['id_c']?>" value="<?=$atr['id_c']?>" onchange="cambiar('cuo<?=$atr['id_c']?>')" <?=$check?>></div>
                                                        <label style="text-align:center;margin-top:5px;">Precio</label>
                                                        <div><input style="width: 50%;text-align: center;margin-left: 22%;" type="text" id="precioC<?=$atr['id_c']?>" name="precioC<?=$atr['id_c']?>" onchange="cambiar('precioC<?=$atr['id_c']?>')" placeholder="Precio" value="<?=$precio?>" /></div>
                                                    </div>
                                                    
                                                    </td>
                                                <?php
                                                    }else{
                                                        $cont=1;
                                                ?>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="control-group">
                                                            <label style="text-align:center;"><b><?=$atr['meses']?> meses + Inicial</b></label>
                                                            <div style="text-align:center;"><input type="checkbox" name="cuotas[]" id="cuo<?=$atr['id_c']?>" value="<?=$atr['id_c']?>" onchange="cambiar('cuo<?=$atr['id_c']?>')" <?=$check?>></div>
                                                            <label style="text-align:center;margin-top:5px;">Precio</label>
                                                            <input  style="width: 50%;text-align: center;margin-left: 22%;" type="text" name="precioC<?=$atr['id_c']?>" placeholder="Precio" value="<?=$precio?>" />
                                                        </div>

                                                    </td>
                                                <?php
                                                }
                                                $check = "";
                                                $precio = "";
                                            }
                                            ?>
                                            </tr>
                                        </table>
                                        </div>
                                        </fieldset>
                                        <!--button type="submit" class="btn btn-primary">Modificar</button>
					<button type="button" onclick="location.href = 'productos.php';" class="btn">Cancelar</button-->
                                    </div>
                                            
                                            <?php
                                                        //echo "hola";
                                            foreach ($idiomas AS $idioma)
                                            {
                                                $cont = 0;
                                                   foreach ($idiomasprod AS $idiomam)
                                                    {
                                                       
                                                       if($idioma['iniciales'] == $idiomam['idioma']){
                                                           $cont = 1;
                                            ?>  
                                                        <div id="e<?=$idioma['id']?>" style="display:none;">
                                                          <fieldset>
                                                            <legend>Editar Producto en <?=$idioma['nombre']?></legend>
                                                            <div class="control-group">
                                                              <label class="control-label" for="nnombre">Nombre </label>
                                                              <div class="controls">
                                                                <input type="text" class="span6" id="nnombre" name="nombre<?=$idioma['id']?>" placeholder="Nombre del producto" value="<?=$idiomam['nombre']?>">
                                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                              </div>
                                                            </div>
                                                            <div class="control-group">
                                                              <label class="control-label" for="ncontenido">Contenido</label>
                                                              <div class="controls">
                                                                <textarea id="ncontenido" name="contenido<?=$idioma['id']?>" class="input-xlarge textarea" style="width: 810px; height: 200px"><?=$idiomam['descripcion']?></textarea>
                                                              </div>
                                                            </div>
                                                          </fieldset>
                                                        </div>
                                            <?php
                                                       }
                                                    }
                                                    if($cont == 0){
                                                    ?>
                                                        <div id="e<?=$idioma['id']?>" style="display:none;">
                                                          <fieldset>
                                                            <legend>Editar Producto en <?=$idioma['nombre']?></legend>
                                                            <div class="control-group">
                                                              <label class="control-label" for="nnombre">Nombre </label>
                                                              <div class="controls">
                                                                <input type="text" class="span6" id="nnombre" name="nombre<?=$idioma['id']?>" placeholder="Nombre del producto" value="">
                                                                <span style="color: red; font-size: 0.70rem;">Requerido</span>
                                                              </div>
                                                            </div>
                                                            <div class="control-group">
                                                              <label class="control-label" for="ncontenido">Contenido</label>
                                                              <div class="controls">
                                                                <textarea id="ncontenido" name="contenido<?=$idioma['id']?>" class="input-xlarge textarea" style="width: 810px; height: 200px"></textarea>
                                                              </div>
                                                            </div>
                                                          </fieldset>
                                                        </div>
                                            <?php
                                                    }
                                            }
                                            ?>
                                            
										</form>
									</div>
								</div>
							</div>
                        </div>
						<?php } ?>
                        <!-- block -->
                    
                        <script>
                            $(document).ready(function () {
                                var data_id = '';
                                var data_name = '';
                                
                                $('.open-Modal').click(function () {
                                    
                                    //alert('error 00');
                                    if (typeof $(this).data('id') !== 'undefined') {
                                        data_id = $(this).data('id');
                                        data_name = $(this).data('name');
                                        //alert('valor: ' + $(this).data('id'));
                                    }
                                    //$('#id-elemento').text(data_id);
                                    $('#elemento').text(data_name);
                                })
                                
                                $('#btn-eliminar').click(function () {
                                    var url = "?eliminarpr=" + data_id;
                                    location.href = url;
                                })
                                
                            });
                        </script>
                    
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">ELIMINAR PRODUCTO</h4>
                              </div>
                              <div class="modal-body">
                                ¿Esta seguro de que desea eliminar el producto "<strong><span id="elemento"></span></strong>"?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button id="btn-eliminar" type="button" class="btn btn-danger">Eliminar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- -->
                    
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Listado de Productos</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" style="margin-bottom: 50px;">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="#subirco" onclick="javascript: $('#add').css('height', 'auto'); $('#add').css('visibility', 'visible');"><button class="btn btn-success">Subir Producto <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      <!--<div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                      </div>-->
                                   </div>
									<?php if (count($listados) > 0) { ?>
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" id="productosT">
                                            <thead>
                                                <tr role="row">
													<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="text-align: center;">#</th>
                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Ref.</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Producto</th>
                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Marca</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Categoría Prin.</th>
                                                                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Precio</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">IVA</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Des.</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">PVP</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Estado</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Destacado</th>
													<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="text-align: center;">Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody role="alert" aria-live="polite" aria-relevant="all">
												<?php
													foreach ($listados AS $listado)
													{
                                                        if (@$lineapi != 'odd')
                                                            $lineapi = 'odd';
                                                        else
                                                            $lineapi = 'even';
														?>
														<tr class="<?=$lineapi?>">
															<td valign="top" class=""  style="text-align: center;"><?=$listado['id']?></td>
                                                            <td valign="top" class="" ><?=$listado['referencia']?></td>
															<td valign="top" class="" ><?=$listado['nombre']?></td>
                                                            <td valign="top" class="" ><?=$listado['categoria']?></td>
															<td valign="top" class="" ><?=$listadosCateg2[$listado['idcat']] != '' ? $listadosCateg2[$listado['idcat']]:'Sin Relación'?></td>
															<td valign="top" class=""  style="text-align: right;"><?=number_format($listado['precio'], 2, ',', '.')?> €</td>
															<td valign="top" class=""  style="color: #D00; text-align: right;"><?=$listado['iva']?> %</td>
															<td valign="top" class=""  style="color: green; text-align: right;"><?=$listado['descuento'] > 0 ? $listado['descuento'].' %' : ($listado['descuentoe'] > 0 ? number_format($listado['descuentoe'], 2, ',', '.').' €' : 'N/A')?></td>
															<td valign="top" class=""  style="color: #06F; text-align: right;"><?=number_format(($listado['precio'] - ($listado['descuento'] > 0 ? ($listado['precio'] * ($listado['descuento'] / 100)) : ($listado['descuentoe'] > 0 ? $listado['descuentoe'] : 0))) * ($listado['iva'] / 100 + 1), 2, ',', '.')?> €</td>
                                                            <td valign="top" class="" ><?=$listado['disponible'] ? 'activo' :  'oculto'?></td>
                                                            <td valign="top" class="" ><?=$listado['destacado'] ? 'si' :  'no'?></td>
															<td valign="top" class=""  style="text-align: center;">
                                                                                                                                <script>
                                                                                                                                   function cambiarEstado(producto){
                                                                                                                                        var cadena = "productos.php?estadopr="+producto;
                                                                                                                                        $.post(cadena, function(){
                                                                                                                                            var camT = "#cambioestado_"+producto;
                                                                                                                                            if($(camT).attr('class') == 'fa fa-eye fa-lg'){
                                                                                                                                                $(camT).attr('class', 'fa fa-eye-slash fa-lg');
                                                                                                                                                $(camT).attr('style', 'color: #999;cursor: pointer;');
                                                                                                                                            }else{
                                                                                                                                                $(camT).attr('class', 'fa fa-eye fa-lg');
                                                                                                                                                $(camT).attr('style', 'color: green;cursor: pointer;');
                                                                                                                                            }
                                                                                                                                        });
                                                                                                                                    }
                                                                                                                                </script>
																<?=$listado['disponible'] ? '<i onclick="cambiarEstado('.$listado['id'].');" id="cambioestado_'.$listado['id'].'" style="color: green;cursor: pointer;" class="fa fa-eye fa-lg"></i>' :  '<i id="cambioestado_'.$listado['id'].'" onclick="cambiarEstado('.$listado['id'].');" style="color: #999;cursor: pointer;" class="fa fa-eye-slash fa-lg"></i>'?>
																<a href="?destacadopr=<?=$listado['id']?>"><?=$listado['destacado'] ? '<i style="color: green;" class="fa fa-check fa-lg"></i>' :  '<i style="color: #C00;" class="fa fa-times fa-lg"></i>'?></a>
																<a href="imagenes_productos.php?imagenespr=<?=$listado['id']?>"><i style="color: orange;" class="fa fa-picture-o fa-lg"></i></a>
																<a href="?editarpr=<?=$listado['id']?>"><i class="fa fa-pencil fa-lg"></i></a>
                                                                <a class="open-Modal" href="#" data-name="<?=$listado['nombre']?>" data-id="<?=$listado['id']?>" data-toggle="modal" data-target="#myModal" /><i style="color: red;" class="fa fa-trash-o fa-lg"></i></a>
																<!--<a href="?eliminarpr=<?=$listado['id']?>" onclick="return confirm('Desea eliminar el producto \'\'#<?=$listado['id']?> - <?=$listado['nombre']?>\'\' de la web?');"><i style="color: #C00;" class="fa fa-trash-o fa-lg"></i></a>-->
															</td>
														</tr>
														<?php
													}
												?>
                                            </tbody>
                                        </table>
									<?php } else { ?>
										<p>No hay productos!</p>
									<?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
                    <?php $inicioTabla = 0; if(isset($_POST['inicioTab'])){ $inicioTabla = $_POST['inicioTab']; } ?>
                    <script>
                        $(document).ready(function() {
                            $('#productosT').DataTable( {
                                "dom": '<"top"lpf<"clear">>rt<"bottom"ip<"clear">>',
                                "displayStart": <?=$inicioTabla?>,
                                "bStateSave": true
                            } ); 
                        } );
                    </script>
				<?php require_once('blocks/pie.php'); ?>