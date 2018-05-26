<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Intervention Edit</h3>
            </div>
			<?php echo form_open('intervention/edit/'.$intervention['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_company" class="control-label">Company</label>
						<div class="form-group">
							<select name="id_company" class="form-control">
								<option value="">select company</option>
								<?php 
								foreach($all_company as $company)
								{
									$selected = ($company['id'] == $intervention['id_company']) ? ' selected="selected"' : "";

									echo '<option value="'.$company['id'].'" '.$selected.'>'.$company['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_heure" class="control-label">Date Heure</label>
						<div class="form-group">
							<input type="text" name="date_heure" value="<?php echo ($this->input->post('date_heure') ? $this->input->post('date_heure') : $intervention['date_heure']); ?>" class="has-datetimepicker form-control" id="date_heure" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $intervention['description']); ?></textarea>
							<span class="text-danger"><?php echo form_error('description');?></span>
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