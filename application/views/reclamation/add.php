<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ajouter Reclamation </h3>
            </div>
            <?php echo form_open('reclamation/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
				  <div class="col-md-6">
						<label for="id_company" class="control-label">société</label>
						<div class="form-group">
							<select name="id_company" class="form-control">
								<option value=""> sélectionnez la société</option>
								<?php 
								foreach($all_company as $company)
								{
									$selected = ($company['id'] == $this->input->post('id_company')) ? ' selected="selected"' : "";

									echo '<option value="'.$company['id'].'" '.$selected.'>'.$company['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>

					<div class="col-md-6">
						<label for="date_heure" class="control-label">Date Heure</label>
						<div class="form-group">
							<input type="text" name="date_heure" value="<?php echo $this->input->post('date_heure'); ?>" class="has-datetimepicker form-control" id="date_heure" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="panne" class="control-label">Panne</label>
						<div class="form-group">
							<input type="text" name="panne" value="<?php echo $this->input->post('panne'); ?>" class="form-control" id="panne" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sujet" class="control-label">Sujet</label>
						<div class="form-group">
							<textarea name="sujet" class="form-control" id="sujet"><?php echo $this->input->post('sujet'); ?></textarea>
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