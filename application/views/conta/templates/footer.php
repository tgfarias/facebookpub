<footer class="site-footer">
         <div class="mr-auto">
            <p class="text-primary mb-0"><?php echo $this->lang->line('desenvolvido');?> <i class="fa fa-heart text-success"></i> <?php echo $this->lang->line('por');?> <a href="mailto:alissonacioli@hotmail.com">Alisson Acioli</a></p>
         </div>
         <div><a href="javascript:void(0)"><?php echo $this->lang->line('direitos_reservados');?> &copy; <?php echo website_config('nome_site');?></a></div>
      </footer>
      <!-- /.site-footer -->
   </main>
   <!-- /.site-main -->
</div>
<!-- /.site-wrapper -->
<div class="modal fade video-modal" id="video-modal" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content"><iframe src="about:blank" width="760" height="440" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
   </div>
</div>
<!-- #video-modal -->
<!-- /.theme-customizer -->

<script>
var baseURL = '<?php echo base_url();?>';

<?php
if(!empty($jsVariables)){
   foreach($jsVariables as $variavel=>$valor){
?>
var <?php echo $variavel;?> = '<?php echo $valor;?>';
<?php
   }
}
?>
</script>
<!-- core plugins -->
<script src="<?php echo base_url();?>assets/vendor/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bower_components/tether/dist/js/tether.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bower_components/switchery/dist/switchery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bower_components/waypoints/lib/shortcuts/sticky.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bower_components/counterup/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>assets/global/js/plugins/dropdown-caret.js"></script>
<script src="<?php echo base_url();?>assets/global/js/plugins/firstlitter.js"></script>
<script src="<?php echo base_url();?>assets/global/js/plugins/video-modal.js"></script>


<script src="<?php echo base_url();?>assets/vendor/bower_components/chartist/dist/chartist.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jvectormap/maps/jquery-jvectormap-world-mill.js"></script>
<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.categories.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bower_components/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/owl-carousel/owl.carousel.min.js"></script>

<script src="<?php echo base_url();?>assets/vendor/bower_components/sweetalert/dist/sweetalert.min.js"></script>
<!-- site-wide scripts -->
<script src="<?php echo base_url();?>assets/global/js/main.js"></script>
<script src="<?php echo base_url();?>assets/global/js/settings.js"></script>
<script src="<?php echo base_url();?>assets/js/site.js"></script>
<script src="<?php echo base_url();?>assets/js/navbar.js"></script>
<script src="<?php echo base_url();?>assets/js/menubar.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.0/jquery.form.min.js" integrity="sha384-E4RHdVZeKSwHURtFU54q6xQyOpwAhqHxy2xl9NLW9TQIqdNrNh60QVClBRBkjeB8" crossorigin="anonymous"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<!-- theme customizer -->
<script src="<?php echo base_url();?>assets/examples/js/theme-customizer.js"></script>
<?php
if(isset($jsLoader)){
   foreach($jsLoader as $jsFile){
      echo '<script src="'.base_url($jsFile).'"></script>';
   }
}
?>

</body>
</html>