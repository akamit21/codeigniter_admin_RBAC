<!-- page-footer -->
				<div class="footer">
					<div class="pull-right"> 10GB of <strong>250GB</strong> Free. </div>
					<div> <strong>Copyright</strong> Fillip Technologies &copy; 2014-2019 </div>
				</div>
				<!-- /.footer -->
			</div>
			<!-- /page-wrapper -->
		</div>
		<!-- /wrapper -->
		<!-- mainly scripts -->
		
		<script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<!-- custom and plugin javascript -->
		<script src="<?php echo base_url(); ?>assets/js/inspinia.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>
		<!-- data picker -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>
		<!-- Clock picker -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/clockpicker/clockpicker.js"></script>
		<!-- Jasny -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>
		<!-- password-strength -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/pwstrength/pwstrength-bootstrap.min.js"></script>
		<!-- sweet-alert -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>
		<!-- select 2 -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/select2/select2.full.min.js"></script>
		<!-- dropify -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/dropify/js/dropify.min.js"></script>
		<!-- summernote -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/summernote/summernote.min.js"></script>
		<!-- blueimp gallery -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
		<!-- js init -->
		<script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
		<!-- toastr -->
		<script src="<?php echo base_url(); ?>assets/js/plugins/toastr/toastr.min.js"></script>
		<script type="text/javascript">
			<?php if($this->session->flashdata('success')) { ?>
				toastr.success("<?php echo $this->session->flashdata('success'); ?>");
			<?php } else if($this->session->flashdata('error')) { ?>
				toastr.error("<?php echo $this->session->flashdata('error'); ?>");
			<?php } else if($this->session->flashdata('warning')) { ?>
				toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
			<?php } else if($this->session->flashdata('info')) { ?>
				toastr.info("<?php echo $this->session->flashdata('info'); ?>");
			<?php } ?>
		</script>
	</body>
</html>
