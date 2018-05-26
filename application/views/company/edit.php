<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Company Edit</h3>
            </div>
			<?php echo form_open('company/edit/'.$company['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $company['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tel" class="control-label">Tel</label>
						<div class="form-group">
							<input type="text" name="tel" value="<?php echo ($this->input->post('tel') ? $this->input->post('tel') : $company['tel']); ?>" class="form-control" id="tel" />
							<span class="text-danger"><?php echo form_error('tel');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fax" class="control-label">Fax</label>
						<div class="form-group">
							<input type="text" name="fax" value="<?php echo ($this->input->post('fax') ? $this->input->post('fax') : $company['fax']); ?>" class="form-control" id="fax" />
							<span class="text-danger"><?php echo form_error('fax');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ville" class="control-label">Ville</label>
						<div class="form-group">
							<input type="text" name="ville" value="<?php echo ($this->input->post('ville') ? $this->input->post('ville') : $company['ville']); ?>" class="form-control" id="ville" />
							<span class="text-danger"><?php echo form_error('ville');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $company['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse</label>
						<div class="form-group">
							<textarea name="adresse" class="form-control" id="adresse"><?php echo ($this->input->post('adresse') ? $this->input->post('adresse') : $company['adresse']); ?></textarea>
							<span class="text-danger"><?php echo form_error('adresse');?></span>
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