</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	<div class="clearfix"></div>
	


<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

        <script src="<?php echo base_url(); ?>admin_assets/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>admin_assets/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/modernizr.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url(); ?>admin_assets/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url(); ?>admin_assets/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url(); ?>admin_assets/js/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>admin_assets/js/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>admin_assets/js/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url(); ?>admin_assets/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url(); ?>admin_assets/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/counter.js"></script>
	
		<script src="<?php echo base_url(); ?>admin_assets/js/retina.js"></script>

		<script src="<?php echo base_url(); ?>admin_assets/js/custom.js"></script>
                
                <script>
                $(function(){
                   $('.cat_type').on('change',function(){
                       var value_category =$(this).val();
                       $.ajax({
                           
                           'url':'<?php echo base_url('get_category_by_ajax'); ?>/'+value_category,
                           'type':'get',
                           'dataType':'html',
                           success:function(data){
                               $('.category_name').html(data);
                           }
                       });
                       
                   });
                });
                </script>
	<!-- end: JavaScript-->
	
</body>
</html>
