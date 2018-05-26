<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Reclamation Edit</h3>
            </div>
			<?php echo form_open('reclamation/edit/'.$reclamation['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="date_heure" class="control-label">Date Heure</label>
						<div class="form-group">
							<input type="text" name="date_heure" value="<?php echo ($this->input->post('date_heure') ? $this->input->post('date_heure') : $reclamation['date_heure']); ?>" class="has-datetimepicker form-control" id="date_heure" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="panne" class="control-label">Panne</label>
						<div class="form-group">
							<input type="text" name="panne" value="<?php echo ($this->input->post('panne') ? $this->input->post('panne') : $reclamation['panne']); ?>" class="form-control" id="panne" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sujet" class="control-label">Sujet</label>
						<div class="form-group">
							<textarea name="sujet" class="form-control" id="sujet"><?php echo ($this->input->post('sujet') ? $this->input->post('sujet') : $reclamation['sujet']); ?></textarea>
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