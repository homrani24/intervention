<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ajouter Utiliasateur</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<select name="role" class="form-control">
								<option value="">sélectionnez role</option>
								<?php 
								foreach($all_role as $role)
								{
									$selected = ($role['id'] == $this->input->post('role')) ? ' selected="selected"' : "";

									echo '<option value="'.$role['id'].'" '.$selected.'>'.$role['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Mot de passe</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">Nom</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile" class="control-label">Téléphone</label>
						<div class="form-group">
							<input type="text" name="mobile" value="<?php echo $this->input->post('mobile'); ?>" class="form-control" id="mobile" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="statut" class="control-label">Statut</label>
						<div class="form-group">
							<input type="text" name="statut" value="<?php echo $this->input->post('statut'); ?>" class="form-control" id="statut" />
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