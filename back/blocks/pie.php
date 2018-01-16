            </div>
            <hr>
            <footer style="text-align: center;">
                <p>Camaltec AdPanel 3 &copy; Camaltec Ibérica 2005 - <?=date('Y')?></p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
        <!--/.fluid-container-->
        <link rel="stylesheet" type="text/css" media="all" href="vendors/pickercolor/jquery.minicolors.css">
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

		<script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/form-validation.js"></script>
        <script type="text/javascript" src="vendors/pickercolor/jquery.minicolors.min.js"></script>
		<script src="assets/scripts.js"></script>
		<script>
			$(function() {
				$(".datepicker").datepicker();
				$(".uniform_on").uniform();
				$(".chzn-select").chosen();
				$('.textarea').wysihtml5();

				$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
					var $total = navigation.find('li').length;
					var $current = index+1;
					var $percent = ($current/$total) * 100;
					$('#rootwizard').find('.bar').css({width:$percent+'%'});
					// If it's the last tab then hide the last button and show the finish instead
					if($current >= $total) {
						$('#rootwizard').find('.pager .next').hide();
						$('#rootwizard').find('.pager .finish').show();
						$('#rootwizard').find('.pager .finish').removeClass('disabled');
					} else {
						$('#rootwizard').find('.pager .next').show();
						$('#rootwizard').find('.pager .finish').hide();
					}
				}});
				$('#rootwizard .finish').click(function() {
					alert('Finished!, Starting over!');
					$('#rootwizard').find("a[href*='tab1']").trigger('click');
				});
			});
            
            var colpick = $('.colorpicker').each( function() {
                            $(this).minicolors({
                              control: $(this).attr('data-control') || 'hue',
                              inline: $(this).attr('data-inline') === 'true',
                              letterCase: 'lowercase',
                              opacity: false,
                              change: function(hex, opacity) {
                                if(!hex) return;
                                if(opacity) hex += ', ' + opacity;
                                try {
                                  console.log(hex);
                                } catch(e) {}
                                $(this).select();
                              },
                              theme: 'bootstrap'
                            });
                          });
                            
                          var $inlinehex = $('#inlinecolorhex h3 small');
                          $('#inlinecolors').minicolors({
                            inline: true,
                            theme: 'bootstrap',
                            change: function(hex) {
                              if(!hex) return;
                              $inlinehex.html(hex);
                            }
                          });
		</script>

        <!--<script src="./Tables_files/bootstrap.min.js"></script>-->
        <script src="./Tables_files/jquery.dataTables.min.js"></script>


        <script src="./Tables_files/scripts.js"></script>
        <script src="./Tables_files/DT_bootstrap.js"></script>
  
        <div id="tutorial" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3>Ayuda</h3>
            </div>
            <div class="modal-body">
              <?php echo $tutorial; ?>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn btn-primary">Cerrar</a>
            </div>
        </div>  
        <script type="text/javascript" src="js/scripts.js"></script>  
		<!-- CSS y JS para las Pestañas -->
		<link href="assets/tabs.css" rel="stylesheet" media="screen">
		<script type="text/javascript" src="assets/tabs.js"></script>
    </body>
</html>