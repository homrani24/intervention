<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modifier Contrat</h3>
            </div>
			<?php echo form_open('contrat/edit/'.$contrat['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
				<div class="col-md-6">
						<label for="id_company" class="control-label">société</label>
						<div class="form-group">
							<select name="id_company" class="form-control">
								<option value="">sélectionnez la société</option>
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
						<label for="date_deb" class="control-label">Date Début</label>
						<div class="form-group">
							<input type="text" name="date_deb" value="<?php echo ($this->input->post('date_deb') ? $this->input->post('date_deb') : $contrat['date_deb']); ?>" class="has-datepicker form-control" id="date_deb" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_fin" class="control-label">Date Fin</label>
						<div class="form-group">
							<input type="text" name="date_fin" value="<?php echo ($this->input->post('date_fin') ? $this->input->post('date_fin') : $contrat['date_fin']); ?>" class="has-datepicker form-control" id="date_fin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="type" class="control-label">Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $contrat['type']); ?>" class="form-control" id="type" />
							<span class="text-danger"><?php echo form_error('type');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Envoyer
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>