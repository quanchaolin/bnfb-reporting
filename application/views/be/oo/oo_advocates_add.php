		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/be/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery-appear/jquery-appear.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/select2/js/select2.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/pnotify/pnotify.custom.js"></script>
		
		<script src="<?php echo base_url(); ?>assets/be/vendor/codemirror/lib/codemirror.js"></script>

		<script src="<?php echo base_url(); ?>assets/be/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/bootstrap-confirmation/bootstrap-confirmation.js"></script>

		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/vendor/jquery-validation/additional-methods.js"></script>



		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/be/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/be/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/be/javascripts/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->		

		<!--<script src="<?php echo base_url(); ?>assets/be/javascripts/layouts/examples.header.menu.js"></script>-->
		<script src="<?php echo base_url(); ?>assets/be/javascripts/dashboard/examples.dashboard.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/javascripts/tables/examples.datatables.tabletools.js"></script>		
		<script src="<?php echo base_url(); ?>assets/be/javascripts/forms/validation.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/javascripts/forms/examples.wizard.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/javascripts/ui-elements/examples.charts.js"></script>
		<script src="<?php echo base_url(); ?>assets/be/javascripts/ui-elements/examples.modals.js"></script>	

		<script src="<?php echo base_url(); ?>assets/be/javascripts/forms/script.js"></script>


										<blockquote class="primary rounded b-thin">
											<p class="text-success">Number of advocates and champions with capacity advocating for biofortification</p>
										</blockquote>				

										<form id="frm_advocates_add" action="<?php echo base_url();?>be/outcomes/save" method="post" onsubmit="return save_advocates();">
							 					<div class="alert alert-success block-inner" style="display: none;" id="div_advocates_success">
							 						<button type="button" class="close" data-dismiss="alert">×</button>
							        			</div>               
							 					<div class="alert alert-danger block-inner" style="display: none;" id="div_advocates_error"">
							 						<button type="button" class="close" data-dismiss="alert">×</button>	
							        			</div>               

												<div class="form-group col-md-6">
													<label class="control-label">Period <span class="required">*</span></label>
													<div class="input-daterange input-group" data-plugin-datepicker>
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" class="form-control" name="period_from" id="period_from" required/>
														<span class="input-group-addon">to</span>
														<input type="text" class="form-control" name="period_to" id="period_to" required/>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="form-group col-md-6">
													<label class="control-label">Implementor <span class="required">*</span></label>
													<select id="implementor_id" name="implementor_id" data-plugin-selectTwo class="form-control populate" title="Please select Implementor" required>
														<option value="">Select Implementor</option>
			                                       		<?php foreach($implementors as $row): ?>
			                                            	<option value="<?php echo $row->implementor_id; ?>" ><?php echo $row->implementor_name; ?></option>
			                                            <?php endforeach; ?>                       

													</select>
												</div>
												<div class="form-group col-md-6">
													<label class="control-label">Country/Region <span class="required">*</span></label>
													<select id="country_id" name="country_id" data-plugin-selectTwo class="form-control populate" title="Please select Country/Region" required>
														<option value="">Select Country</option>
			                                       		<?php foreach($countries as $row): ?>
			                                            	<option value="<?php echo $row->country_id; ?>" ><?php echo $row->country_name; ?></option>
			                                            <?php endforeach; ?>                       

													</select>
												</div>
												<div class="clearfix"></div>
												<div class="form-group col-md-6">
													<label class="control-label">District/Province</label>
													<select id="district_id" name="district_id" data-plugin-selectTwo class="form-control populate" title="Please select District/Province">
														<option value="">Select District/Province</option>
			                                       		<?php foreach($districts as $row): ?>
			                                            	<option value="<?php echo $row->district_id; ?>" ><?php echo $row->district_name; ?></option>
			                                            <?php endforeach; ?>                       

													</select>
												</div>												
												<div class="form-group col-md-3">
													<label class="control-label">No. of Advocates/Champions <span class="required">*</span></label>
													<input type="number" name="no_advocates" id="no_advocates" class="form-control" value="" required/>
												</div>
												<div class="clearfix"></div>

											<footer class="panel-footer">
												<div class="row">
													<div class="pull-right">
														<button class="btn btn-success"><i class="fa fa-save"></i> Submit <i id="advocates_spinner" class="fa fa-spinner fa-spin" style="margin-left: 5px; display: none"></i></button>
													</div>
												</div>
											</footer>
										</form>