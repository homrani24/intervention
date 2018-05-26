<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Contrat Add</h3>
            </div>
            <?php echo form_open('contrat/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="date_deb" class="control-label">Date Deb</label>
						<div class="form-group">
							<input type="text" name="date_deb" value="<?php echo $this->input->post('date_deb'); ?>" class="has-datepicker form-control" id="date_deb" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_fin" class="control-label">Date Fin</label>
						<div class="form-group">
							<input type="text" name="date_fin" value="<?php echo $this->input->post('date_fin'); ?>" class="has-datepicker form-control" id="date_fin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="type" class="control-label">Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo $this->input->post('type'); ?>" class="form-control" id="type" />
							<span class="text-danger"><?php echo form_error('type');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>